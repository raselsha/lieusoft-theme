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

/**
 * Each solution landing page re-themes the shared components (buttons,
 * links, icon circles, the CTA banner — even the header's own "Book
 * Consultation" button) around that solution's accent color, just by
 * overriding the --color-primary/--color-blue-light/--color-body-bg custom
 * properties for the page. See the "Per-solution accent" block in theme.css.
 */
function lieusoft_solution_accent_body_class( $classes ) {
	$template_classes = array(
		'template-solution-tailor.php'   => array( 'accent-orange' ),
		'template-solution-service.php'  => array( 'accent-green' ),
		'template-product-pdf.php'       => array( 'footer-dark' ),
		'template-product-booking.php'   => array( 'accent-purple', 'footer-dark' ),
		'template-product-doctor.php'    => array( 'accent-purple', 'footer-dark' ),
		'template-product-tailor.php'    => array( 'accent-purple', 'footer-dark' ),
	);

	foreach ( $template_classes as $template => $extra ) {
		if ( is_page_template( $template ) ) {
			$classes = array_merge( $classes, $extra );
		}
	}

	return $classes;
}
add_filter( 'body_class', 'lieusoft_solution_accent_body_class' );

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
 * Shared data for the 3 business solutions — used by the homepage section
 * and the /solutions/ index page so both stay in sync from one source.
 */
function lieusoft_get_solutions() {
	return array(
		array(
			'title'  => __( 'Doctor Appointment Solution', 'lieusoft' ),
			'desc'   => __( 'Modern website with online appointment booking, doctor profiles, patient management, Live Queue and an easy-to-use admin dashboard.', 'lieusoft' ),
			'tags'   => array( 'Appointment', 'Patient', 'LIve Queue' ),
			'accent' => 'purple',
			'bg'     => 'solution-doctor-bg.png',
			'badge'  => 'badge-doctor.png',
			'url'    => home_url( '/doctor-appointment-solution/' ),
		),
		array(
			'title'  => __( 'Tailor Management Solution', 'lieusoft' ),
			'desc'   => __( 'Manage customer orders, body measurements, delivery schedules, invoices, and shop operations from one simple dashboard.', 'lieusoft' ),
			'tags'   => array( 'Orders', 'Mesurments', 'Customers', 'Invoices' ),
			'accent' => 'orange',
			'bg'     => 'solution-tailor-bg.png',
			'badge'  => 'badge-shirt.png',
			'url'    => home_url( '/tailor-shop-management-solution/' ),
		),
		array(
			'title'  => __( 'Service Booking Solution', 'lieusoft' ),
			'desc'   => __( 'Perfect for thai massage, salons, spas, beauty centers, repair services, consultants, and other appointment-based businesses.', 'lieusoft' ),
			'tags'   => array( 'Orders', 'Mesurments', 'Customers', 'Invoices' ),
			'accent' => 'green',
			'bg'     => 'solution-spa-bg.jpg',
			'badge'  => 'badge-calendar.png',
			'url'    => home_url( '/service-booking-solution/' ),
		),
	);
}

/**
 * Shared data for the 4 WordPress plugins — used by the homepage section
 * and the /products/ index page so both stay in sync from one source.
 */
function lieusoft_get_plugins() {
	return array(
		array(
			'title'  => __( 'Service Booking', 'lieusoft' ),
			'desc'   => __( 'Complete Booking & appointment solutions for any service.', 'lieusoft' ),
			'icon'   => 'badge-calendar.png',
			'accent' => 'green',
			'url'    => home_url( '/service-booking-plugin/' ),
		),
		array(
			'title'  => __( 'Doctor Appointment', 'lieusoft' ),
			'desc'   => __( 'Appointment booking system for clinics and hospitals.', 'lieusoft' ),
			'icon'   => 'badge-doctor.png',
			'accent' => 'purple',
			'url'    => home_url( '/doctor-appointment-plugin/' ),
		),
		array(
			'title'  => __( 'Tailor Order Management', 'lieusoft' ),
			'desc'   => __( 'Manage tailor orders, customers, measurements and deliveries', 'lieusoft' ),
			'icon'   => 'badge-shirt.png',
			'accent' => 'orange',
			'url'    => home_url( '/tailor-order-management-plugin/' ),
		),
		array(
			'title'  => __( 'PDF Embed Viewer', 'lieusoft' ),
			'desc'   => __( '3d Flip book PDF Viewer & Embedded for WordPress.', 'lieusoft' ),
			'icon'   => 'icon-open-book.png',
			'accent' => 'blue',
			'url'    => home_url( '/pdf-embed-viewer/' ),
		),
	);
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
		'calendar'      => '<rect x="4" y="5" width="16" height="15" rx="2"/><path d="M4 10h16M8 3v4M16 3v4"/>',
		'stethoscope'   => '<path d="M6 4v6a4 4 0 0 0 8 0V4"/><path d="M6 4H4.5M14 4h1.5"/><circle cx="18" cy="15" r="2.5"/><path d="M18 12.5V11a4 4 0 0 0-4-4"/>',
		'chat'          => '<path d="M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H10l-4 4v-4H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>',
		'credit-card'   => '<rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18M6.5 14.5h4"/>',
		'bar-chart'     => '<path d="M5 20V11M12 20V6M19 20v-6"/><path d="M3 20h18"/>',
		'briefcase'     => '<rect x="3" y="8" width="18" height="12" rx="2"/><path d="M8 8V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>',
		'sliders'       => '<path d="M5 6h14M5 12h14M5 18h14"/><circle cx="9" cy="6" r="1.6" fill="currentColor" stroke="none"/><circle cx="16" cy="12" r="1.6" fill="currentColor" stroke="none"/><circle cx="10" cy="18" r="1.6" fill="currentColor" stroke="none"/>',
		'users'         => '<circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.4 2.8-5.5 6-5.5s6 2.1 6 5.5"/><circle cx="17.5" cy="9" r="2.6"/><path d="M15.5 14.2c2.6.4 4.5 2.2 4.5 5.3"/>',
		'trending-up'   => '<path d="m4 16 5.5-5.5 4 4L21 7"/><path d="M15 7h6v6"/>',
		'server'        => '<rect x="4" y="4" width="16" height="6" rx="1.5"/><rect x="4" y="14" width="16" height="6" rx="1.5"/><path d="M8 7h.01M8 17h.01"/>',
		'shield-check'  => '<path d="M12 3 5 6v5c0 4.5 3 7.5 7 9 4-1.5 7-4.5 7-9V6l-7-3Z"/><path d="m9 12 2 2 4-4"/>',
		'book-open'     => '<path d="M12 6c-1.6-1.2-4-1.8-6.5-1.5V16c2.5-.3 4.9.3 6.5 1.5 1.6-1.2 4-1.8 6.5-1.5V4.5C16 4.2 13.6 4.8 12 6Z"/><path d="M12 6v11.5"/>',
		'headset'       => '<path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M19 19v1a2 2 0 0 1-2 2h-3"/>',
		'chevron-down'  => '<path d="m6 9 6 6 6-6"/>',
		'home'          => '<path d="m4 11 8-6 8 6v8a1 1 0 0 1-1 1h-4v-6H9v6H5a1 1 0 0 1-1-1Z"/>',
		'ruler'         => '<path d="m4 15 5-5 10 10-5 5-10-10Z"/><path d="m10.5 8.5 2 2M13 6l2 2M15.5 14.5l2 2"/>',
		'file-text'     => '<path d="M7 3h7l4 4v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M14 3v4h4M9 12h6M9 16h6"/>',
		'truck'         => '<path d="M3 7h11v9H3z"/><path d="M14 10h4l3 3v3h-7z"/><circle cx="7" cy="18" r="1.8"/><circle cx="17.5" cy="18" r="1.8"/>',
		'scissors'      => '<circle cx="6" cy="6" r="2.4"/><circle cx="6" cy="18" r="2.4"/><path d="M7.8 7.6 20 19M7.8 16.4 20 5"/>',
		'bell'          => '<path d="M6 10a6 6 0 0 1 12 0c0 4 1.5 5.5 1.5 5.5H4.5S6 14 6 10Z"/><path d="M10 19a2 2 0 0 0 4 0"/>',
		'monitor'       => '<rect x="3" y="4" width="18" height="12" rx="1.5"/><path d="M9 20h6M12 16v4"/>',
		'code'          => '<path d="m9 8-4 4 4 4M15 8l4 4-4 4"/>',
		'smartphone'    => '<rect x="7" y="3" width="10" height="18" rx="2"/><path d="M11 18h2"/>',
		'puzzle'        => '<path d="M9 4h4v2.2a1.8 1.8 0 0 0 3 0V4h4v4h-2.2a1.8 1.8 0 0 0 0 3H20v4h-4v-2.2a1.8 1.8 0 0 0-3 0V15H9v-4H6.8a1.8 1.8 0 0 1 0-3H9V4Z"/>',
		'download'      => '<path d="M12 4v11m0 0 4-4m-4 4-4-4"/><path d="M5 17v2a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2"/>',
		'gauge'         => '<circle cx="12" cy="13" r="7.5"/><path d="M12 13 15.5 9M9 5.5h6"/>',
		'grid'          => '<rect x="4" y="4" width="7" height="7" rx="1"/><rect x="13" y="4" width="7" height="7" rx="1"/><rect x="4" y="13" width="7" height="7" rx="1"/><rect x="13" y="13" width="7" height="7" rx="1"/>',
		'list'          => '<path d="M9 6h11M9 12h11M9 18h11"/><path d="M4 6h.01M4 12h.01M4 18h.01"/>',
		'expand'        => '<path d="M9 4H4v5M15 4h5v5M4 15v5h5M20 15v5h-5"/>',
		'search'        => '<circle cx="10.5" cy="10.5" r="6.5"/><path d="m20 20-4.3-4.3"/>',
		'lock'          => '<rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/>',
		'form'          => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h4"/>',
		'smile'         => '<circle cx="12" cy="12" r="9"/><path d="M8 13.5s1.5 2 4 2 4-2 4-2M9 9.5h.01M15 9.5h.01"/>',
		'building'      => '<rect x="5" y="3" width="14" height="18" rx="1"/><path d="M9 7h.01M12 7h.01M15 7h.01M9 11h.01M12 11h.01M15 11h.01M9 15h.01M15 15h.01"/><path d="M10 21v-4h4v4"/>',
		'shirt'         => '<path d="M8 4 4 7l2 3 2-1v11h8V9l2 1 2-3-4-3-2 2-2-2Z"/>',
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
