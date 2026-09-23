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
			<?php $hero_image_path = '/assets/images/hero-mockup.png'; ?>
			<img src="<?php echo esc_url( get_theme_file_uri( $hero_image_path ) . '?v=' . filemtime( get_theme_file_path( $hero_image_path ) ) ); ?>" alt="<?php esc_attr_e( 'Lieusoft business solutions: Doctor Appointment, Tailor Order Management, Service Booking and Digital Flipbook & PDF Viewer', 'lieusoft' ); ?>">
		</div>
	</div>
</section>
