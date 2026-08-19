<?php
/**
 * Lieusoft theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LIEUSOFT_VERSION', '1.0.0' );

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
		'primary' => __( 'Main Menu', 'lieusoft' ),
		'footer-product'  => __( 'Footer — Product', 'lieusoft' ),
		'footer-company'  => __( 'Footer — Company', 'lieusoft' ),
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

	wp_enqueue_style( 'lieusoft-theme', get_theme_file_uri( '/assets/css/theme.css' ), array( 'lieusoft-fonts' ), LIEUSOFT_VERSION );

	wp_enqueue_script( 'lieusoft-theme', get_theme_file_uri( '/assets/js/theme.js' ), array(), LIEUSOFT_VERSION, true );
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
