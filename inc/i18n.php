<?php
/**
 * Front-end languages without a plugin: English at the site root, Bangla
 * under /bn/ and Arabic (right-to-left) under /ar/.
 *
 * The language prefix is read from the request and stripped from
 * REQUEST_URI before WordPress parses it, so /bn/pricing/ resolves to the
 * normal Pricing page; every home_url() (permalinks, menus, forms) then
 * gets the prefix back, so visitors stay in their language as they browse.
 * Theme strings come from languages/{locale}.mo; post and page content
 * stays in the language it was written in.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The supported languages, keyed by URL prefix ('en' has none).
 */
function lieusoft_languages() {
	return array(
		'en' => array( 'locale' => 'en_US', 'name' => 'English', 'short' => 'EN', 'dir' => 'ltr' ),
		'bn' => array( 'locale' => 'bn_BD', 'name' => 'বাংলা', 'short' => 'বাং', 'dir' => 'ltr' ),
		'ar' => array( 'locale' => 'ar', 'name' => 'العربية', 'short' => 'ع', 'dir' => 'rtl' ),
	);
}

/**
 * The current front-end language code ('en', 'bn' or 'ar').
 */
function lieusoft_lang() {
	return $GLOBALS['lieusoft_lang'] ?? 'en';
}

/**
 * The request path with the language prefix removed, e.g. "/pricing/".
 */
function lieusoft_request_path() {
	return $GLOBALS['lieusoft_request_path'] ?? '/';
}

/**
 * Read the language prefix off the request. Runs as soon as the theme
 * loads — before WordPress parses the request — and only on front-end
 * page views (never wp-admin, AJAX, cron or the CLI).
 */
function lieusoft_detect_language() {
	$GLOBALS['lieusoft_lang'] = 'en';

	if ( is_admin() || wp_doing_ajax() || wp_doing_cron() || ( defined( 'WP_CLI' ) && WP_CLI ) || empty( $_SERVER['REQUEST_URI'] ) ) {
		return;
	}

	$uri       = wp_unslash( $_SERVER['REQUEST_URI'] ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- only matched against a fixed pattern and re-assigned.
	$home_path = trailingslashit( (string) wp_parse_url( get_option( 'home' ), PHP_URL_PATH ) );
	$codes     = implode( '|', array_diff( array_keys( lieusoft_languages() ), array( 'en' ) ) );

	if ( preg_match( '#^' . preg_quote( $home_path, '#' ) . '(' . $codes . ')(?=/|\?|$)#', $uri, $m ) ) {
		$GLOBALS['lieusoft_lang']  = $m[1];
		$rest                      = substr( $uri, strlen( $home_path ) + strlen( $m[1] ) );
		$_SERVER['REQUEST_URI']    = $home_path . ltrim( $rest, '/' );
		$GLOBALS['locale']         = lieusoft_languages()[ $m[1] ]['locale'];
	}

	$GLOBALS['lieusoft_request_path'] = (string) wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
	if ( 0 === strpos( $GLOBALS['lieusoft_request_path'], $home_path ) ) {
		$GLOBALS['lieusoft_request_path'] = '/' . substr( $GLOBALS['lieusoft_request_path'], strlen( $home_path ) );
	}
}
lieusoft_detect_language();

/**
 * Load the theme's translations for the current language.
 */
function lieusoft_load_textdomain() {
	load_theme_textdomain( 'lieusoft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'lieusoft_load_textdomain', 1 );

/**
 * Arabic reads right to left: flip WordPress's own direction flag so
 * is_rtl(), <html dir> and the body "rtl" class all follow.
 */
function lieusoft_set_text_direction() {
	if ( 'rtl' === lieusoft_languages()[ lieusoft_lang() ]['dir'] && isset( $GLOBALS['wp_locale'] ) ) {
		$GLOBALS['wp_locale']->text_direction = 'rtl';
	}
}
add_action( 'init', 'lieusoft_set_text_direction' );

/**
 * Add a URL's language prefix: "https://site/pricing/" → "https://site/bn/pricing/".
 * Leaves wp-* paths (REST API, login, admin, uploads) and other hosts alone.
 */
function lieusoft_localize_url( $url, $lang = null ) {
	$lang = $lang ?? lieusoft_lang();
	$home = untrailingslashit( get_option( 'home' ) );

	if ( 'en' === $lang || 0 !== strpos( $url, $home ) ) {
		return $url;
	}

	$rest = substr( $url, strlen( $home ) );
	if ( '' !== $rest && ! in_array( $rest[0], array( '/', '?', '#' ), true ) ) {
		return $url; // A different host that merely shares a prefix (e.g. lieusoft.com.bd).
	}
	if ( preg_match( '#^/(wp-|' . implode( '|', array_keys( lieusoft_languages() ) ) . ')(/|$)#', $rest ) ) {
		return $url;
	}

	return $home . '/' . $lang . ( '' === $rest ? '/' : ( '/' === $rest[0] ? $rest : '/' . $rest ) );
}

function lieusoft_filter_home_url( $url, $path, $scheme ) {
	if ( is_admin() || 'rest' === $scheme ) {
		return $url;
	}
	return lieusoft_localize_url( $url );
}
add_filter( 'home_url', 'lieusoft_filter_home_url', 10, 3 );

/**
 * The prefix is stripped from REQUEST_URI, so WordPress would see every
 * /bn/ page as "wrong" against its (prefixed) permalink and redirect in a
 * loop — skip canonical redirects for the prefixed languages.
 */
function lieusoft_skip_canonical_redirect( $redirect ) {
	return 'en' === lieusoft_lang() ? $redirect : false;
}
add_filter( 'redirect_canonical', 'lieusoft_skip_canonical_redirect' );

/**
 * Menu items: keep their links in the current language and translate their
 * labels (menu titles live in the database, so their English text is
 * listed in inc/i18n-strings.php for the translation files).
 */
function lieusoft_localize_menu_items( $items ) {
	foreach ( $items as $item ) {
		$item->url   = lieusoft_localize_url( $item->url );
		$item->title = translate( $item->title, 'lieusoft' ); // phpcs:ignore WordPress.WP.I18n -- runtime lookup of DB menu titles.
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'lieusoft_localize_menu_items' );

/**
 * Per-language fonts — Roboto has no Bengali or Arabic letters.
 */
function lieusoft_language_fonts() {
	$fonts = array(
		'bn' => array( 'family' => 'Hind+Siliguri:wght@400;500;600;700', 'name' => 'Hind Siliguri' ),
		'ar' => array( 'family' => 'Cairo:wght@400;500;600;700', 'name' => 'Cairo' ),
	);
	$lang = lieusoft_lang();
	if ( empty( $fonts[ $lang ] ) ) {
		return;
	}
	wp_enqueue_style( 'lieusoft-lang-font', 'https://fonts.googleapis.com/css2?family=' . $fonts[ $lang ]['family'] . '&display=swap', array(), null );
	$stack = '"' . $fonts[ $lang ]['name'] . '", "Roboto", sans-serif';
	wp_add_inline_style( 'lieusoft-theme', ":root{--font-heading:{$stack};--font-body:{$stack};--font-display:{$stack};}" );

	if ( is_rtl() ) {
		wp_enqueue_style( 'lieusoft-rtl', get_theme_file_uri( '/assets/css/rtl.css' ), array( 'lieusoft-theme' ), filemtime( get_theme_file_path( '/assets/css/rtl.css' ) ) );
	}
}
add_action( 'wp_enqueue_scripts', 'lieusoft_language_fonts', 20 );

function lieusoft_language_body_class( $classes ) {
	$classes[] = 'lang-' . lieusoft_lang();
	return $classes;
}
add_filter( 'body_class', 'lieusoft_language_body_class' );

/**
 * The same page's URL in another language.
 */
function lieusoft_language_url( $lang, $keep_query = true ) {
	$query = $keep_query && isset( $_SERVER['QUERY_STRING'] ) && '' !== $_SERVER['QUERY_STRING'] ? '?' . wp_unslash( $_SERVER['QUERY_STRING'] ) : ''; // phpcs:ignore WordPress.Security.ValidatedSanitizedInput
	$url   = untrailingslashit( get_option( 'home' ) ) . lieusoft_request_path() . $query;
	return lieusoft_localize_url( $url, $lang );
}

/**
 * hreflang alternates so search engines index each language separately.
 */
function lieusoft_hreflang_links() {
	if ( is_404() || is_search() ) {
		return;
	}
	foreach ( lieusoft_languages() as $code => $lang ) {
		printf( '<link rel="alternate" hreflang="%s" href="%s">' . "\n", esc_attr( $code ), esc_url( lieusoft_language_url( $code, false ) ) );
	}
	printf( '<link rel="alternate" hreflang="x-default" href="%s">' . "\n", esc_url( lieusoft_language_url( 'en', false ) ) );
}
add_action( 'wp_head', 'lieusoft_hreflang_links', 2 );

/**
 * Language switcher (header dropdown; $variant 'list' for the mobile panel).
 */
function lieusoft_language_switcher( $variant = 'dropdown' ) {
	$languages = lieusoft_languages();
	$current   = lieusoft_lang();

	if ( 'list' === $variant ) {
		echo '<div class="lang-list" aria-label="' . esc_attr__( 'Language', 'lieusoft' ) . '">';
		foreach ( $languages as $code => $lang ) {
			printf(
				'<a href="%s" hreflang="%s" lang="%s"%s>%s</a>',
				esc_url( lieusoft_language_url( $code ) ),
				esc_attr( $code ),
				esc_attr( $code ),
				$code === $current ? ' aria-current="true" class="is-active"' : '',
				esc_html( $lang['name'] )
			);
		}
		echo '</div>';
		return;
	}
	?>
	<div class="lang-switch" data-lang-switch>
		<button class="lang-switch__btn" type="button" aria-haspopup="true" aria-expanded="false">
			<?php echo lieusoft_icon( 'globe' ); ?>
			<span><?php echo esc_html( $languages[ $current ]['short'] ); ?></span>
			<?php echo lieusoft_icon( 'chevron-down', 'lang-switch__chev' ); ?>
			<span class="screen-reader-text"><?php esc_html_e( 'Change language', 'lieusoft' ); ?></span>
		</button>
		<ul class="lang-switch__menu" role="menu">
			<?php foreach ( $languages as $code => $lang ) : ?>
				<li role="none">
					<a role="menuitem" href="<?php echo esc_url( lieusoft_language_url( $code ) ); ?>" hreflang="<?php echo esc_attr( $code ); ?>" lang="<?php echo esc_attr( $code ); ?>"<?php echo $code === $current ? ' aria-current="true" class="is-active"' : ''; ?>>
						<span><?php echo esc_html( $lang['name'] ); ?></span>
						<?php if ( $code === $current ) : ?><?php echo lieusoft_icon( 'check-circle' ); ?><?php endif; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
}
