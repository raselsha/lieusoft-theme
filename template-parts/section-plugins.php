<?php
$lieusoft_plugins = array(
	array(
		'title'  => __( 'Service Booking', 'lieusoft' ),
		'desc'   => __( 'Complete Booking & appointment solutions for any service.', 'lieusoft' ),
		'icon'   => 'badge-calendar.png',
		'accent' => 'green',
	),
	array(
		'title'  => __( 'Doctor Appointment', 'lieusoft' ),
		'desc'   => __( 'Appointment booking system for clinics and hospitals.', 'lieusoft' ),
		'icon'   => 'badge-doctor.png',
		'accent' => 'purple',
	),
	array(
		'title'  => __( 'Tailor Order Management', 'lieusoft' ),
		'desc'   => __( 'Manage tailor orders, customers, measurements and deliveries', 'lieusoft' ),
		'icon'   => 'badge-shirt.png',
		'accent' => 'orange',
	),
	array(
		'title'  => __( 'PDF Embed Viewer', 'lieusoft' ),
		'desc'   => __( '3d Flip book PDF Viewer & Embedded for WordPress.', 'lieusoft' ),
		'icon'   => 'icon-open-book.png',
		'accent' => 'blue',
	),
);
?>
<section class="plugins">
	<div class="container">
		<div class="section-head section-head--row">
			<div>
				<h2><?php esc_html_e( 'Featured WordPress Plugins', 'lieusoft' ); ?></h2>
				<p><?php esc_html_e( 'Powerful plugins built to extend WordPress and simplify your business workflow.', 'lieusoft' ); ?></p>
			</div>
			<a class="link-arrow" href="#plugins">
				<?php esc_html_e( 'View All Plugins', 'lieusoft' ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>
		</div>

		<div class="card-grid card-grid--4">
			<?php foreach ( $lieusoft_plugins as $plugin ) : ?>
				<article class="card card--plugin">
					<span class="plugin-icon plugin-icon--<?php echo esc_attr( $plugin['accent'] ); ?>">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $plugin['icon'] ) ); ?>" alt="">
					</span>
					<h3 class="card__title"><?php echo esc_html( $plugin['title'] ); ?></h3>
					<p class="card__desc"><?php echo esc_html( $plugin['desc'] ); ?></p>
					<div class="card__rating" aria-label="<?php esc_attr_e( 'Rated 5.0 out of 5 from 6 reviews', 'lieusoft' ); ?>">
						<?php echo str_repeat( lieusoft_icon( 'star', 'icon--star' ), 5 ); ?>
						<span>5.0 (6)</span>
					</div>
					<div class="card__actions">
						<a class="btn btn--sm btn--primary" href="#"><?php esc_html_e( 'Live Demo', 'lieusoft' ); ?></a>
						<a class="btn btn--sm btn--ghost" href="#"><?php esc_html_e( 'Details', 'lieusoft' ); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
