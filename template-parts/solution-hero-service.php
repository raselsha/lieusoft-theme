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
			<div class="hero-sim-window" data-hero-sim>
				<div class="hero-sim-window__bar">
					<span class="hiw-widget__dot" style="background:#FF5F57"></span>
					<span class="hiw-widget__dot" style="background:#FEBC2E"></span>
					<span class="hiw-widget__dot" style="background:#28C840"></span>
					<span class="hero-sim-window__title" data-sim-title><?php esc_html_e( 'Choose a Service', 'lieusoft' ); ?></span>
				</div>

				<div class="hero-sim-window__body">

					<!-- Scene 1: customer picks a service -->
					<div class="hero-sim__scene is-active" data-scene="services" data-title="<?php esc_attr_e( 'Choose a Service', 'lieusoft' ); ?>">
						<div class="sim-chips">
							<span class="is-active"><?php esc_html_e( 'All', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Massage', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Hair', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Skin Care', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Nails', 'lieusoft' ); ?></span>
						</div>
						<div class="sim-list">
							<div class="sim-item is-selected">
								<span class="sim-item__icon"><?php echo lieusoft_icon( 'smile' ); ?></span>
								<span class="sim-item__text"><strong><?php esc_html_e( 'Traditional Thai Massage', 'lieusoft' ); ?></strong><small><?php esc_html_e( '60 min · Massage', 'lieusoft' ); ?></small></span>
								<span class="sim-item__price">&#2547;2,500</span>
								<span class="hero-sim__cursor" style="right:70px;top:50%;margin-top:-8px;"></span>
							</div>
							<div class="sim-item">
								<span class="sim-item__icon"><?php echo lieusoft_icon( 'scissors' ); ?></span>
								<span class="sim-item__text"><strong><?php esc_html_e( 'Haircut & Styling', 'lieusoft' ); ?></strong><small><?php esc_html_e( '45 min · Hair', 'lieusoft' ); ?></small></span>
								<span class="sim-item__price">&#2547;800</span>
							</div>
							<div class="sim-item">
								<span class="sim-item__icon"><?php echo lieusoft_icon( 'star' ); ?></span>
								<span class="sim-item__text"><strong><?php esc_html_e( 'Deep Cleansing Facial', 'lieusoft' ); ?></strong><small><?php esc_html_e( '50 min · Skin Care', 'lieusoft' ); ?></small></span>
								<span class="sim-item__price">&#2547;1,800</span>
							</div>
							<div class="sim-item">
								<span class="sim-item__icon"><?php echo lieusoft_icon( 'smile' ); ?></span>
								<span class="sim-item__text"><strong><?php esc_html_e( 'Hot Stone Massage', 'lieusoft' ); ?></strong><small><?php esc_html_e( '90 min · Massage', 'lieusoft' ); ?></small></span>
								<span class="sim-item__price">&#2547;3,500</span>
							</div>
							<div class="sim-item">
								<span class="sim-item__icon"><?php echo lieusoft_icon( 'star' ); ?></span>
								<span class="sim-item__text"><strong><?php esc_html_e( 'Manicure & Pedicure', 'lieusoft' ); ?></strong><small><?php esc_html_e( '60 min · Nails', 'lieusoft' ); ?></small></span>
								<span class="sim-item__price">&#2547;1,200</span>
							</div>
						</div>
					</div>

					<!-- Scene 2: pick staff, date & time -->
					<div class="hero-sim__scene" data-scene="datetime" data-title="<?php esc_attr_e( 'Pick Staff & Time', 'lieusoft' ); ?>">
						<span class="hiw-modal__label"><?php esc_html_e( 'Choose Staff', 'lieusoft' ); ?></span>
						<div class="sim-staff">
							<span><b>?</b><?php esc_html_e( 'Any', 'lieusoft' ); ?></span>
							<span class="is-active"><b>N</b>Nadia</span>
							<span><b>R</b>Rumana</span>
							<span><b>S</b>Sumi</span>
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
									$lieusoft_hero_cal_cells = array(
										'', '', '', '', '1m', '2m', '3m',
										'4m', '5m', '6m', '7m', '8m', '9m', '10m',
										'11m', '12m', '13m', '14m', '15m', '16m', '17m',
										'18m', '19m', '20m', '21m', '22m', '23m', '24m',
										'25t', '26o', '27o', '28s', '29o', '30o', '31o',
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
								<span>10:00 AM</span>
								<span class="is-active" style="position:relative;">11:00 AM<span class="hero-sim__cursor" style="right:10px;top:50%;margin-top:-8px;"></span></span>
								<span>12:00 PM</span>
								<span>2:00 PM</span>
								<span>3:00 PM</span>
							</div>
						</div>
					</div>

					<!-- Scene 3: customer fills in their details -->
					<div class="hero-sim__scene" data-scene="customer-form" data-title="<?php esc_attr_e( 'Your Details', 'lieusoft' ); ?>">
						<div class="hiw-selected-slot">
							<div><span><?php esc_html_e( 'Selected', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Thai Massage · Oct 28 · 11:00 AM', 'lieusoft' ); ?></strong></div>
							<span class="hiw-modal__link"><?php esc_html_e( 'Change', 'lieusoft' ); ?></span>
						</div>
						<div class="hiw-form">
							<div class="hiw-form__field">
								<span class="hiw-form__label"><?php esc_html_e( 'Full Name', 'lieusoft' ); ?></span>
								<span class="hiw-form__value">Tasnim Akter</span>
							</div>
							<div class="hiw-form__row">
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Mobile Number', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">01XXXXXXXXX</span>
								</div>
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Email', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">tasnim@mail.com</span>
								</div>
							</div>
							<div class="hiw-form__field">
								<span class="hiw-form__label"><?php esc_html_e( 'Note for Staff', 'lieusoft' ); ?></span>
								<span class="hiw-form__value is-placeholder"><?php esc_html_e( 'Medium pressure, please', 'lieusoft' ); ?></span>
							</div>
						</div>
						<div class="hero-sim__fee"><span><?php esc_html_e( 'Total · 60 min with Nadia', 'lieusoft' ); ?></span><strong>&#2547;2,500</strong></div>
						<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Confirm Booking', 'lieusoft' ); ?></span>
					</div>

					<!-- Scene 4: confirmed -->
					<div class="hero-sim__scene" data-scene="confirm" data-title="<?php esc_attr_e( 'Booking Confirmed', 'lieusoft' ); ?>">
						<div class="hiw-confirm-ticket">
							<div class="hiw-confirm-ticket__head">
								<span class="hiw-confirm__check"><?php echo lieusoft_icon( 'check-circle' ); ?></span>
								<div>
									<strong><?php esc_html_e( 'Booking Confirmed', 'lieusoft' ); ?></strong>
									<span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?> SB-4127</span>
								</div>
							</div>
							<div class="hiw-confirm-ticket__body">
								<div><span><?php esc_html_e( 'Customer', 'lieusoft' ); ?></span><strong>Tasnim Akter</strong></div>
								<div><span><?php esc_html_e( 'Service', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Traditional Thai Massage', 'lieusoft' ); ?></strong></div>
								<div><span><?php esc_html_e( 'Staff', 'lieusoft' ); ?></span><strong>Nadia</strong></div>
								<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Oct 28, 2026</strong></div>
								<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong><?php esc_html_e( '11:00 AM · 60 min', 'lieusoft' ); ?></strong></div>
								<div><span><?php esc_html_e( 'Total', 'lieusoft' ); ?></span><strong>&#2547;2,500 &middot; <?php esc_html_e( 'Pay at venue', 'lieusoft' ); ?></strong></div>
							</div>
							<div class="hiw-confirm-ticket__foot">
								<span class="hiw-confirm-ticket__note"><?php esc_html_e( 'A reminder SMS will arrive 2 hours before.', 'lieusoft' ); ?></span>
								<div class="hiw-confirm-ticket__actions">
									<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Add to calendar', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'calendar' ); ?></span>
									<span class="hiw-admin-icon-btn" title="<?php esc_attr_e( 'Download', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'download' ); ?></span>
								</div>
							</div>
						</div>
					</div>

					<!-- Scene 5: it lands in the business's admin dashboard -->
					<div class="hero-sim__scene" data-scene="dashboard" data-title="<?php esc_attr_e( 'Admin Dashboard', 'lieusoft' ); ?>">
						<div class="hero-sim__dash">
							<div class="hero-sim__dash-side">
								<span class="is-active"><?php echo lieusoft_icon( 'calendar' ); ?></span>
								<span><?php echo lieusoft_icon( 'scissors' ); ?></span>
								<span><?php echo lieusoft_icon( 'users' ); ?></span>
								<span><?php echo lieusoft_icon( 'bar-chart' ); ?></span>
							</div>
							<div class="hero-sim__dash-main">
								<div class="hero-sim__dash-head">
									<strong><?php esc_html_e( 'Bookings', 'lieusoft' ); ?></strong>
									<span><?php esc_html_e( 'Wed, Oct 28, 2026', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-stats">
									<div><?php echo lieusoft_icon( 'calendar' ); ?><strong>18</strong><span><?php esc_html_e( "Today's Bookings", 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'user' ); ?><strong>850</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'credit-card' ); ?><strong>&#2547;42,300</strong><span><?php esc_html_e( "Today's Revenue", 'lieusoft' ); ?></span></div>
								</div>
								<h5><?php esc_html_e( "Today's Bookings", 'lieusoft' ); ?></h5>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">F</span>
									<strong>Farzana Haque</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Facial · 10:00', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Done', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">S</span>
									<strong>Sabrina Islam</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Haircut · 10:30', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--blue"><?php esc_html_e( 'In Service', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">M</span>
									<strong>Mitu Rahman</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Nails · 12:00', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Upcoming', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">J</span>
									<strong>Jannat Ara</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Hot Stone · 2:00', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Upcoming', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row hiw-admin__row--new" data-sim-new-row>
									<span class="hiw-admin__avatar">T</span>
									<strong>Tasnim Akter</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Thai Massage · 11:00', 'lieusoft' ); ?></span>
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
