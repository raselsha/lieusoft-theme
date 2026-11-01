<?php
$lieusoft_what_we_do = array(
	array(
		'title'    => __( 'Business Solutions', 'lieusoft' ),
		'desc'     => __( 'Ready-made websites built specifically for your business industry.', 'lieusoft' ),
		'icon'     => 'monitor',
		'accent'   => 'green',
		'services' => array( __( 'Doctor Appointment', 'lieusoft' ), __( 'Tailor Management', 'lieusoft' ), __( 'Service Booking', 'lieusoft' ) ),
		'link'     => home_url( '/solutions/' ),
		'link_text' => __( 'View Solutions', 'lieusoft' ),
	),
	array(
		'title'    => __( 'Premium Plugins', 'lieusoft' ),
		'desc'     => __( 'Professional WordPress plugins for developers and growing businesses.', 'lieusoft' ),
		'icon'     => 'puzzle',
		'accent'   => 'blue',
		'services' => array( __( 'Service Booking', 'lieusoft' ), __( 'Doctor Appointment', 'lieusoft' ), __( 'Tailor Order', 'lieusoft' ), __( 'PDF Embed Viewer', 'lieusoft' ) ),
		'link'     => home_url( '/products/' ),
		'link_text' => __( 'View Products', 'lieusoft' ),
	),
	array(
		'title'    => __( 'Custom Development', 'lieusoft' ),
		'desc'     => __( 'Need something unique? We build custom WordPress solutions tailored to your workflow.', 'lieusoft' ),
		'icon'     => 'code',
		'accent'   => 'purple',
		'services' => array( __( 'Website Development', 'lieusoft' ), __( 'Plugin Development', 'lieusoft' ), __( 'Business Automation', 'lieusoft' ) ),
		'link'     => home_url( '/services/' ),
		'link_text' => __( 'View Services', 'lieusoft' ),
	),
	array(
		'title'    => __( 'Reliable Support', 'lieusoft' ),
		'desc'     => __( 'Fast, friendly, and ongoing technical support whenever you need it.', 'lieusoft' ),
		'icon'     => 'headset',
		'accent'   => 'orange',
		'services' => array( __( 'Website Maintenance', 'lieusoft' ), __( 'Migration Services', 'lieusoft' ), __( 'Technical Support', 'lieusoft' ) ),
		'link'     => home_url( '/services/' ),
		'link_text' => __( 'View Services', 'lieusoft' ),
	),
);
?>
<section class="what-we-do" id="what-we-do">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'What We Do', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Everything you need to build, launch, and grow your business online.', 'lieusoft' ); ?></p>
		</div>

		<div class="card-grid card-grid--4">
			<?php foreach ( $lieusoft_what_we_do as $item ) : ?>
				<div class="feature feature--accent feature--<?php echo esc_attr( $item['accent'] ); ?>">
					<span class="feature__icon-chip"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<h3 class="feature__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="feature__desc"><?php echo esc_html( $item['desc'] ); ?></p>
					<ul class="feature__tags">
						<?php foreach ( $item['services'] as $service ) : ?>
							<li><?php echo esc_html( $service ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="link-arrow feature__link" href="<?php echo esc_url( $item['link'] ); ?>">
						<?php echo esc_html( $item['link_text'] ); ?>
						<?php echo lieusoft_icon( 'arrow-right' ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
