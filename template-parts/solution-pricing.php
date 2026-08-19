<?php
/**
 * Reusable pricing section. Expects $args: plan (name), price, period,
 * features[], custom_title, custom_desc, and an optional photo (filename
 * in assets/images/) which switches the layout to a 3-column row.
 */
$a = wp_parse_args( $args ?? array(), array(
	'plan'         => __( 'Professional Plan', 'lieusoft' ),
	'price'        => '49,999',
	'period'       => __( 'year', 'lieusoft' ),
	'features'     => array(),
	'custom_title' => __( 'Need a Custom Solution?', 'lieusoft' ),
	'custom_desc'  => __( 'Every business is unique. We can build a custom solution that perfectly fits your requirements.', 'lieusoft' ),
	'photo'        => '',
	'photo_alt'    => '',
	'photo_icon'   => 'briefcase',
) );

$lieusoft_photo_path = $a['photo'] ? get_theme_file_path( '/assets/images/' . $a['photo'] ) : '';
$lieusoft_has_photo  = $lieusoft_photo_path && file_exists( $lieusoft_photo_path );
?>
<section class="pricing">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Simple Pricing, No Hidden Fees', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Choose the perfect plan for your business.', 'lieusoft' ); ?></p>
		</div>

		<div class="pricing__grid<?php echo $a['photo'] ? ' pricing__grid--3' : ''; ?>">
			<div class="price-card">
				<span class="price-card__plan"><?php echo esc_html( $a['plan'] ); ?></span>
				<p class="price-card__price"><span>৳</span><?php echo esc_html( $a['price'] ); ?><small>/<?php echo esc_html( $a['period'] ); ?></small></p>

				<ul class="price-card__features">
					<?php foreach ( $a['features'] as $feature ) : ?>
						<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>

				<a class="btn btn--primary btn--block" href="#book-consultation"><?php esc_html_e( 'Book Free Consultation', 'lieusoft' ); ?></a>
			</div>

			<div class="price-custom">
				<span class="icon-circle"><?php echo lieusoft_icon( 'briefcase' ); ?></span>
				<h3><?php echo esc_html( $a['custom_title'] ); ?></h3>
				<p><?php echo esc_html( $a['custom_desc'] ); ?></p>
				<a class="link-arrow" href="#book-consultation">
					<?php esc_html_e( "Let's Talk", 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
			</div>

			<?php if ( $lieusoft_has_photo ) : ?>
				<div class="photo-placeholder">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $a['photo'] ) ); ?>" alt="<?php echo esc_attr( $a['photo_alt'] ); ?>">
				</div>
			<?php elseif ( $a['photo'] ) : ?>
				<div class="photo-placeholder photo-placeholder--icon">
					<?php echo lieusoft_icon( $a['photo_icon'] ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
