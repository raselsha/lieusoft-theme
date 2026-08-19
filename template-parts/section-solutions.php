<?php
$lieusoft_solutions = array(
	array(
		'title'  => __( 'Doctor Appointment Solution', 'lieusoft' ),
		'desc'   => __( 'Modern website with online appointment booking, doctor profiles, patient management, Live Queue and an easy-to-use admin dashboard.', 'lieusoft' ),
		'tags'   => array( 'Appointment', 'Patient', 'LIve Queue' ),
		'accent' => 'purple',
		'bg'     => 'solution-doctor-bg.png',
		'badge'  => 'badge-doctor.png',
	),
	array(
		'title'  => __( 'Tailor Management Solution', 'lieusoft' ),
		'desc'   => __( 'Manage customer orders, body measurements, delivery schedules, invoices, and shop operations from one simple dashboard.', 'lieusoft' ),
		'tags'   => array( 'Orders', 'Mesurments', 'Customers', 'Invoices' ),
		'accent' => 'orange',
		'bg'     => 'solution-tailor-bg.png',
		'badge'  => 'badge-shirt.png',
	),
	array(
		'title'  => __( 'Service Booking Solution', 'lieusoft' ),
		'desc'   => __( 'Perfect for thai massage, salons, spas, beauty centers, repair services, consultants, and other appointment-based businesses.', 'lieusoft' ),
		'tags'   => array( 'Orders', 'Mesurments', 'Customers', 'Invoices' ),
		'accent' => 'green',
		'bg'     => 'solution-spa-bg.jpg',
		'badge'  => 'badge-calendar.png',
	),
);
?>
<section class="solutions" id="solutions">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Our Business Solutions', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Ready-made website solutions designed for your business. We handle everything from setup to support, so you can focus on running your business.', 'lieusoft' ); ?></p>
		</div>

		<div class="card-grid card-grid--3">
			<?php foreach ( $lieusoft_solutions as $solution ) : ?>
				<article class="solution-card">
					<div class="solution-card__media">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $solution['bg'] ) ); ?>" alt="">
						<span class="solution-card__badge solution-card__badge--<?php echo esc_attr( $solution['accent'] ); ?>">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $solution['badge'] ) ); ?>" alt="">
						</span>
					</div>
					<div class="solution-card__body">
						<h3 class="card__title"><?php echo esc_html( $solution['title'] ); ?></h3>
						<p class="card__desc"><?php echo esc_html( $solution['desc'] ); ?></p>
						<ul class="card__tags card__tags--<?php echo esc_attr( $solution['accent'] ); ?>">
							<?php foreach ( $solution['tags'] as $tag ) : ?>
								<li><?php echo esc_html( $tag ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="link-arrow" href="#solutions">
							<?php esc_html_e( 'View Solutions', 'lieusoft' ); ?>
							<?php echo lieusoft_icon( 'arrow-right' ); ?>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
