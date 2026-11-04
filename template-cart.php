<?php
/**
 * Template Name: Cart
 *
 * The Easy Digital Downloads cart: items with remove links, the total, and
 * the way on to checkout.
 */

nocache_headers();
if ( ! defined( 'DONOTCACHEPAGE' ) ) {
	define( 'DONOTCACHEPAGE', true );
}

get_header();
$lieusoft_items = function_exists( 'edd_get_cart_contents' ) ? (array) edd_get_cart_contents() : array();
?>

<main class="section lscart">
	<div class="container">
		<h1 class="lscart__title"><?php esc_html_e( 'Your cart', 'lieusoft' ); ?></h1>

		<?php if ( ! $lieusoft_items ) : ?>
			<div class="lsac-card lscart__empty">
				<p><?php esc_html_e( 'Your cart is empty.', 'lieusoft' ); ?></p>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/pdf-embed-viewer/#pricing' ) ); ?>"><?php esc_html_e( 'Browse Flipbook Pro plans', 'lieusoft' ); ?></a>
			</div>
		<?php else : ?>
			<div class="lscart__layout">
				<div class="lsac-card lscart__items">
					<?php foreach ( $lieusoft_items as $key => $item ) : ?>
						<div class="lscart__item">
							<div class="lscart__item-info">
								<strong><?php echo esc_html( edd_get_cart_item_name( $item ) ); ?></strong>
								<?php lieusoft_checkout_item_badge( $item ); ?>
							</div>
							<div class="lscart__item-side">
								<span class="lscart__price"><?php echo edd_cart_item_price( $item['id'], $item['options'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span>
								<a class="lscart__remove" href="<?php echo esc_url( wp_nonce_url( edd_remove_item_url( $key ), 'edd-remove-from-cart-' . $key, 'edd_remove_from_cart_nonce' ) ); ?>"><?php echo lieusoft_icon( 'x-circle' ); ?><?php esc_html_e( 'Remove', 'lieusoft' ); ?></a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<aside class="lscart__summary">
					<h2><?php esc_html_e( 'Order summary', 'lieusoft' ); ?></h2>
					<p class="lscart__total"><span><?php esc_html_e( 'Total', 'lieusoft' ); ?></span><strong><?php echo edd_cart_total( false ); // phpcs:ignore WordPress.Security.EscapeOutput ?></strong></p>
					<a class="btn btn--primary btn--block" href="<?php echo esc_url( edd_get_checkout_uri() ); ?>"><?php esc_html_e( 'Proceed to checkout', 'lieusoft' ); ?></a>
					<a class="lscart__continue" href="<?php echo esc_url( home_url( '/pdf-embed-viewer/#pricing' ) ); ?>"><?php esc_html_e( 'Continue shopping', 'lieusoft' ); ?></a>
				</aside>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
