<?php
$lieusoft_services_list = array(
	array( 'name' => __( 'Hair Cut', 'lieusoft' ), 'time' => __( '20 mins', 'lieusoft' ), 'price' => '$25' ),
	array( 'name' => __( 'Facial', 'lieusoft' ), 'time' => __( '60 mins', 'lieusoft' ), 'price' => '$40' ),
	array( 'name' => __( 'Spa & Massage', 'lieusoft' ), 'time' => __( '60 mins', 'lieusoft' ), 'price' => '$60' ),
	array( 'name' => __( 'Manicure', 'lieusoft' ), 'time' => __( '30 mins', 'lieusoft' ), 'price' => '$20' ),
);

$lieusoft_staff = array(
	array( 'name' => __( 'John Smith', 'lieusoft' ), 'role' => __( 'Hair Expert', 'lieusoft' ) ),
	array( 'name' => __( 'Anna White', 'lieusoft' ), 'role' => __( 'Skincare Expert', 'lieusoft' ) ),
	array( 'name' => __( 'David Brown', 'lieusoft' ), 'role' => __( 'Spa Therapist', 'lieusoft' ) ),
);
?>
<section class="gallery">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Beautiful Booking Layouts', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Multiple layouts and components to match your website design.', 'lieusoft' ); ?></p>
		</div>

		<div class="gallery__grid">
			<figure class="gallery__item">
				<div class="booking-mock">
					<span class="booking-mock__label"><?php esc_html_e( 'Select Service', 'lieusoft' ); ?></span>
					<span class="booking-mock__field"><?php esc_html_e( 'Hair Cut', 'lieusoft' ); ?></span>
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
					<?php foreach ( $lieusoft_services_list as $service ) : ?>
						<div class="service-row">
							<span class="avatar"></span>
							<span class="service-row__name"><?php echo esc_html( $service['name'] ); ?><small><?php echo esc_html( $service['time'] ); ?></small></span>
							<span class="service-row__price"><?php echo esc_html( $service['price'] ); ?></span>
							<span class="service-row__btn"><?php esc_html_e( 'Book Now', 'lieusoft' ); ?></span>
						</div>
					<?php endforeach; ?>
					<span class="booking-mock__link"><?php esc_html_e( 'View All Services', 'lieusoft' ); ?></span>
				</div>
				<figcaption><?php esc_html_e( 'Service List', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="staff-grid-mock">
					<?php foreach ( $lieusoft_staff as $staff ) : ?>
						<div class="staff-card-mock">
							<span class="avatar avatar--lg"></span>
							<strong><?php echo esc_html( $staff['name'] ); ?></strong>
							<small><?php echo esc_html( $staff['role'] ); ?></small>
							<span class="staff-card-mock__btn"><?php esc_html_e( 'Book Now', 'lieusoft' ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>
				<figcaption><?php esc_html_e( 'Staff Grid', 'lieusoft' ); ?></figcaption>
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
				<figcaption><?php esc_html_e( 'Calendar View', 'lieusoft' ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>
