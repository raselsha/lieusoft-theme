<section class="hero">
	<div class="container hero__grid hero__grid--home">
		<div class="hero__content">
			<span class="eyebrow eyebrow--plain"><?php esc_html_e( 'WordPress Business Solutions', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Business Solutions', 'lieusoft' ); ?></span>
				<?php esc_html_e( 'for Growing Businesses', 'lieusoft' ); ?>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'We build complete business websites with custom software, managed hosting, domain setup, training, and ongoing support. Everything you need to launch and grow your business in one place.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Ready Solutions', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Premium Plugins', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Expert Services', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reliable Support', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#solutions">
					<?php esc_html_e( 'View Solutions', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<?php
			get_template_part( 'template-parts/hero', 'slider', array(
				'slides' => array(
					array(
						'accent'   => 'purple',
						'icon'     => 'stethoscope',
						'title'    => __( 'Doctor Appointment & Queue Management', 'lieusoft' ),
						'features' => array( __( 'Online Booking', 'lieusoft' ), __( 'Patient Queue', 'lieusoft' ), __( 'Doctor Panel', 'lieusoft' ) ),
						'url'      => home_url( '/doctor-appointment-solution/' ),
						'image'    => 'slide-doctor.jpg',
					),
					array(
						'accent'   => 'orange',
						'icon'     => 'shirt',
						'title'    => __( 'Tailor Order Management', 'lieusoft' ),
						'features' => array( __( 'Measurements', 'lieusoft' ), __( 'Order Tracking', 'lieusoft' ), __( 'Customer Management', 'lieusoft' ) ),
						'url'      => home_url( '/tailor-shop-management-solution/' ),
						'image'    => 'slide-tailor.jpg',
					),
					array(
						'accent'   => 'green',
						'icon'     => 'calendar',
						'title'    => __( 'Service Booking', 'lieusoft' ),
						'features' => array( __( 'Book Services', 'lieusoft' ), __( 'Manage Schedule', 'lieusoft' ), __( 'Deliver Your Commitments', 'lieusoft' ) ),
						'url'      => home_url( '/service-booking-solution/' ),
						'image'    => 'slide-service.jpg',
					),
					array(
						'accent'   => 'blue',
						'icon'     => 'book-open',
						'title'    => __( 'Digital Flipbook & PDF Viewer', 'lieusoft' ),
						'features' => array( __( 'Interactive Books', 'lieusoft' ), __( 'PDF Viewer', 'lieusoft' ), __( 'Modern Reading Experience', 'lieusoft' ) ),
						'url'      => home_url( '/pdf-embed-viewer/' ),
						'image'    => 'slide-flipbook.jpg',
					),
				),
			) );
			?>
		</div>
	</div>
</section>
