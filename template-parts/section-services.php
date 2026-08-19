<?php
$lieusoft_services = array(
	__( 'Website Development', 'lieusoft' ),
	__( 'Plugin Customization', 'lieusoft' ),
	__( 'Website Maintenance', 'lieusoft' ),
	__( 'Migration Services', 'lieusoft' ),
	__( 'Custom Email Service', 'lieusoft' ),
	__( 'Technical Support', 'lieusoft' ),
);
?>
<section class="services">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Expert Services To Support your Business', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( "We help you in every step of your journey.", 'lieusoft' ); ?></p>
		</div>

		<div class="card-grid card-grid--3">
			<?php foreach ( $lieusoft_services as $service ) : ?>
				<div class="service-item">
					<span class="service-item__icon" aria-hidden="true"></span>
					<h3 class="service-item__title"><?php echo esc_html( $service ); ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
