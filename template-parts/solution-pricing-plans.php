<?php
/**
 * Multi-year plan pricing (e.g. 1/2/3/5 years). Expects $args: title, desc,
 * plans[] (name, tagline, price, period, note, features[] optional,
 * featured, badge), includes[] (one shared list shown under all plans),
 * footnote, links[] (label, url — optional chips under the heading, e.g.
 * which solutions the plans apply to), id (section anchor, default "pricing"),
 * setup (one-time installation line shown on every plan; '' to hide).
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'    => __( 'Simple, Honest Pricing', 'lieusoft' ),
	'desc'     => '',
	'plans'    => array(),
	'footnote' => '',
	'includes' => array(),
	'links'    => array(),
	'id'       => 'pricing',
	'setup'    => __( '+ ৳10,000 one-time installation', 'lieusoft' ),
) );

if ( ! $a['plans'] ) {
	return;
}
?>
<section class="section pricing-plans" id="<?php echo esc_attr( $a['id'] ); ?>">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<?php if ( $a['desc'] ) : ?><p><?php echo esc_html( $a['desc'] ); ?></p><?php endif; ?>
			<?php if ( $a['links'] ) : ?>
				<div class="pricing-plans__links">
					<?php foreach ( $a['links'] as $link ) : ?>
						<a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['label'] ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="pricing-plans__grid">
			<?php foreach ( $a['plans'] as $plan ) : ?>
				<div class="plan<?php echo ! empty( $plan['featured'] ) ? ' plan--featured' : ''; ?>">
					<?php if ( ! empty( $plan['badge'] ) ) : ?>
						<span class="plan__badge"><?php echo esc_html( $plan['badge'] ); ?></span>
					<?php endif; ?>
					<h3 class="plan__name"><?php echo esc_html( $plan['name'] ); ?></h3>
					<p class="plan__tagline"><?php echo esc_html( $plan['tagline'] ); ?></p>
					<p class="plan__price"><span class="plan__currency">৳</span><?php echo esc_html( $plan['price'] ); ?><span class="plan__period"><?php echo esc_html( $plan['period'] ); ?></span></p>
					<?php if ( $a['setup'] ) : ?><p class="plan__setup"><?php echo esc_html( $a['setup'] ); ?></p><?php endif; ?>
					<p class="plan__note"><?php echo esc_html( $plan['note'] ); ?></p>
					<a class="btn <?php echo ! empty( $plan['featured'] ) ? 'btn--primary' : 'btn--outline'; ?> btn--block plan__cta" href="#book-consultation"><?php esc_html_e( 'Choose Plan', 'lieusoft' ); ?></a>
					<?php if ( ! empty( $plan['features'] ) ) : ?>
						<ul class="plan__features">
							<?php foreach ( $plan['features'] as $feature ) : ?>
								<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( $a['includes'] ) : ?>
			<div class="pricing-plans__includes">
				<h3><?php esc_html_e( 'Every plan includes', 'lieusoft' ); ?></h3>
				<ul>
					<?php foreach ( $a['includes'] as $item ) : ?>
						<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ( $a['footnote'] ) : ?>
			<p class="pricing-plans__footnote"><?php echo esc_html( $a['footnote'] ); ?></p>
		<?php endif; ?>
	</div>
</section>
