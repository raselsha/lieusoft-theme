<?php
$lieusoft_solutions = array(
	array(
		'title'    => __( 'Doctor Appointment Solution', 'lieusoft' ),
		'desc'     => __( 'Modern website with online appointment booking, doctor profiles, patient management, live queue and an easy-to-use admin dashboard.', 'lieusoft' ),
		'tags'     => array( 'Appointment', 'Patient', 'Live Queue' ),
		'accent'   => 'orange',
	),
	array(
		'title'    => __( 'Tailor Management Solution', 'lieusoft' ),
		'desc'     => __( 'Manage customer orders, body measurements, delivery schedules, invoices, and shop operations from one simple dashboard.', 'lieusoft' ),
		'tags'     => array( 'Orders', 'Measurements', 'Customers', 'Invoices' ),
		'accent'   => 'green',
	),
	array(
		'title'    => __( 'Service Booking Solution', 'lieusoft' ),
		'desc'     => __( 'Perfect for thai massage, salons, spas, beauty centers, repair services, consultants, and other appointment-based businesses.', 'lieusoft' ),
		'tags'     => array( 'Orders', 'Measurements', 'Customers', 'Invoices' ),
		'accent'   => 'purple',
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
				<article class="card card--accent-<?php echo esc_attr( $solution['accent'] ); ?>">
					<h3 class="card__title"><?php echo esc_html( $solution['title'] ); ?></h3>
					<p class="card__desc"><?php echo esc_html( $solution['desc'] ); ?></p>
					<ul class="card__tags">
						<?php foreach ( $solution['tags'] as $tag ) : ?>
							<li><?php echo esc_html( $tag ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="btn btn--outline" href="#solutions"><?php esc_html_e( 'View Solutions', 'lieusoft' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
