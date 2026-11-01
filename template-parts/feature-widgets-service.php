<?php
/**
 * Service Booking step widgets for the "See How It Works" walkthrough
 * (solution-feature-steps.php). Expects $args: widget — one of
 * 'service-list', 'service-datetime', 'service-form', 'service-confirm',
 * 'service-notify', 'service-admin', 'service-schedule'.
 */
$widget = $args['widget'] ?? '';
?>
<?php if ( 'service-list' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Our Services', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-chips">
				<span class="is-active"><?php esc_html_e( 'All', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Massage', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Hair', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Skin Care', 'lieusoft' ); ?></span>
			</div>
			<div class="sim-list">
				<div class="sim-item is-selected">
					<span class="sim-item__icon"><?php echo lieusoft_icon( 'smile' ); ?></span>
					<span class="sim-item__text"><strong><?php esc_html_e( 'Traditional Thai Massage', 'lieusoft' ); ?></strong><small><?php esc_html_e( '60 min · 3 staff available', 'lieusoft' ); ?></small></span>
					<span class="sim-item__price">&#2547;2,500</span>
				</div>
				<div class="sim-item">
					<span class="sim-item__icon"><?php echo lieusoft_icon( 'scissors' ); ?></span>
					<span class="sim-item__text"><strong><?php esc_html_e( 'Haircut & Styling', 'lieusoft' ); ?></strong><small><?php esc_html_e( '45 min · 2 staff available', 'lieusoft' ); ?></small></span>
					<span class="sim-item__price">&#2547;800</span>
				</div>
				<div class="sim-item">
					<span class="sim-item__icon"><?php echo lieusoft_icon( 'star' ); ?></span>
					<span class="sim-item__text"><strong><?php esc_html_e( 'Deep Cleansing Facial', 'lieusoft' ); ?></strong><small><?php esc_html_e( '50 min · 2 staff available', 'lieusoft' ); ?></small></span>
					<span class="sim-item__price">&#2547;1,800</span>
				</div>
				<div class="sim-item">
					<span class="sim-item__icon"><?php echo lieusoft_icon( 'smile' ); ?></span>
					<span class="sim-item__text"><strong><?php esc_html_e( 'Hot Stone Massage', 'lieusoft' ); ?></strong><small><?php esc_html_e( '90 min · 1 staff available', 'lieusoft' ); ?></small></span>
					<span class="sim-item__price">&#2547;3,500</span>
				</div>
			</div>
		</div>
	</div>
<?php elseif ( 'service-datetime' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Book a Service', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
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
						$lieusoft_cal_cells = array(
							'', '', '', '', '1m', '2m', '3m',
							'4m', '5m', '6m', '7m', '8m', '9m', '10m',
							'11m', '12m', '13m', '14m', '15m', '16m', '17m',
							'18m', '19m', '20m', '21m', '22m', '23m', '24m',
							'25t', '26o', '27o', '28s', '29o', '30o', '31o',
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
					<span>10:00 AM</span>
					<span class="is-active">11:00 AM</span>
					<span>12:00 PM</span>
					<span>2:00 PM</span>
					<span>3:00 PM</span>
				</div>
			</div>
		</div>
	</div>
<?php elseif ( 'service-form' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Book a Service', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="hiw-selected-slot">
				<div><span><?php esc_html_e( 'Selected', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Thai Massage · Oct 28 · 11:00 AM', 'lieusoft' ); ?></strong></div>
				<span class="hiw-modal__link"><?php esc_html_e( 'Change', 'lieusoft' ); ?></span>
			</div>
			<div class="hiw-form">
				<div class="hiw-form__field">
					<span class="hiw-form__label"><?php esc_html_e( 'Full Name', 'lieusoft' ); ?></span>
					<span class="hiw-form__value is-placeholder"><?php esc_html_e( 'e.g. Tasnim Akter', 'lieusoft' ); ?></span>
				</div>
				<div class="hiw-form__row">
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Mobile Number', 'lieusoft' ); ?></span>
						<span class="hiw-form__value is-placeholder">01XXXXXXXXX</span>
					</div>
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Email', 'lieusoft' ); ?></span>
						<span class="hiw-form__value is-placeholder">you@mail.com</span>
					</div>
				</div>
				<div class="hiw-form__field">
					<span class="hiw-form__label"><?php esc_html_e( 'Note for Staff', 'lieusoft' ); ?></span>
					<span class="hiw-form__value is-placeholder"><?php esc_html_e( 'Anything we should know?', 'lieusoft' ); ?></span>
				</div>
			</div>
			<div class="hero-sim__fee"><span><?php esc_html_e( 'Total · 60 min', 'lieusoft' ); ?></span><strong>&#2547;2,500</strong></div>
			<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Confirm Booking', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php elseif ( 'service-confirm' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Book a Service', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body hiw-modal__body--center">
			<span class="hiw-confirm__check"><?php echo lieusoft_icon( 'check-circle' ); ?></span>
			<h4><?php esc_html_e( 'Booking Confirmed', 'lieusoft' ); ?></h4>
			<div class="hiw-confirm__rows">
				<div><span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?></span><strong>SB-4127</strong></div>
				<div><span><?php esc_html_e( 'Service', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Traditional Thai Massage', 'lieusoft' ); ?></strong></div>
				<div><span><?php esc_html_e( 'Staff', 'lieusoft' ); ?></span><strong>Nadia</strong></div>
				<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Oct 28, 2026</strong></div>
				<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong><?php esc_html_e( '11:00 AM · 60 min', 'lieusoft' ); ?></strong></div>
				<div><span><?php esc_html_e( 'Total', 'lieusoft' ); ?></span><strong>&#2547;2,500</strong></div>
			</div>
			<span class="hiw-confirm__note"><?php esc_html_e( 'Need to change it? Use the link in your SMS.', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php elseif ( 'service-notify' === $widget ) : ?>
	<div class="hiw-notify-stack">
		<div class="hiw-notify hiw-notify--sms">
			<div class="hiw-notify__head">
				<?php echo lieusoft_icon( 'chat' ); ?>
				<span><?php esc_html_e( 'SMS', 'lieusoft' ); ?></span>
				<span class="hiw-notify__time"><?php esc_html_e( 'Just now', 'lieusoft' ); ?></span>
			</div>
			<p class="hiw-notify__text"><?php esc_html_e( 'Serenity Spa: Your Thai Massage with Nadia is confirmed for Oct 28 at 11:00 AM. Booking ID: SB-4127. We will remind you 2 hours before.', 'lieusoft' ); ?></p>
		</div>
		<div class="hiw-notify hiw-notify--email">
			<div class="hiw-notify__head">
				<?php echo lieusoft_icon( 'envelope' ); ?>
				<span><?php esc_html_e( 'Email', 'lieusoft' ); ?></span>
				<span class="hiw-notify__time"><?php esc_html_e( 'Just now', 'lieusoft' ); ?></span>
			</div>
			<strong class="hiw-notify__subject"><?php esc_html_e( 'Your booking is confirmed — Traditional Thai Massage', 'lieusoft' ); ?></strong>
			<p class="hiw-notify__text"><?php esc_html_e( 'Hi Tasnim, thanks for booking with us. Please arrive 10 minutes early so you can relax before your session.', 'lieusoft' ); ?></p>
			<div class="hiw-notify__details">
				<div><span><?php esc_html_e( 'Staff', 'lieusoft' ); ?></span><strong>Nadia</strong></div>
				<div><span><?php esc_html_e( 'Date', 'lieusoft' ); ?></span><strong>Oct 28, 2026</strong></div>
				<div><span><?php esc_html_e( 'Time', 'lieusoft' ); ?></span><strong>11:00 AM</strong></div>
				<div><span><?php esc_html_e( 'Booking ID', 'lieusoft' ); ?></span><strong>SB-4127</strong></div>
			</div>
			<p class="hiw-notify__sign">— <?php esc_html_e( 'Serenity Spa', 'lieusoft' ); ?></p>
		</div>
	</div>
<?php elseif ( 'service-admin' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Admin Panel · Bookings', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="hiw-admin-stats">
				<div><strong>18</strong><span><?php esc_html_e( "Today's Bookings", 'lieusoft' ); ?></span></div>
				<div><strong>850</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
				<div><strong>&#2547;42,300</strong><span><?php esc_html_e( "Today's Revenue", 'lieusoft' ); ?></span></div>
			</div>
			<span class="hiw-modal__label"><?php esc_html_e( "Today's Bookings", 'lieusoft' ); ?></span>
			<div class="hiw-admin-list">
				<div class="hiw-admin-row">
					<span class="hiw-queue-row__pos">1</span>
					<strong>Farzana Haque</strong>
					<span class="hiw-admin-row__gender">10:00</span>
					<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Done', 'lieusoft' ); ?></span>
				</div>
				<div class="hiw-admin-row">
					<span class="hiw-queue-row__pos">2</span>
					<strong>Sabrina Islam</strong>
					<span class="hiw-admin-row__gender">10:30</span>
					<span class="hiw-admin__status hiw-admin__status--blue"><?php esc_html_e( 'In Service', 'lieusoft' ); ?></span>
				</div>
				<div class="hiw-admin-row hiw-admin-row--new">
					<span class="hiw-queue-row__pos">3</span>
					<strong>Tasnim Akter</strong>
					<span class="hiw-admin-row__gender">11:00</span>
					<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'New', 'lieusoft' ); ?></span>
				</div>
				<div class="hiw-admin-row">
					<span class="hiw-queue-row__pos">4</span>
					<strong>Mitu Rahman</strong>
					<span class="hiw-admin-row__gender">12:00</span>
					<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Upcoming', 'lieusoft' ); ?></span>
				</div>
				<div class="hiw-admin-row">
					<span class="hiw-queue-row__pos">5</span>
					<strong>Jannat Ara</strong>
					<span class="hiw-admin-row__gender">2:00</span>
					<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Upcoming', 'lieusoft' ); ?></span>
				</div>
			</div>
		</div>
	</div>
<?php elseif ( 'service-schedule' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><span class="hiw-live-dot" aria-hidden="true"></span><?php esc_html_e( 'Staff Schedule · Today', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-schedule">
				<div class="sim-schedule__hours"><span></span><div><span>10</span><span>11</span><span>12</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span></div></div>
				<div class="sim-schedule__row"><strong>Nadia</strong><div class="sim-schedule__track"><span style="left:0;width:14%;"><?php esc_html_e( 'Facial', 'lieusoft' ); ?></span><span class="is-new" style="left:14.3%;width:14%;"><?php esc_html_e( 'Thai', 'lieusoft' ); ?></span><span class="is-break" style="left:42.9%;width:14%;"><?php esc_html_e( 'Break', 'lieusoft' ); ?></span><span style="left:57.2%;width:21%;"><?php esc_html_e( 'Hot Stone', 'lieusoft' ); ?></span></div></div>
				<div class="sim-schedule__row"><strong>Rumana</strong><div class="sim-schedule__track"><span style="left:7%;width:11%;"><?php esc_html_e( 'Hair', 'lieusoft' ); ?></span><span style="left:28.6%;width:14%;"><?php esc_html_e( 'Nails', 'lieusoft' ); ?></span><span style="left:57.2%;width:11%;"><?php esc_html_e( 'Hair', 'lieusoft' ); ?></span><span style="left:71.5%;width:14%;"><?php esc_html_e( 'Facial', 'lieusoft' ); ?></span></div></div>
				<div class="sim-schedule__row"><strong>Sumi</strong><div class="sim-schedule__track"><span style="left:14.3%;width:21%;"><?php esc_html_e( 'Hot Stone', 'lieusoft' ); ?></span><span class="is-break" style="left:42.9%;width:14%;"><?php esc_html_e( 'Break', 'lieusoft' ); ?></span><span style="left:71.5%;width:14%;"><?php esc_html_e( 'Thai', 'lieusoft' ); ?></span></div></div>
				<div class="sim-schedule__row"><strong>Mim</strong><div class="sim-schedule__track"><span style="left:0;width:11%;"><?php esc_html_e( 'Nails', 'lieusoft' ); ?></span><span style="left:21.5%;width:14%;"><?php esc_html_e( 'Facial', 'lieusoft' ); ?></span><span style="left:50%;width:11%;"><?php esc_html_e( 'Hair', 'lieusoft' ); ?></span><span style="left:78.6%;width:14%;"><?php esc_html_e( 'Nails', 'lieusoft' ); ?></span></div></div>
			</div>
			<span class="sim-note"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Open slots update automatically — no double bookings.', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php endif; ?>
