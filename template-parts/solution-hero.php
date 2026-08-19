<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php esc_html_e( 'Doctor Appointment Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Clinic Management', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Solution', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'A powerful and easy-to-use solution to manage appointments, patients, doctors, schedules and your clinic operations from one place.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list check-list--grid">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Online Appointment Booking', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Patient Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'SMS & Email Notifications', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Easy Admin Dashboard', 'lieusoft' ); ?></li>
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
			<!--
				Placeholder device mockup, built in CSS (no real product
				screenshot exists yet for this page). Replace with an
				actual dashboard screenshot/image when available — see
				the "hero__media" block comment in this file.
			-->
			<div class="device-mock">
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
							<span><?php echo lieusoft_icon( 'users' ); ?></span>
							<span><?php echo lieusoft_icon( 'stethoscope' ); ?></span>
							<span><?php echo lieusoft_icon( 'credit-card' ); ?></span>
						</aside>
						<div class="device-mock__main">
							<p class="device-mock__title"><?php esc_html_e( 'Dashboard', 'lieusoft' ); ?></p>
							<div class="device-mock__stats">
								<div><strong>1250</strong><span><?php esc_html_e( 'Total Appointments', 'lieusoft' ); ?></span></div>
								<div><strong>48</strong><span><?php esc_html_e( "Today's Appointments", 'lieusoft' ); ?></span></div>
								<div><strong>850</strong><span><?php esc_html_e( 'Total Patients', 'lieusoft' ); ?></span></div>
								<div><strong>25</strong><span><?php esc_html_e( 'Total Doctors', 'lieusoft' ); ?></span></div>
							</div>
							<p class="device-mock__chart-title"><?php esc_html_e( 'Appointments Overview', 'lieusoft' ); ?></p>
							<svg class="device-mock__chart" viewBox="0 0 280 70" preserveAspectRatio="none" aria-hidden="true">
								<polyline points="0,55 35,40 70,48 105,25 140,35 175,15 210,28 245,10 280,20" fill="none" stroke="#2454F5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="device-mock__phone">
					<div class="device-mock__phone-bar"></div>
					<span class="device-mock__phone-label"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></span>
				</div>

				<div class="doctor-card">
					<div class="doctor-card__avatar"><?php echo lieusoft_icon( 'user' ); ?></div>
					<div>
						<p class="doctor-card__name"><?php esc_html_e( 'Dr. Sarah Johnson', 'lieusoft' ); ?></p>
						<p class="doctor-card__role"><?php esc_html_e( 'Cardiologist', 'lieusoft' ); ?></p>
						<div class="doctor-card__rating"><?php echo str_repeat( lieusoft_icon( 'star', 'icon--star' ), 5 ); ?></div>
						<span class="doctor-card__badge"><?php esc_html_e( 'Available Today', 'lieusoft' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
