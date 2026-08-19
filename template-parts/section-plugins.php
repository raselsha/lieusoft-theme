<?php
$lieusoft_plugins = array(
	array(
		'title' => __( 'Service Booking', 'lieusoft' ),
		'desc'  => __( 'Complete booking & appointment solutions for any service.', 'lieusoft' ),
	),
	array(
		'title' => __( 'Doctor Appointment', 'lieusoft' ),
		'desc'  => __( 'Appointment booking system for clinics and hospitals.', 'lieusoft' ),
	),
	array(
		'title' => __( 'Tailor Order Management', 'lieusoft' ),
		'desc'  => __( 'Manage tailor orders, customers, measurements and deliveries.', 'lieusoft' ),
	),
	array(
		'title' => __( 'PDF Embed Viewer', 'lieusoft' ),
		'desc'  => __( '3D flip book PDF viewer & embedded viewer for WordPress.', 'lieusoft' ),
	),
);
?>
<section class="plugins">
	<div class="container">
		<div class="section-head section-head--row">
			<div>
				<h2><?php esc_html_e( 'Featured WordPress Plugins', 'lieusoft' ); ?></h2>
			</div>
			<a class="btn btn--outline" href="#plugins"><?php esc_html_e( 'View All Plugins', 'lieusoft' ); ?></a>
		</div>

		<div class="card-grid card-grid--4">
			<?php foreach ( $lieusoft_plugins as $plugin ) : ?>
				<article class="card card--plugin">
					<div class="card__rating" aria-label="<?php esc_attr_e( 'Rated 5.0 out of 5', 'lieusoft' ); ?>">★★★★★ <span>5.0</span></div>
					<h3 class="card__title"><?php echo esc_html( $plugin['title'] ); ?></h3>
					<p class="card__desc"><?php echo esc_html( $plugin['desc'] ); ?></p>
					<div class="card__actions">
						<a class="btn btn--sm btn--primary" href="#"><?php esc_html_e( 'Live Demo', 'lieusoft' ); ?></a>
						<a class="btn btn--sm btn--ghost" href="#"><?php esc_html_e( 'Details', 'lieusoft' ); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
