<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php echo lieusoft_icon( 'stethoscope' ); ?> <?php esc_html_e( 'Doctor Appointment Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Clinic Website &', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Appointment Management System', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'We build a complete clinic website with online appointment booking, doctor management, patient records, hosting and support.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Website', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Domain', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Hosting', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Appointment System', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="https://medbook.lieusoft.com/" target="_blank" rel="noopener">
					<?php esc_html_e( 'Live Demo', 'lieusoft' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<div class="hero-sim-window" data-hero-sim>
				<div class="hero-sim-window__bar">
					<span class="hiw-widget__dot" style="background:#FF5F57"></span>
					<span class="hiw-widget__dot" style="background:#FEBC2E"></span>
					<span class="hiw-widget__dot" style="background:#28C840"></span>
					<span class="hero-sim-window__title" data-sim-title><?php esc_html_e( 'Find a Doctor', 'lieusoft' ); ?></span>
				</div>

				<div class="hero-sim-window__body">

					<!-- Scene 1: patient browses the doctor grid and clicks Book -->
					<div class="hero-sim__scene is-active" data-scene="grid" data-title="<?php esc_attr_e( 'Find a Doctor', 'lieusoft' ); ?>">
						<div class="hero-sim__doc">
							<span class="hero-sim__tag"><?php esc_html_e( 'Medicine', 'lieusoft' ); ?></span>
							<strong class="hero-sim__doc-name">Dr. Dewan Md. Kudrat-A-Elahi</strong>
							<span class="hero-sim__doc-cred">MBBS, BCS (HEALTH), CCD (BIRDEM) EMO, National Institute of Neuroscience &amp; Hospital</span>
							<span class="hero-sim__doc-phone"><span><?php esc_html_e( 'Phone', 'lieusoft' ); ?></span>01707574598</span>
							<div class="hero-sim__doc-avail">
								<strong><?php esc_html_e( 'Availability', 'lieusoft' ); ?></strong>
								<div class="hero-sim__doc-row"><b><?php esc_html_e( 'Monday', 'lieusoft' ); ?></b><span>4:20 pm - 10:00 pm</span></div>
								<div class="hero-sim__doc-row"><b><?php esc_html_e( 'Tuesday', 'lieusoft' ); ?></b><span>4:20 pm - 9:00 pm</span></div>
								<div class="hero-sim__doc-row"><b><?php esc_html_e( 'Wednesday', 'lieusoft' ); ?></b><span>3:00 pm - 9:00 pm</span></div>
								<div class="hero-sim__doc-row is-today"><b><?php esc_html_e( 'Friday', 'lieusoft' ); ?><em><?php esc_html_e( 'Today', 'lieusoft' ); ?></em></b><span>4:20 pm - 10:00 pm</span></div>
							</div>
							<div class="hero-sim__doc-actions">
								<span class="btn btn--sm hero-sim__doc-today"><?php esc_html_e( "Today's Patients", 'lieusoft' ); ?></span>
								<span class="btn btn--primary btn--sm hero-sim__doc-book"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?><span class="hero-sim__cursor" style="right:14px;top:50%;margin-top:-8px;"></span></span>
							</div>
						</div>
					</div>

					<!-- Scene 2: pick date & time -->
					<div class="hero-sim__scene" data-scene="datetime" data-title="<?php esc_attr_e( 'Pick Date & Time', 'lieusoft' ); ?>">
						<span class="hiw-modal__label"><?php esc_html_e( 'Choose Specialty & Doctor', 'lieusoft' ); ?></span>
						<div class="hiw-doctor-pick">
							<span class="hiw-doctor-pick__avatar">D</span>
							<div><strong>Dr. Dewan Md. Kudrat-A-Elahi</strong><span class="hiw-doctor-pick__tag"><?php esc_html_e( 'Medicine', 'lieusoft' ); ?></span></div>
						</div>
						<span class="hiw-modal__label"><?php esc_html_e( 'Pick Date & Time', 'lieusoft' ); ?></span>
						<div class="hiw-datetime">
							<div class="hiw-calendar">
								<div class="hiw-calendar__head"><span>&lsaquo;</span><strong><?php esc_html_e( 'September 2026', 'lieusoft' ); ?></strong><span>&rsaquo;</span></div>
								<div class="hiw-calendar__grid">
									<?php foreach ( array( 'S', 'M', 'T', 'W', 'T', 'F', 'S' ) as $dow ) : ?>
										<span class="hiw-calendar__dow"><?php echo esc_html( $dow ); ?></span>
									<?php endforeach; ?>
									<?php
									$lieusoft_hero_cal_cells = array(
										'', '', '1m', '2m', '3m', '4m', '5m',
										'6m', '7m', '8m', '9m', '10m', '11m', '12m',
										'13m', '14t', '15s', '16o', '17m', '18m', '19m',
										'20m', '21o', '22o', '23m', '24m', '25o', '26m',
										'27m', '28o', '29o', '30m',
									);
									foreach ( $lieusoft_hero_cal_cells as $cell ) :
										if ( '' === $cell ) {
											echo '<span></span>';
											continue;
										}
										$day   = (int) rtrim( $cell, 'motsb' );
										$state = substr( $cell, -1 );
										$class = 'is-muted';
										if ( 'o' === $state ) {
											$class = 'is-open';
										} elseif ( 's' === $state ) {
											$class = 'is-selected';
										} elseif ( 't' === $state ) {
											$class = 'is-open is-today';
										}
										printf( '<span class="%s">%d</span>', esc_attr( $class ), (int) $day );
									endforeach;
									?>
								</div>
							</div>
							<div class="hiw-timeslots">
								<span>4:00 PM</span>
								<span class="is-active" style="position:relative;">4:10 PM<span class="hero-sim__cursor" style="right:10px;top:50%;margin-top:-8px;"></span></span>
								<span>4:20 PM</span>
								<span>4:30 PM</span>
								<span>4:40 PM</span>
								<span>4:50 PM</span>
							</div>
						</div>
					</div>

					<!-- Scene 3: patient fills in their details -->
					<div class="hero-sim__scene" data-scene="patient-form" data-title="<?php esc_attr_e( 'Patient Details', 'lieusoft' ); ?>">
						<div class="hiw-selected-slot">
							<div><span><?php esc_html_e( 'Selected', 'lieusoft' ); ?></span><strong>Sep 15, 2026 · 4:10 PM</strong></div>
							<span class="hiw-modal__link"><?php esc_html_e( 'Change', 'lieusoft' ); ?></span>
						</div>
						<div class="hiw-form">
							<div class="hiw-form__field">
								<span class="hiw-form__label"><?php esc_html_e( 'Full Name', 'lieusoft' ); ?></span>
								<span class="hiw-form__value">Abdur Rahman</span>
							</div>
							<div class="hiw-form__field">
								<span class="hiw-form__label"><?php esc_html_e( 'Mobile Number', 'lieusoft' ); ?></span>
								<span class="hiw-form__value">01XXXXXXXXX</span>
							</div>
							<div class="hiw-form__row">
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Age', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">28</span>
								</div>
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Gender', 'lieusoft' ); ?></span>
									<span class="hiw-form__value"><?php esc_html_e( 'Male', 'lieusoft' ); ?></span>
								</div>
							</div>
						</div>
						<div class="hero-sim__fee"><span><?php esc_html_e( 'Consultation Fee', 'lieusoft' ); ?></span><strong>&#2547;800</strong></div>
						<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></span>
					</div>

					<!-- Scene 4: confirmed -->
					<div class="hero-sim__scene" data-scene="confirm" data-title="<?php esc_attr_e( 'Booking Confirmed', 'lieusoft' ); ?>">
						<div class="hiw-confirm-ticket">
							<div class="hiw-confirm-ticket__head">
								<span class="hiw-confirm__check"><?php echo lieusoft_icon( 'check-circle' ); ?></span>
								<div>
									<strong><?php esc_html_e( 'Booking Confirmed', 'lieusoft' ); ?></strong>
									<span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?> B002854</span>
								</div>
							</div>
							<div class="hiw-confirm-ticket__body">
								<div><span><?php esc_html_e( 'Patient', 'lieusoft' ); ?></span><strong>Abdur Rahman</strong></div>
								<div><span><?php esc_html_e( 'Doctor', 'lieusoft' ); ?></span><strong>Dr. Dewan Md. Kudrat-A-Elahi</strong></div>
								<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Sep 15, 2026</strong></div>
								<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>4:10 PM</strong></div>
								<div><span><?php esc_html_e( 'Serial No.', 'lieusoft' ); ?></span><strong>#12</strong></div>
								<div><span><?php esc_html_e( 'Fee', 'lieusoft' ); ?></span><strong>&#2547;800 &middot; <?php esc_html_e( 'Pay at clinic', 'lieusoft' ); ?></strong></div>
							</div>
							<div class="hiw-confirm-ticket__foot">
								<div class="hiw-confirm-ticket__qr" aria-hidden="true">
									<svg viewBox="0 0 29 29" width="100%" height="100%" shape-rendering="crispEdges">
										<rect width="29" height="29" fill="#fff"/>
										<path fill="none" stroke="#0E0C1A" stroke-width="1" d="M4 4.5h7m2 0h1m2 0h1m1 0h7M4 5.5h1m5 0h1m2 0h4m1 0h1m5 0h1M4 6.5h1m1 0h3m1 0h1m1 0h1m2 0h2m1 0h1m1 0h3m1 0h1M4 7.5h1m1 0h3m1 0h1m1 0h1m1 0h2m2 0h1m1 0h3m1 0h1M4 8.5h1m1 0h3m1 0h1m1 0h1m3 0h1m1 0h1m1 0h3m1 0h1M4 9.5h1m5 0h1m1 0h4m2 0h1m5 0h1M4 10.5h7m1 0h1m1 0h1m1 0h1m1 0h7M12 11.5h1M4 12.5h1m1 0h5m2 0h3m2 0h5M5 13.5h1m1 0h1m1 0h1m5 0h2m2 0h1m3 0h2M4 14.5h1m1 0h5m5 0h1m2 0h1m2 0h2M4 15.5h1m4 0h1m1 0h7m2 0h1M6 16.5h1m3 0h2m1 0h2m1 0h1m3 0h3M12 17.5h1m1 0h1m1 0h2m1 0h2m3 0h1M4 18.5h7m2 0h1m1 0h1m1 0h1m2 0h1m1 0h1m1 0h1M4 19.5h1m5 0h1m1 0h1m5 0h1m2 0h1m1 0h2M4 20.5h1m1 0h3m1 0h1m1 0h1m1 0h2m1 0h3m1 0h3M4 21.5h1m1 0h3m1 0h1m1 0h2m2 0h2m1 0h2m1 0h1M4 22.5h1m1 0h3m1 0h1m1 0h3m1 0h1m3 0h1m1 0h1M4 23.5h1m5 0h1m2 0h1m2 0h2m2 0h3m1 0h1M4 24.5h7m1 0h1m1 0h1m1 0h1m4 0h2"/>
									</svg>
								</div>
								<span class="hiw-confirm-ticket__note"><?php esc_html_e( 'Show this QR code at check-in.', 'lieusoft' ); ?></span>
								<div class="hiw-confirm-ticket__actions">
									<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Download', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'download' ); ?></span>
									<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Print', 'lieusoft' ); ?>"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></span>
								</div>
							</div>
						</div>
					</div>

					<!-- Scene 5: it lands in the clinic's admin dashboard -->
					<div class="hero-sim__scene" data-scene="dashboard" data-title="<?php esc_attr_e( 'Admin Dashboard', 'lieusoft' ); ?>">
						<div class="hero-sim__dash">
							<div class="hero-sim__dash-side">
								<span class="is-active"><?php echo lieusoft_icon( 'calendar' ); ?></span>
								<span><?php echo lieusoft_icon( 'stethoscope' ); ?></span>
								<span><?php echo lieusoft_icon( 'user' ); ?></span>
								<span><?php echo lieusoft_icon( 'bar-chart' ); ?></span>
							</div>
							<div class="hero-sim__dash-main">
								<div class="hero-sim__dash-head">
									<strong><?php esc_html_e( 'Booking', 'lieusoft' ); ?></strong>
									<span><?php esc_html_e( 'Sun, Sep 13, 2026', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-stats">
									<div><?php echo lieusoft_icon( 'calendar' ); ?><strong>32</strong><span><?php esc_html_e( "Today's Appointments", 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'user' ); ?><strong>956</strong><span><?php esc_html_e( 'Total Patients', 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'credit-card' ); ?><strong>$24,560</strong><span><?php esc_html_e( 'Total Revenue', 'lieusoft' ); ?></span></div>
								</div>
								<h5><?php esc_html_e( "Today's Queue", 'lieusoft' ); ?></h5>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">A</span>
									<strong><?php esc_html_e( 'Ayesha Rahman', 'lieusoft' ); ?></strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Cardiology', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Confirmed', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">M</span>
									<strong><?php esc_html_e( 'Mehedi Hasan', 'lieusoft' ); ?></strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Dermatology', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">R</span>
									<strong><?php esc_html_e( 'Rafiqul Islam', 'lieusoft' ); ?></strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Pediatrics', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Confirmed', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">N</span>
									<strong><?php esc_html_e( 'Nusrat Jahan', 'lieusoft' ); ?></strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Orthopedics', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row hiw-admin__row--new" data-sim-new-row>
									<span class="hiw-admin__avatar">A</span>
									<strong><?php esc_html_e( 'Abdur Rahman', 'lieusoft' ); ?></strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Medicine', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Confirmed', 'lieusoft' ); ?></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="hero-sim-progress" data-hero-sim-progress>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
			</div>
		</div>
	</div>
</section>
