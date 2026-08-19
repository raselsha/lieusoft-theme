<?php
$lieusoft_doctors_list = array(
	array( 'name' => __( 'Dr. John Doe', 'lieusoft' ), 'time' => __( 'Cardiologist', 'lieusoft' ) ),
	array( 'name' => __( 'Dr. Sarah Smith', 'lieusoft' ), 'time' => __( 'Dermatologist', 'lieusoft' ) ),
	array( 'name' => __( 'Dr. Jasmin Karim', 'lieusoft' ), 'time' => __( 'Pediatrician', 'lieusoft' ) ),
	array( 'name' => __( 'Dr. Zubin Foster', 'lieusoft' ), 'time' => __( 'Orthopedic', 'lieusoft' ) ),
);

$lieusoft_time_slots = array( '09:00', '09:30', '10:00', '10:30', '11:00', '11:30' );
?>
<section class="gallery">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Beautiful Booking Layouts', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Choose from multiple layouts and components to match your website.', 'lieusoft' ); ?></p>
		</div>

		<div class="gallery__grid">
			<figure class="gallery__item">
				<div class="booking-mock">
					<span class="booking-mock__label"><?php esc_html_e( 'Select Doctor', 'lieusoft' ); ?></span>
					<span class="booking-mock__field"><?php esc_html_e( 'Dr. Sarah Johnson', 'lieusoft' ); ?></span>
					<span class="booking-mock__label"><?php esc_html_e( 'Select Date', 'lieusoft' ); ?></span>
					<div class="booking-mock__cal">
						<?php for ( $i = 0; $i < 14; $i++ ) : ?>
							<span class="<?php echo 8 === $i ? 'is-active' : ''; ?>"></span>
						<?php endfor; ?>
					</div>
					<span class="booking-mock__btn"><?php esc_html_e( 'Book Appointment', 'lieusoft' ); ?></span>
				</div>
				<figcaption><?php esc_html_e( 'Booking Form', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock booking-mock--list">
					<?php foreach ( $lieusoft_doctors_list as $doctor ) : ?>
						<div class="service-row">
							<span class="avatar"></span>
							<span class="service-row__name"><?php echo esc_html( $doctor['name'] ); ?><small><?php echo esc_html( $doctor['time'] ); ?></small></span>
							<span class="service-row__btn"><?php esc_html_e( 'Book', 'lieusoft' ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>
				<figcaption><?php esc_html_e( 'Doctor List', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock">
					<span class="booking-mock__label"><?php esc_html_e( 'Available Times — May 24', 'lieusoft' ); ?></span>
					<div class="timeslot-mock">
						<?php foreach ( $lieusoft_time_slots as $i => $slot ) : ?>
							<span class="<?php echo 2 === $i ? 'is-active' : ''; ?>"><?php echo esc_html( $slot ); ?></span>
						<?php endforeach; ?>
					</div>
					<span class="booking-mock__btn"><?php esc_html_e( 'Confirm Slot', 'lieusoft' ); ?></span>
				</div>
				<figcaption><?php esc_html_e( 'Time Slot', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock booking-mock--calendar">
					<span class="booking-mock__month"><?php esc_html_e( 'May 2024', 'lieusoft' ); ?></span>
					<div class="booking-mock__cal booking-mock__cal--month">
						<?php
						$lieusoft_colors = array( 6 => 'green', 13 => 'purple', 20 => 'orange', 24 => 'blue' );
						for ( $i = 0; $i < 35; $i++ ) :
							$c = $lieusoft_colors[ $i ] ?? '';
							?>
							<span class="<?php echo $c ? 'has-event has-event--' . esc_attr( $c ) : ''; ?>"></span>
						<?php endfor; ?>
					</div>
				</div>
				<figcaption><?php esc_html_e( 'Appointment Calendar', 'lieusoft' ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>
