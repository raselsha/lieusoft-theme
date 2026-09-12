<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php echo lieusoft_icon( 'calendar' ); ?> <?php esc_html_e( 'Service Booking Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Booking Website &', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Appointment Management System', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'We build a complete booking website for salons, spas, cleaning, repair and beauty businesses — online booking, staff management, hosting and support.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Website', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Domain', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Hosting', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Booking System', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="https://servicebooking.lieusoft.com/" target="_blank" rel="noopener">
					<?php esc_html_e( 'Live Demo', 'lieusoft' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<!-- CSS-built placeholder device mockup — see note in template-parts/product-hero.php. -->
			<div class="device-mock device-mock--wide">
				<div class="device-mock__screen">
					<div class="device-mock__topbar">
						<span class="device-mock__logo"><?php echo lieusoft_icon( 'home' ); ?> Lieusoft</span>
						<span class="device-mock__dot"></span>
						<span class="device-mock__dot"></span>
					</div>
					<div class="device-mock__body">
						<aside class="device-mock__nav">
							<span class="is-active"><?php echo lieusoft_icon( 'bar-chart' ); ?></span>
							<span><?php echo lieusoft_icon( 'calendar' ); ?></span>
							<span><?php echo lieusoft_icon( 'scissors' ); ?></span>
							<span><?php echo lieusoft_icon( 'users' ); ?></span>
							<span><?php echo lieusoft_icon( 'bell' ); ?></span>
							<span><?php echo lieusoft_icon( 'credit-card' ); ?></span>
						</aside>
						<div class="device-mock__main">
							<p class="device-mock__title"><?php esc_html_e( 'Dashboard', 'lieusoft' ); ?></p>
							<div class="device-mock__stats">
								<div><strong>1,250</strong><span><?php esc_html_e( 'Total Bookings', 'lieusoft' ); ?></span></div>
								<div><strong>850</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
								<div><strong>48</strong><span><?php esc_html_e( "Today's Bookings", 'lieusoft' ); ?></span></div>
								<div><strong>$24,500</strong><span><?php esc_html_e( 'Total Revenue', 'lieusoft' ); ?></span></div>
							</div>

							<div class="device-mock__columns">
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Bookings Overview', 'lieusoft' ); ?></p>
									<svg class="device-mock__chart" viewBox="0 0 150 70" preserveAspectRatio="none" aria-hidden="true">
										<polyline points="0,50 25,42 50,48 75,20 100,32 125,12 150,24" fill="none" stroke="#1AA95D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Recent Bookings', 'lieusoft' ); ?></p>
									<div class="device-mock__table">
										<div class="device-mock__list-row"><span class="avatar"></span><strong>John Doe</strong><em>10:00 AM</em></div>
										<div class="device-mock__list-row"><span class="avatar"></span><strong>Maria Smith</strong><em>11:30 AM</em></div>
										<div class="device-mock__list-row"><span class="avatar"></span><strong>Robert Brown</strong><em>01:00 PM</em></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="device-mock__phone">
					<div class="device-mock__phone-inner">
						<p class="device-mock__phone-title"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></p>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Service', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Hair Cut', 'lieusoft' ); ?></strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'May 24', 'lieusoft' ); ?></strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>10:00 AM</strong></div>
						<span class="device-mock__phone-btn"><?php esc_html_e( 'Book Now', 'lieusoft' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
