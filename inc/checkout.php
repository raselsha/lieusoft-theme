<?php
/**
 * Easy Digital Downloads checkout additions: an "Order summary" heading on
 * the cart, a license-type badge per item, and a purchase-total row above
 * the Purchase button. Layout itself is CSS (theme.css, "Checkout").
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lieusoft_checkout_summary_title() {
	if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() ) {
		echo '<h2 class="lsco-summary__title">' . esc_html__( 'Order summary', 'lieusoft' ) . '</h2>';
	}
}
add_action( 'edd_cart_items_before', 'lieusoft_checkout_summary_title' );

/**
 * Badge under a cart item: yearly vs lifetime, from the licensing settings
 * of the chosen price option.
 */
function lieusoft_checkout_item_badge( $item ) {
	$download_id = isset( $item['id'] ) ? absint( $item['id'] ) : 0;
	if ( ! $download_id || 'yes' !== get_post_meta( $download_id, '_lsl_license_enabled', true ) ) {
		return;
	}
	$days     = get_post_meta( $download_id, '_lsl_license_duration_days', true );
	$price_id = isset( $item['options']['price_id'] ) ? $item['options']['price_id'] : null;
	if ( null !== $price_id && function_exists( 'edd_get_variable_prices' ) ) {
		$prices = edd_get_variable_prices( $download_id );
		if ( isset( $prices[ $price_id ]['lsl_duration_days'] ) && '' !== $prices[ $price_id ]['lsl_duration_days'] ) {
			$days = $prices[ $price_id ]['lsl_duration_days'];
		}
	}
	$label = ( '' !== $days && 0 === absint( $days ) )
		? __( 'Lifetime license · one-time payment', 'lieusoft' )
		: __( '1-year license · updates & support', 'lieusoft' );
	echo '<span class="lsco-badge">' . esc_html( $label ) . '</span>';
}
add_action( 'edd_checkout_cart_item_title_after', 'lieusoft_checkout_item_badge' );

function lieusoft_checkout_total_row() {
	if ( ! function_exists( 'edd_cart_total' ) ) {
		return;
	}
	echo '<div class="lsco-total"><span>' . esc_html__( 'Purchase total', 'lieusoft' ) . '</span><strong class="edd_cart_amount">' . edd_cart_total( false ) . '</strong></div>'; // phpcs:ignore WordPress.Security.EscapeOutput -- EDD-formatted currency.
}
add_action( 'edd_purchase_form_before_submit', 'lieusoft_checkout_total_row', 999 );

/**
 * Customers (no edit rights) don't need the WordPress toolbar on the site.
 */
function lieusoft_hide_toolbar_for_customers( $show ) {
	return current_user_can( 'edit_posts' ) ? $show : false;
}
add_filter( 'show_admin_bar', 'lieusoft_hide_toolbar_for_customers' );
