<?php
$lieusoft_what_we_do = array(
	array(
		'title' => __( 'Business Solutions', 'lieusoft' ),
		'desc'  => __( 'Ready-made websites built specifically for your business industry.', 'lieusoft' ),
		'icon'  => 'icon-interactive-display.png',
	),
	array(
		'title' => __( 'Premium Plugins', 'lieusoft' ),
		'desc'  => __( 'Professional WordPress plugins for developers and growing businesses.', 'lieusoft' ),
		'icon'  => 'icon-supplies.png',
	),
	array(
		'title' => __( 'Custom Development', 'lieusoft' ),
		'desc'  => __( 'Need something unique? We build custom WordPress solutions tailored to your workflow.', 'lieusoft' ),
		'icon'  => 'icon-settings.png',
	),
	array(
		'title' => __( 'Reliable Support', 'lieusoft' ),
		'desc'  => __( 'Fast, friendly, and ongoing technical support whenever you need it.', 'lieusoft' ),
		'icon'  => 'icon-headset.png',
	),
);
?>
<section class="what-we-do">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'What We Do', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Everything you need to build, launch, and grow your business online.', 'lieusoft' ); ?></p>
		</div>

		<div class="card-grid card-grid--4">
			<?php foreach ( $lieusoft_what_we_do as $item ) : ?>
				<div class="feature">
					<img class="feature__icon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $item['icon'] ) ); ?>" alt="" width="48" height="48">
					<h3 class="feature__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="feature__desc"><?php echo esc_html( $item['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
