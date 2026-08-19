<?php
$lieusoft_what_we_do = array(
	array(
		'title' => __( 'Business Solutions', 'lieusoft' ),
		'desc'  => __( 'Ready-made websites built specifically for your business industry.', 'lieusoft' ),
	),
	array(
		'title' => __( 'Premium Plugins', 'lieusoft' ),
		'desc'  => __( 'Professional WordPress plugins for developers and growing businesses.', 'lieusoft' ),
	),
	array(
		'title' => __( 'Custom Development', 'lieusoft' ),
		'desc'  => __( 'Need something unique? We build custom WordPress solutions tailored to your workflow.', 'lieusoft' ),
	),
	array(
		'title' => __( 'Reliable Support', 'lieusoft' ),
		'desc'  => __( 'Fast, friendly, and ongoing technical support whenever you need it.', 'lieusoft' ),
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
					<span class="feature__icon" aria-hidden="true"></span>
					<h3 class="feature__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="feature__desc"><?php echo esc_html( $item['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
