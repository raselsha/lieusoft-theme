<?php
/**
 * "How We Work" — scroll-stacked principles cards for the homepage.
 * Each card is sticky with an increasing top offset, so as the visitor
 * scrolls, each new card slides up and covers the previous one, leaving
 * just its tag + heading peeking above (CSS-only stacking-cards effect).
 */
$lieusoft_principle_accents = array( 'blue', 'purple', 'orange', 'green' );
$lieusoft_principles        = array(
	array(
		'icon'   => 'briefcase',
		'title'  => __( 'We Only Build What Fits Your Business', 'lieusoft' ),
		'desc'   => __( 'Every project is scoped around how your business actually runs, not squeezed into a generic template.', 'lieusoft' ),
		'points' => array(
			__( 'No one-size-fits-all packages', 'lieusoft' ),
			__( 'Every solution starts with understanding your workflow', 'lieusoft' ),
			__( 'Custom WordPress builds, not reused themes', 'lieusoft' ),
		),
	),
	array(
		'icon'   => 'credit-card',
		'title'  => __( 'Transparent, All-Inclusive Pricing', 'lieusoft' ),
		'desc'   => __( 'No hidden add-ons — every plan ships complete and ready to launch.', 'lieusoft' ),
		'points' => array(
			__( 'Website, hosting, domain, SSL and email included', 'lieusoft' ),
			__( 'Clear pricing agreed before we start', 'lieusoft' ),
			__( 'What you are quoted is what you pay', 'lieusoft' ),
		),
	),
	array(
		'icon'   => 'shield-check',
		'title'  => __( 'Security & Reliability By Default', 'lieusoft' ),
		'desc'   => __( 'SSL, backups and monitoring are built into every plan, not sold as extras.', 'lieusoft' ),
		'points' => array(
			__( 'Regular automatic backups', 'lieusoft' ),
			__( 'Monitored, managed hosting', 'lieusoft' ),
			__( 'SSL included from day one', 'lieusoft' ),
		),
	),
	array(
		'icon'   => 'grid',
		'title'  => __( 'One Team, Start to Finish', 'lieusoft' ),
		'desc'   => __( 'Development, hosting, email, maintenance and support — handled by one accountable team.', 'lieusoft' ),
		'points' => array(
			__( 'No juggling multiple vendors', 'lieusoft' ),
			__( 'One point of contact for your whole project', 'lieusoft' ),
			__( 'Consistent support after launch', 'lieusoft' ),
		),
	),
	array(
		'icon'   => 'headset',
		'title'  => __( 'We Stay Reachable After Launch', 'lieusoft' ),
		'desc'   => __( "Our relationship doesn't end at launch — we stay on for ongoing support.", 'lieusoft' ),
		'points' => array(
			__( 'Direct WhatsApp and email support', 'lieusoft' ),
			__( 'Regular maintenance and updates', 'lieusoft' ),
			__( 'Help whenever something needs fixing', 'lieusoft' ),
		),
	),
);
?>
<section class="section principles">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Our Principles', 'lieusoft' ); ?></span>
			<h2 class="principles__title"><?php esc_html_e( 'How We Work', 'lieusoft' ); ?></h2>
			<p class="principles__desc"><?php esc_html_e( 'The principles we follow to deliver reliable, transparent business websites.', 'lieusoft' ); ?></p>
		</div>

		<div class="principles-stack">
			<?php foreach ( $lieusoft_principles as $i => $item ) : ?>
				<?php $accent = $lieusoft_principle_accents[ $i % count( $lieusoft_principle_accents ) ]; ?>
				<div class="principles-stack__card principles-stack__card--<?php echo esc_attr( $accent ); ?>" style="--i: <?php echo esc_attr( $i ); ?>; z-index: <?php echo esc_attr( $i + 1 ); ?>;">
					<span class="principles-card__icon"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<span class="principles-card__tag"><?php printf( esc_html__( 'Principle %s', 'lieusoft' ), sprintf( '%02d', $i + 1 ) ); ?></span>
					<h3 class="principles-card__heading"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="principles-card__text"><?php echo esc_html( $item['desc'] ); ?></p>
					<ul class="principles-card__list">
						<?php foreach ( $item['points'] as $point ) : ?>
							<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $point ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
