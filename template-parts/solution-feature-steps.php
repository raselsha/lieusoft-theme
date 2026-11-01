<?php
/**
 * Scroll-stacked feature walkthrough — a numbered "sticky-note" badge,
 * title and description next to a real HTML/CSS product-UI widget (no
 * screenshot images), one step per sticky card. Expects $args: eyebrow,
 * title, desc, steps[] (num, title, desc, widget — one of 'profile',
 * 'datetime', 'patient-form', 'confirmation', 'notify', 'admin-booking',
 * 'live-queue', or a 'tailor-*' / 'service-*' widget from
 * feature-widgets-{tailor,service}.php).
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => '',
	'title'   => '',
	'desc'    => '',
	'steps'   => array(),
) );
?>
<section class="section feature-steps">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?>
				<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
			<?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="feature-stack">
			<?php foreach ( $a['steps'] as $i => $step ) : ?>
				<div class="feature-stack__card" style="--i: <?php echo esc_attr( $i ); ?>; z-index: <?php echo esc_attr( $i + 1 ); ?>;">
					<div class="feature-stack__media">
						<?php if ( 'profile' === $step['widget'] ) : ?>
							<div class="hiw-profile">
								<span class="hiw-profile__badge"><?php esc_html_e( 'Medicine', 'lieusoft' ); ?></span>
								<h4 class="hiw-profile__name">Dr. Dewan Md. Kudrat-A-Elahi</h4>
								<p class="hiw-profile__creds">MBBS, BCS (Health), CCD (BIRDEM) EMO, National Institute of Neuroscience &amp; Hospital</p>
								<div class="hiw-profile__phone"><span><?php esc_html_e( 'Phone', 'lieusoft' ); ?></span><strong>01707574598</strong></div>
								<div class="hiw-profile__avail">
									<h5><?php esc_html_e( 'Availability', 'lieusoft' ); ?></h5>
									<div class="hiw-profile__avail-row"><strong><?php esc_html_e( 'Monday', 'lieusoft' ); ?></strong><span>4:00 PM – 11:00 PM</span></div>
									<div class="hiw-profile__avail-row"><strong><?php esc_html_e( 'Tuesday', 'lieusoft' ); ?></strong><span>4:00 PM – 10:00 PM</span></div>
									<div class="hiw-profile__avail-row"><strong><?php esc_html_e( 'Wednesday', 'lieusoft' ); ?></strong><span>3:00 PM – 9:00 PM</span></div>
									<div class="hiw-profile__avail-row"><strong><?php esc_html_e( 'Friday', 'lieusoft' ); ?></strong><span>4:00 PM – 10:30 PM</span></div>
								</div>
								<span class="btn btn--primary hiw-profile__cta"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></span>
							</div>
						<?php elseif ( 'datetime' === $step['widget'] ) : ?>
							<div class="hiw-modal">
								<div class="hiw-modal__head">
									<h4><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></h4>
									<span class="hiw-modal__close">&times;</span>
								</div>
								<div class="hiw-modal__body">
									<span class="hiw-modal__label"><?php esc_html_e( 'Choose Specialty & Doctor', 'lieusoft' ); ?></span>
									<div class="hiw-doctor-pick">
										<span class="hiw-doctor-pick__avatar">D</span>
										<div><strong>Dr. Dewan Md. Kudrat-A-Elahi</strong><span class="hiw-doctor-pick__tag"><?php esc_html_e( 'Medicine', 'lieusoft' ); ?></span></div>
									</div>
									<span class="hiw-modal__label"><?php esc_html_e( 'Pick Date & Time', 'lieusoft' ); ?></span>
									<div class="hiw-datetime">
										<div class="hiw-calendar">
											<div class="hiw-calendar__head"><span>&lsaquo;</span><strong><?php esc_html_e( 'October 2026', 'lieusoft' ); ?></strong><span>&rsaquo;</span></div>
											<div class="hiw-calendar__grid">
												<?php foreach ( array( 'S', 'M', 'T', 'W', 'T', 'F', 'S' ) as $dow ) : ?>
													<span class="hiw-calendar__dow"><?php echo esc_html( $dow ); ?></span>
												<?php endforeach; ?>
												<?php
												$lieusoft_cal_cells = array(
													'', '', '', '1m', '2m', '3m', '4m',
													'5m', '6m', '7m', '8m', '9m', '10m', '11m',
													'12m', '13m', '14m', '15m', '16m', '17m', '18m',
													'19m', '20m', '21m', '22t', '23o', '24m', '25m',
													'26o', '27o', '28s', '29m', '30o', '31m',
												);
												foreach ( $lieusoft_cal_cells as $cell ) :
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
											<span>3:00 PM</span>
											<span class="is-active">3:20 PM</span>
											<span>3:40 PM</span>
											<span>4:00 PM</span>
											<span>4:10 PM</span>
										</div>
									</div>
								</div>
							</div>
						<?php elseif ( 'patient-form' === $step['widget'] ) : ?>
							<div class="hiw-modal">
								<div class="hiw-modal__head">
									<h4><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></h4>
									<span class="hiw-modal__close">&times;</span>
								</div>
								<div class="hiw-modal__body">
									<div class="hiw-selected-slot">
										<div><span><?php esc_html_e( 'Selected', 'lieusoft' ); ?></span><strong>Oct 28, 2026 · 3:20 PM</strong></div>
										<span class="hiw-modal__link"><?php esc_html_e( 'Change', 'lieusoft' ); ?></span>
									</div>
									<div class="hiw-form">
										<div class="hiw-form__field">
											<span class="hiw-form__label"><?php esc_html_e( 'Full Name', 'lieusoft' ); ?></span>
											<span class="hiw-form__value is-placeholder"><?php esc_html_e( 'e.g. Shafiul Islam', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-form__field">
											<span class="hiw-form__label"><?php esc_html_e( 'Mobile Number', 'lieusoft' ); ?></span>
											<span class="hiw-form__value is-placeholder">01XXXXXXXXX</span>
										</div>
										<div class="hiw-form__row">
											<div class="hiw-form__field">
												<span class="hiw-form__label"><?php esc_html_e( 'Age', 'lieusoft' ); ?></span>
												<span class="hiw-form__value is-placeholder">28</span>
											</div>
											<div class="hiw-form__field">
												<span class="hiw-form__label"><?php esc_html_e( 'Gender', 'lieusoft' ); ?></span>
												<span class="hiw-form__value"><?php esc_html_e( 'Male', 'lieusoft' ); ?></span>
											</div>
										</div>
									</div>
									<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></span>
								</div>
							</div>
						<?php elseif ( 'confirmation' === $step['widget'] ) : ?>
							<div class="hiw-modal">
								<div class="hiw-modal__head">
									<h4><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></h4>
									<span class="hiw-modal__close">&times;</span>
								</div>
								<div class="hiw-modal__body hiw-modal__body--center">
									<span class="hiw-confirm__check"><?php echo lieusoft_icon( 'check-circle' ); ?></span>
									<h4><?php esc_html_e( 'Booking Confirmed', 'lieusoft' ); ?></h4>
									<div class="hiw-confirm__rows">
										<div><span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?></span><strong>B002854</strong></div>
										<div><span><?php esc_html_e( 'Patient', 'lieusoft' ); ?></span><strong>Abdur Rahman</strong></div>
										<div><span><?php esc_html_e( 'Doctor', 'lieusoft' ); ?></span><strong>Dr. Dewan Md. Kudrat-A-Elahi</strong></div>
										<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Oct 28, 2026</strong></div>
										<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>3:20 PM</strong></div>
									</div>
									<div class="hiw-confirm__qr" aria-hidden="true">
										<svg viewBox="0 0 29 29" width="100%" height="100%" shape-rendering="crispEdges">
											<rect width="29" height="29" fill="#fff"/>
											<path fill="none" stroke="#0E0C1A" stroke-width="1" d="M4 4.5h7m2 0h1m2 0h1m1 0h7M4 5.5h1m5 0h1m2 0h4m1 0h1m5 0h1M4 6.5h1m1 0h3m1 0h1m1 0h1m2 0h2m1 0h1m1 0h3m1 0h1M4 7.5h1m1 0h3m1 0h1m1 0h1m1 0h2m2 0h1m1 0h3m1 0h1M4 8.5h1m1 0h3m1 0h1m1 0h1m3 0h1m1 0h1m1 0h3m1 0h1M4 9.5h1m5 0h1m1 0h4m2 0h1m5 0h1M4 10.5h7m1 0h1m1 0h1m1 0h1m1 0h7M12 11.5h1M4 12.5h1m1 0h5m2 0h3m2 0h5M5 13.5h1m1 0h1m1 0h1m5 0h2m2 0h1m3 0h2M4 14.5h1m1 0h5m5 0h1m2 0h1m2 0h2M4 15.5h1m4 0h1m1 0h7m2 0h1M6 16.5h1m3 0h2m1 0h2m1 0h1m3 0h3M12 17.5h1m1 0h1m1 0h2m1 0h2m3 0h1M4 18.5h7m2 0h1m1 0h1m1 0h1m2 0h1m1 0h1m1 0h1M4 19.5h1m5 0h1m1 0h1m5 0h1m2 0h1m1 0h2M4 20.5h1m1 0h3m1 0h1m1 0h1m1 0h2m1 0h3m1 0h3M4 21.5h1m1 0h3m1 0h1m1 0h2m2 0h2m1 0h2m1 0h1M4 22.5h1m1 0h3m1 0h1m1 0h3m1 0h1m3 0h1m1 0h1M4 23.5h1m5 0h1m2 0h1m2 0h2m2 0h3m1 0h1M4 24.5h7m1 0h1m1 0h1m1 0h1m4 0h2"/>
										</svg>
									</div>
									<span class="hiw-confirm__note"><?php esc_html_e( 'Show this QR code at check-in.', 'lieusoft' ); ?></span>
								</div>
							</div>
						<?php elseif ( 'notify' === $step['widget'] ) : ?>
							<div class="hiw-notify-stack">
								<div class="hiw-notify hiw-notify--sms">
									<div class="hiw-notify__head">
										<?php echo lieusoft_icon( 'chat' ); ?>
										<span><?php esc_html_e( 'SMS', 'lieusoft' ); ?></span>
										<span class="hiw-notify__time"><?php esc_html_e( 'Just now', 'lieusoft' ); ?></span>
									</div>
									<p class="hiw-notify__text"><?php esc_html_e( 'National Institute of Neuroscience & Hospital: Appointment confirmed with Dr. Dewan Md. Kudrat-A-Elahi on Oct 28, 2026 at 3:20 PM. Booking ID: B002854. Helpline: 01707574598.', 'lieusoft' ); ?></p>
								</div>
								<div class="hiw-notify hiw-notify--email">
									<div class="hiw-notify__head">
										<?php echo lieusoft_icon( 'envelope' ); ?>
										<span><?php esc_html_e( 'Email', 'lieusoft' ); ?></span>
										<span class="hiw-notify__time"><?php esc_html_e( 'Just now', 'lieusoft' ); ?></span>
									</div>
									<strong class="hiw-notify__subject"><?php esc_html_e( 'Appointment Confirmed — Dr. Dewan Md. Kudrat-A-Elahi', 'lieusoft' ); ?></strong>
									<p class="hiw-notify__text"><?php esc_html_e( 'Hi Abdur Rahman, your appointment is confirmed. Please arrive 10 minutes early and bring your QR code for check-in.', 'lieusoft' ); ?></p>
									<div class="hiw-notify__details">
										<div><span><?php esc_html_e( 'Doctor', 'lieusoft' ); ?></span><strong>Dr. Dewan Md. Kudrat-A-Elahi</strong></div>
										<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Oct 28, 2026</strong></div>
										<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>3:20 PM</strong></div>
										<div><span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?></span><strong>B002854</strong></div>
									</div>
									<p class="hiw-notify__sign">— <?php esc_html_e( 'National Institute of Neuroscience & Hospital', 'lieusoft' ); ?></p>
								</div>
							</div>
						<?php elseif ( 'admin-booking' === $step['widget'] ) : ?>
							<div class="hiw-modal">
								<div class="hiw-modal__head">
									<h4><?php esc_html_e( 'Admin Panel · Appointments', 'lieusoft' ); ?></h4>
									<span class="hiw-modal__close">&times;</span>
								</div>
								<div class="hiw-modal__body">
									<div class="hiw-admin-stats">
										<div><strong>32</strong><span><?php esc_html_e( "Today's Appointments", 'lieusoft' ); ?></span></div>
										<div><strong>956</strong><span><?php esc_html_e( 'Total Patients', 'lieusoft' ); ?></span></div>
										<div><strong>$24,560</strong><span><?php esc_html_e( 'Total Revenue', 'lieusoft' ); ?></span></div>
									</div>
									<div class="hiw-admin-doctor">
										<span class="hiw-admin-doctor__photo">
											<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/doctor-dewan-avatar.jpg' ) ); ?>" alt="">
										</span>
										<div class="hiw-admin-doctor__name">
											<strong><?php esc_html_e( 'Dr. Dewan Md. Kudrat-A-Elahi', 'lieusoft' ); ?></strong>
											<span><?php esc_html_e( 'Medicine · Today', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-admin-doctor__actions">
											<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Print', 'lieusoft' ); ?>"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></span>
											<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Export CSV', 'lieusoft' ); ?>"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg></span>
										</div>
									</div>
									<span class="hiw-modal__label"><?php esc_html_e( "Today's Queue", 'lieusoft' ); ?></span>
									<div class="hiw-admin-list">
										<div class="hiw-admin-row">
											<span class="hiw-queue-row__pos">1</span>
											<strong><?php esc_html_e( 'Ayesha Rahman', 'lieusoft' ); ?></strong>
											<span class="hiw-admin-row__gender"><?php esc_html_e( 'Female', 'lieusoft' ); ?></span>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-admin-row">
											<span class="hiw-queue-row__pos">2</span>
											<strong><?php esc_html_e( 'Mehedi Hasan', 'lieusoft' ); ?></strong>
											<span class="hiw-admin-row__gender"><?php esc_html_e( 'Male', 'lieusoft' ); ?></span>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-admin-row">
											<span class="hiw-queue-row__pos">3</span>
											<strong><?php esc_html_e( 'Rafiqul Islam', 'lieusoft' ); ?></strong>
											<span class="hiw-admin-row__gender"><?php esc_html_e( 'Male', 'lieusoft' ); ?></span>
											<span class="hiw-admin__status hiw-admin__status--gray"><?php esc_html_e( 'Booked', 'lieusoft' ); ?></span>
											<span class="hiw-admin-row__checkin"><?php esc_html_e( 'Check In', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-admin-row">
											<span class="hiw-queue-row__pos">4</span>
											<strong><?php esc_html_e( 'Nusrat Jahan', 'lieusoft' ); ?></strong>
											<span class="hiw-admin-row__gender"><?php esc_html_e( 'Female', 'lieusoft' ); ?></span>
											<span class="hiw-admin__status hiw-admin__status--gray"><?php esc_html_e( 'Booked', 'lieusoft' ); ?></span>
											<span class="hiw-admin-row__checkin"><?php esc_html_e( 'Check In', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-admin-row hiw-admin-row--new">
											<span class="hiw-queue-row__pos">5</span>
											<strong><?php esc_html_e( 'Abdur Rahman', 'lieusoft' ); ?></strong>
											<span class="hiw-admin-row__gender"><?php esc_html_e( 'Male', 'lieusoft' ); ?></span>
											<span class="hiw-admin__status hiw-admin__status--gray"><?php esc_html_e( 'Booked', 'lieusoft' ); ?></span>
											<span class="hiw-admin-row__checkin"><?php esc_html_e( 'Check In', 'lieusoft' ); ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php elseif ( 'live-queue' === $step['widget'] ) : ?>
							<div class="hiw-modal">
								<div class="hiw-modal__head">
									<h4><span class="hiw-live-dot" aria-hidden="true"></span><?php esc_html_e( 'Live Queue · Dr. Dewan Md. Kudrat-A-Elahi', 'lieusoft' ); ?></h4>
									<span class="hiw-modal__close">&times;</span>
								</div>
								<div class="hiw-modal__body">
									<div class="hiw-queue-now">
										<span><?php esc_html_e( 'Now Serving', 'lieusoft' ); ?></span>
										<strong><?php esc_html_e( 'Mehedi Hasan', 'lieusoft' ); ?></strong>
									</div>
									<div class="hiw-queue-list">
										<div class="hiw-queue-row hiw-queue-row--current">
											<span class="hiw-queue-row__pos">1</span>
											<strong><?php esc_html_e( 'Mehedi Hasan', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'In Room', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">2</span>
											<strong><?php esc_html_e( 'Abdur Rahman', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Next', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">3</span>
											<strong><?php esc_html_e( 'Ayesha Rahman', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">4</span>
											<strong><?php esc_html_e( 'Rafiqul Islam', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">5</span>
											<strong><?php esc_html_e( 'Nusrat Jahan', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">6</span>
											<strong><?php esc_html_e( 'Kamal Hossain', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--blue"><?php esc_html_e( 'Checked In', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">7</span>
											<strong><?php esc_html_e( 'Sultana Begum', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--gray"><?php esc_html_e( 'Away', 'lieusoft' ); ?></span>
										</div>
										<div class="hiw-queue-row">
											<span class="hiw-queue-row__pos">8</span>
											<strong><?php esc_html_e( 'Tanvir Ahmed', 'lieusoft' ); ?></strong>
											<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Waiting', 'lieusoft' ); ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php else : ?>
							<?php // Other solutions' widgets: 'tailor-*' lives in feature-widgets-tailor.php, etc. ?>
							<?php get_template_part( 'template-parts/feature-widgets', strtok( $step['widget'], '-' ), array( 'widget' => $step['widget'] ) ); ?>
						<?php endif; ?>
					</div>
					<div class="feature-stack__content">
						<span class="feature-step__badge"><?php echo esc_html( $step['num'] ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['desc'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
