<?php
$lieusoft_stats = array(
	array( 'number' => '100%', 'label' => __( 'Client Satisfaction', 'lieusoft' ), 'icon' => 'user' ),
	array( 'number' => '50%', 'label' => __( 'Client Satisfaction', 'lieusoft' ), 'icon' => 'clipboard' ),
	array( 'number' => '24/7', 'label' => __( 'Client Satisfaction', 'lieusoft' ), 'icon' => 'clock' ),
	array( 'number' => 'Portugal', 'label' => __( 'Lisbon', 'lieusoft' ), 'icon' => 'pin' ),
);
?>
<section class="case-study">
	<div class="container case-study__grid">
		<div class="case-study__preview">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/case-study-preview.png' ) ); ?>" alt="<?php esc_attr_e( 'CozyThai Massage Therapy website', 'lieusoft' ); ?>">
		</div>

		<div class="case-study__content">
			<span class="eyebrow"><?php esc_html_e( 'Case Study', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'CozyThai – Thai Massage Booking Website', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'We delivered a complete online booking solution including website design, booking system, managed hosting, domain setup, and ongoing technical support.', 'lieusoft' ); ?></p>
			<ul class="case-study__tags">
				<li><?php esc_html_e( 'Website', 'lieusoft' ); ?></li>
				<li><?php esc_html_e( 'Booking System', 'lieusoft' ); ?></li>
				<li><?php esc_html_e( 'Hosting', 'lieusoft' ); ?></li>
				<li><?php esc_html_e( 'Support', 'lieusoft' ); ?></li>
			</ul>
		</div>

		<div class="case-study__stats">
			<?php foreach ( $lieusoft_stats as $stat ) : ?>
				<div class="stat-row">
					<?php echo lieusoft_icon( $stat['icon'], 'stat-row__icon' ); ?>
					<div>
						<span class="stat-row__number"><?php echo esc_html( $stat['number'] ); ?></span>
						<span class="stat-row__label"><?php echo esc_html( $stat['label'] ); ?></span>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
