<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php esc_html_e( 'Service Booking Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Service Booking', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Solution', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'A powerful and user-friendly solution for salons, spas, cleaning services, repair services, consultants and any appointment based business.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list check-list--grid">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Online Booking', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Customer Notification', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Staff & Schedule Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Secure Payments', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Service Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reports & Analytics', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#">
					<?php esc_html_e( 'View Live Demo', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Free Consultation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'calendar' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<!-- CSS-built placeholder device mockup — see solution-hero.php's note. -->
			<div class="device-mock device-mock--wide">
				<div class="device-mock__screen">
					<div class="device-mock__topbar">
						<span class="device-mock__logo"><?php echo lieusoft_icon( 'home' ); ?> Lieusoft</span>
						<span class="device-mock__dot"></span>
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
								<div><strong>1250</strong><span><?php esc_html_e( 'Total Appointments', 'lieusoft' ); ?></span></div>
								<div><strong>850</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
								<div><strong>48</strong><span><?php esc_html_e( "Today's Appointments", 'lieusoft' ); ?></span></div>
								<div><strong>$24,500</strong><span><?php esc_html_e( 'Total Revenue', 'lieusoft' ); ?></span></div>
							</div>

							<div class="device-mock__columns">
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Appointments Overview', 'lieusoft' ); ?></p>
									<svg class="device-mock__chart" viewBox="0 0 150 70" preserveAspectRatio="none" aria-hidden="true">
										<polyline points="0,50 25,42 50,48 75,20 100,32 125,12 150,24" fill="none" stroke="#1AA95D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Recent Appointments', 'lieusoft' ); ?></p>
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
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>11:30 AM</strong></div>
						<span class="device-mock__phone-btn"><?php esc_html_e( 'Book Now', 'lieusoft' ); ?></span>
					</div>
				</div>

				<?php echo lieusoft_icon( 'ruler', 'device-mock__plant' ); ?>
			</div>
		</div>
	</div>
</section>
