<?php
/**
 * "WordPress Plugins" — fixed, real prices (these are off-the-shelf
 * products, unlike the custom-quoted solutions/services above).
 * Expects $args: items[] (title, desc, icon, accent, price, url).
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'WordPress Plugins', 'lieusoft' ); ?></span>
			<h2 style="margin-top:8px;"><?php esc_html_e( 'Fixed-Price Plugins', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'One time payment, lifetime updates and support.', 'lieusoft' ); ?></p>
		</div>
		<div class="card-grid card-grid--4">
			<?php foreach ( $a['items'] as $plugin ) : ?>
				<article class="card">
					<span class="plugin-icon plugin-icon--<?php echo esc_attr( $plugin['accent'] ); ?>">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $plugin['icon'] ) ); ?>" alt="">
					</span>
					<h3 class="card__title"><?php echo esc_html( $plugin['title'] ); ?></h3>
					<p class="card__desc"><?php echo esc_html( $plugin['desc'] ); ?></p>
					<p class="pricing-plugin-card__price"><span>৳</span><?php echo esc_html( $plugin['price'] ); ?></p>
					<a class="btn btn--primary btn--sm" style="width:100%;justify-content:center;" href="<?php echo esc_url( $plugin['url'] ); ?>"><?php esc_html_e( 'Buy Now', 'lieusoft' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
