<?php
$lieusoft_customers = array(
	array( 'name' => __( 'John Doe', 'lieusoft' ), 'role' => '5039 55486' ),
	array( 'name' => __( 'Sarah Smith', 'lieusoft' ), 'role' => '5039 55486' ),
	array( 'name' => __( 'Robert Brown', 'lieusoft' ), 'role' => '5039 55486' ),
	array( 'name' => __( 'Emily Davis', 'lieusoft' ), 'role' => '5039 55486' ),
);
?>
<section class="gallery">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Beautiful Management Layouts', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Organized layouts to manage everything in one place.', 'lieusoft' ); ?></p>
		</div>

		<div class="gallery__grid">
			<figure class="gallery__item">
				<div class="booking-mock">
					<span class="booking-mock__label"><?php esc_html_e( 'Customer', 'lieusoft' ); ?></span>
					<span class="booking-mock__field"><?php esc_html_e( 'Select Customer', 'lieusoft' ); ?></span>
					<span class="booking-mock__label"><?php esc_html_e( 'Item / Service', 'lieusoft' ); ?></span>
					<span class="booking-mock__field"><?php esc_html_e( 'Select Item', 'lieusoft' ); ?></span>
					<span class="booking-mock__label"><?php esc_html_e( 'Delivery Date', 'lieusoft' ); ?></span>
					<span class="booking-mock__field"><?php esc_html_e( 'Select Date', 'lieusoft' ); ?></span>
					<span class="booking-mock__btn"><?php esc_html_e( 'Add Order', 'lieusoft' ); ?></span>
				</div>
				<figcaption><?php esc_html_e( 'Order Form', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock booking-mock--list">
					<?php foreach ( $lieusoft_customers as $customer ) : ?>
						<div class="service-row">
							<span class="avatar"></span>
							<span class="service-row__name"><?php echo esc_html( $customer['name'] ); ?><small><?php echo esc_html( $customer['role'] ); ?></small></span>
						</div>
					<?php endforeach; ?>
				</div>
				<figcaption><?php esc_html_e( 'Customer List', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock measure-mock">
					<svg viewBox="0 0 60 130" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
						<circle cx="30" cy="14" r="10"/>
						<path d="M30 24v50M12 40h36M30 74 16 118M30 74l14 44M12 40 6 78M48 40l6 38"/>
					</svg>
				</div>
				<figcaption><?php esc_html_e( 'Measurement Sheet', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="booking-mock">
					<div class="kanban-mock">
						<div class="kanban-mock__col">
							<span class="kanban-mock__col-title"><?php esc_html_e( 'Pending', 'lieusoft' ); ?></span>
							<span class="kanban-mock__card">#ORD-1025</span>
							<span class="kanban-mock__card">#ORD-1026</span>
						</div>
						<div class="kanban-mock__col">
							<span class="kanban-mock__col-title"><?php esc_html_e( 'In Progress', 'lieusoft' ); ?></span>
							<span class="kanban-mock__card">#ORD-1024</span>
						</div>
						<div class="kanban-mock__col">
							<span class="kanban-mock__col-title"><?php esc_html_e( 'Completed', 'lieusoft' ); ?></span>
							<span class="kanban-mock__card">#ORD-1022</span>
							<span class="kanban-mock__card">#ORD-1023</span>
						</div>
					</div>
				</div>
				<figcaption><?php esc_html_e( 'Order Status Board', 'lieusoft' ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>
