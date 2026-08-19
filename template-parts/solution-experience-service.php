<section class="experience">
	<div class="container experience__grid">
		<div class="experience__media">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/solution-spa-bg.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Customer enjoying a spa treatment', 'lieusoft' ); ?>">

			<div class="floating-card floating-card--chart">
				<span class="floating-card__label"><?php esc_html_e( 'This Month Bookings', 'lieusoft' ); ?></span>
				<span class="floating-card__number">1,250</span>
				<span class="floating-card__delta">+18% <?php esc_html_e( 'from last month', 'lieusoft' ); ?></span>
				<div class="floating-card__bars">
					<span style="height:35%"></span>
					<span style="height:50%"></span>
					<span style="height:40%"></span>
					<span style="height:65%"></span>
					<span style="height:80%"></span>
					<span style="height:100%"></span>
				</div>
			</div>

			<div class="floating-card floating-card--avatars">
				<div class="avatar-stack">
					<span></span><span></span><span></span>
				</div>
				<div>
					<span class="floating-card__title"><?php esc_html_e( 'Happy Customers', 'lieusoft' ); ?></span>
					<div class="floating-card__rating">
						<?php echo lieusoft_icon( 'star', 'icon--star' ); ?> 4.9 (230 <?php esc_html_e( 'Reviews', 'lieusoft' ); ?>)
					</div>
				</div>
			</div>
		</div>

		<div class="experience__content">
			<span class="eyebrow"><?php esc_html_e( 'Better Service, Happier Customers', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Deliver Excellent Service and Grow Your Business', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Our solution helps you save time, reduce no-shows and provide a smooth booking experience for your customers.', 'lieusoft' ); ?></p>

			<ul class="check-list check-list--stacked">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Easy booking for your customers', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reduce no-shows with automated reminders', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Manage staff and services efficiently', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Increase customer satisfaction', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Grow your business with powerful insights', 'lieusoft' ); ?></li>
			</ul>
		</div>
	</div>
</section>
