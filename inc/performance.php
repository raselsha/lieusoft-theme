<?php
/**
 * Front-end weight trimming. Elementor and Easy Digital Downloads stay
 * active (an old Elementor page and the EDD checkout still use them), but
 * their stylesheets, scripts and Google Fonts load on every page by
 * default. The theme renders everything itself, so they're only kept where
 * they're actually needed.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether this page's content is drawn by Elementor: a singular page on the
 * default template that was built with Elementor (the front page and pages
 * on theme templates never print Elementor content).
 */
function lieusoft_page_needs_elementor() {
	if ( ! is_singular() || is_front_page() ) {
		return false;
	}
	$id = get_queried_object_id();
	return '' === get_page_template_slug( $id ) && 'builder' === get_post_meta( $id, '_elementor_edit_mode', true );
}

/**
 * Easy Digital Downloads screens: checkout, receipts, order history and
 * single downloads.
 */
function lieusoft_page_needs_edd() {
	if ( is_singular( 'download' ) ) {
		return true;
	}
	if ( ! is_page() || ! function_exists( 'edd_get_option' ) ) {
		return false;
	}
	$pages = array_filter( array_map( 'absint', array(
		edd_get_option( 'purchase_page' ),
		edd_get_option( 'success_page' ),
		edd_get_option( 'failure_page' ),
		edd_get_option( 'purchase_history_page' ),
		edd_get_option( 'confirmation_page' ),
	) ) );
	return in_array( get_queried_object_id(), $pages, true );
}

function lieusoft_trim_plugin_assets() {
	if ( is_admin() ) {
		return;
	}
	$drop_elementor = ! lieusoft_page_needs_elementor();
	$drop_edd       = ! lieusoft_page_needs_edd();

	foreach ( wp_styles()->queue as $handle ) {
		if ( ( $drop_elementor && preg_match( '/^(elementor|e-|widget-|base-(desktop|mobile)$|swiper)/', $handle ) )
			|| ( $drop_edd && in_array( $handle, array( 'edd-styles', 'edd-blocks' ), true ) ) ) {
			wp_dequeue_style( $handle );
		}
	}
	if ( $drop_elementor ) {
		foreach ( wp_scripts()->queue as $handle ) {
			if ( preg_match( '/^(elementor|e-|swiper)/', $handle ) ) {
				wp_dequeue_script( $handle );
			}
		}
	}
	// jQuery is only pulled in for EDD's cart script and Elementor; the
	// theme's own JS doesn't use it, so it's render-blocking for nothing.
	if ( $drop_edd && $drop_elementor ) {
		wp_dequeue_script( 'edd-ajax' );
		wp_dequeue_script( 'jquery' );
	}
}
// Late, so every plugin has enqueued first; again before head and footer
// output catches anything added later in the request.
add_action( 'wp_enqueue_scripts', 'lieusoft_trim_plugin_assets', 9999 );
add_action( 'wp_print_styles', 'lieusoft_trim_plugin_assets', 1 );
add_action( 'wp_print_footer_scripts', 'lieusoft_trim_plugin_assets', 1 );

/**
 * Elementor prints its own Google Fonts links (every Roboto weight) —
 * skip them unless the page is drawn by Elementor.
 */
add_filter( 'elementor/frontend/print_google_fonts', function ( $print ) {
	return lieusoft_page_needs_elementor() ? $print : false;
} );

// WordPress's emoji fallback script and styles: every browser we support
// renders emoji natively.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );

/**
 * Open the Google Fonts file connection early.
 */
function lieusoft_font_preconnect( $urls, $relation ) {
	if ( 'preconnect' === $relation ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'lieusoft_font_preconnect', 10, 2 );

/**
 * The front page's largest paint is the first hero slide — start fetching
 * it before the stylesheets are parsed.
 */
function lieusoft_preload_hero_image() {
	if ( is_front_page() ) {
		printf(
			'<link rel="preload" as="image" href="%1$s" imagesrcset="%2$s 720w, %1$s 1100w" imagesizes="(max-width: 900px) calc(100vw - 48px), 560px" fetchpriority="high">' . "\n",
			esc_url( get_theme_file_uri( '/assets/images/slide-doctor.jpg' ) ),
			esc_url( get_theme_file_uri( '/assets/images/slide-doctor-720.jpg' ) )
		);
	}
}
add_action( 'wp_head', 'lieusoft_preload_hero_image', 1 );

/**
 * Google Fonts is a cross-origin, render-blocking stylesheet; on a slow
 * phone connection it delays the first paint. Load it without blocking —
 * text shows in the fallback font for a moment (display=swap anyway).
 */
function lieusoft_async_google_fonts( $html, $handle, $href ) {
	if ( is_admin() || false === strpos( $href, 'fonts.googleapis.com' ) ) {
		return $html;
	}
	$async = str_replace( "media='all'", "media='print' onload=\"this.media='all'\"", $html );
	return $async . '<noscript>' . $html . '</noscript>';
}
add_filter( 'style_loader_tag', 'lieusoft_async_google_fonts', 10, 3 );
