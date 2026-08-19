<?php
/**
 * Reusable product pricing section: 2 (or more) one-time license cards +
 * a trust column. Expects $args: title, desc, licenses[] (name, price,
 * period, features[], style: primary|outline), trust_items[] (icon, title, desc).
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'       => __( 'Simple Pricing', 'lieusoft' ),
	'desc'        => __( 'One time payment, lifetime updates and support.', 'lieusoft' ),
	'licenses'    => array(),
	'trust_items' => array(),
) );
?>
<section class="pricing">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="product-pricing__grid">
			<?php foreach ( $a['licenses'] as $license ) : ?>
				<div class="license-card">
					<span class="license-card__name"><?php echo esc_html( $license['name'] ); ?></span>
					<ul class="license-card__features">
						<?php foreach ( $license['features'] as $feature ) : ?>
							<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $feature ); ?></li>
						<?php endforeach; ?>
					</ul>
					<div class="license-card__footer">
						<p class="license-card__price"><span>৳</span><?php echo esc_html( $license['price'] ); ?><small><?php echo esc_html( $license['period'] ?? __( 'One Time Payment', 'lieusoft' ) ); ?></small></p>
						<a class="btn btn--<?php echo esc_attr( $license['style'] ?? 'primary' ); ?>" href="#"><?php esc_html_e( 'Buy Now', 'lieusoft' ); ?></a>
					</div>
				</div>
			<?php endforeach; ?>

			<div class="trust-col">
				<?php foreach ( $a['trust_items'] as $item ) : ?>
					<div class="trust-box">
						<span class="icon-circle"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
						<div>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['desc'] ); ?></p>
							<?php if ( ! empty( $item['avatars'] ) ) : ?>
								<div class="avatar-stack avatar-stack--trust">
									<span></span><span></span><span></span><span></span><span class="avatar-stack__more">+1K</span>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
