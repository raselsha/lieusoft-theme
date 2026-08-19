<?php
/**
 * Lieusoft theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LIEUSOFT_VERSION', '1.0.0' );

/**
 * WordPress marks a nav item "current" by comparing the URL path only, so
 * in-page anchors like /#solutions on the front page all match "/" and get
 * flagged current alongside Home. Strip that back off for anything with a
 * "#" in its URL — only a real page match should ever look active.
 */
function lieusoft_anchor_menu_classes( $classes, $item ) {
	if ( false !== strpos( $item->url, '#' ) ) {
		$classes = array_diff( $classes, array(
			'current-menu-item',
			'current_page_item',
			'current-menu-ancestor',
			'current_page_ancestor',
			'current_page_parent',
		) );
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'lieusoft_anchor_menu_classes', 10, 2 );

function lieusoft_anchor_menu_link_attributes( $atts, $item ) {
	if ( false !== strpos( $item->url, '#' ) ) {
		unset( $atts['aria-current'] );
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'lieusoft_anchor_menu_link_attributes', 10, 2 );

function lieusoft_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary'          => __( 'Main Menu', 'lieusoft' ),
		'footer-product'   => __( 'Footer — Product', 'lieusoft' ),
		'footer-solutions' => __( 'Footer — Solutions', 'lieusoft' ),
		'footer-services'  => __( 'Footer — Services', 'lieusoft' ),
		'footer-company'   => __( 'Footer — Company', 'lieusoft' ),
	) );
}
add_action( 'after_setup_theme', 'lieusoft_setup' );

function lieusoft_scripts() {
	wp_enqueue_style(
		'lieusoft-fonts',
		'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto+Slab:wght@400;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'lieusoft-style', get_stylesheet_uri(), array(), LIEUSOFT_VERSION );

	wp_enqueue_style( 'lieusoft-theme', get_theme_file_uri( '/assets/css/theme.css' ), array( 'lieusoft-fonts' ), filemtime( get_theme_file_path( '/assets/css/theme.css' ) ) );

	wp_enqueue_script( 'lieusoft-theme', get_theme_file_uri( '/assets/js/theme.js' ), array(), filemtime( get_theme_file_path( '/assets/js/theme.js' ) ), true );
}
add_action( 'wp_enqueue_scripts', 'lieusoft_scripts' );

/**
 * Register a widget area for the footer columns.
 */
function lieusoft_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'lieusoft' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget__title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'lieusoft_widgets_init' );

/**
 * Small helper: render a nav menu, falling back to nothing if unassigned
 * so the front page still renders cleanly before menus are configured.
 */
function lieusoft_nav_menu( array $args = array() ) {
	if ( ! has_nav_menu( $args['theme_location'] ?? 'primary' ) ) {
		return;
	}
	wp_nav_menu( $args );
}

/**
 * Inline SVG icon set (line-style, currentColor) standing in for the
 * Font Awesome icons the live site loads via Elementor Pro, so the theme
 * has no external icon-font dependency.
 */
function lieusoft_icon( $name, $class = '' ) {
	$icons = array(
		'check-circle'  => '<circle cx="12" cy="12" r="9"/><path d="m8.5 12.5 2.3 2.3L15.5 10"/>',
		'arrow-right'   => '<path d="M4 12h16"/><path d="m13 5 7 7-7 7"/>',
		'user'          => '<circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-6 8-6s8 2 8 6"/>',
		'clipboard'     => '<rect x="6" y="4" width="12" height="17" rx="2"/><path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"/><path d="M9 11h6M9 15h6"/>',
		'clock'         => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
		'pin'           => '<path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/>',
		'envelope'      => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 6.5 8 6 8-6"/>',
		'whatsapp'      => '<path d="M12 3a9 9 0 0 0-7.8 13.4L3 21l4.7-1.2A9 9 0 1 0 12 3Z"/><path d="M8.5 8.6c.3-.7.6-.7.9-.7h.6c.2 0 .4 0 .6.5l.7 1.7c.1.3 0 .5-.1.7l-.5.6c-.1.2-.2.4 0 .7.5.8 1.5 1.8 2.3 2.2.3.2.5.2.7 0l.6-.6c.2-.2.4-.2.7-.1l1.7.8c.4.2.4.4.4.6-.1.9-1.3 1.7-2.2 1.7-1.8 0-4.3-1.4-5.9-3-1.6-1.6-2.6-3.7-2.5-5.4 0-.6.2-1.2.5-1.7Z" fill="currentColor" stroke="none"/>',
		'facebook'      => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M14 8.5h-1.5c-.6 0-1 .4-1 1V11h2.4l-.3 2.5H11.5V21h-2.5v-7.5H7V11h2V9c0-1.9 1.3-3 3.2-3H14v2.5Z" fill="currentColor" stroke="none"/>',
		'linkedin'      => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M7 10v7M7 7v.01M11 17v-4.5c0-1.4 1-2.5 2.3-2.5s2.2 1 2.2 2.5V17" />',
		'youtube'       => '<rect x="3" y="6" width="18" height="12" rx="3"/><path d="m10.5 9.5 5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none"/>',
		'globe'         => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.5 5.5 3.5 9s-1 6.5-3.5 9c-2.5-2.5-3.5-5.5-3.5-9s1-6.5 3.5-9Z"/>',
		'star'          => '<path d="m12 3 2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.1L6.6 19.3l1.3-6-4.6-4.1 6.1-.6L12 3Z" fill="currentColor" stroke="none"/>',
		'menu'          => '<path d="M4 7h16M4 12h16M4 17h16"/>',
	);

	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}

	return sprintf(
		'<svg class="icon %s" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%s</svg>',
		esc_attr( $class ),
		$icons[ $name ]
	);
}
