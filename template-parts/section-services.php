<?php
$lieusoft_services = array(
	array( 'title' => __( 'Business Automation', 'lieusoft' ), 'svg_icon' => 'infinity' ),
	array( 'title' => __( 'Website Development', 'lieusoft' ), 'icon' => 'icon-development.png' ),
	array( 'title' => __( 'Plugin Customization', 'lieusoft' ), 'icon' => 'icon-settings1.png' ),
	array( 'title' => __( 'Website Maintenance', 'lieusoft' ), 'icon' => 'icon-maintenance.png' ),
	array( 'title' => __( 'Migration Services', 'lieusoft' ), 'icon' => 'icon-migration.png' ),
	array( 'title' => __( 'Custom Email Service', 'lieusoft' ), 'icon' => 'icon-email.png' ),
);
?>
<section class="services">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Expert Services To Support your Business', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'We help you in every step of your journey.', 'lieusoft' ); ?></p>
		</div>

		<div class="service-row">
			<?php foreach ( $lieusoft_services as $service ) : ?>
				<div class="service-item">
					<?php if ( ! empty( $service['svg_icon'] ) ) : ?>
						<span class="service-item__icon service-item__icon--svg"><?php echo lieusoft_icon( $service['svg_icon'] ); ?></span>
					<?php else : ?>
						<img class="service-item__icon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $service['icon'] ) ); ?>" alt="" width="40" height="40">
					<?php endif; ?>
					<h3 class="service-item__title"><?php echo esc_html( $service['title'] ); ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
