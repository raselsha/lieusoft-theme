<?php
/**
 * Light hardening: security headers on every response, no user/author
 * enumeration for visitors, and no plugin version numbers in the page head.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Security headers. HSTS deliberately leaves out includeSubDomains, since
 * not every Lieusoft subdomain is guaranteed to stay on HTTPS.
 */
function lieusoft_security_headers() {
	if ( headers_sent() ) {
		return;
	}
	header( 'Strict-Transport-Security: max-age=31536000' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );
}
add_action( 'send_headers', 'lieusoft_security_headers' );

/**
 * The REST users list exposes author slugs to anyone; keep it for
 * logged-in users only (the block editor needs it).
 */
function lieusoft_hide_rest_users( $endpoints ) {
	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	foreach ( array_keys( $endpoints ) as $route ) {
		if ( 0 === strpos( $route, '/wp/v2/users' ) ) {
			unset( $endpoints[ $route ] );
		}
	}
	return $endpoints;
}
add_filter( 'rest_endpoints', 'lieusoft_hide_rest_users' );

/**
 * Author archives (and ?author=N, which reveals the login slug) aren't
 * used on this single-author site: send them to the home page.
 */
function lieusoft_redirect_author_archives() {
	if ( is_author() || ( isset( $_GET['author'] ) && ! is_admin() ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'lieusoft_redirect_author_archives', 1 );

// Version numbers in <meta name="generator"> only help someone looking for
// a known hole in that version.
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'edd_version_in_header' );
add_filter( 'googlesitekit_generator', '__return_empty_string' );
