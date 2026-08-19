<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow-pill"><?php esc_html_e( 'WordPress Plugin', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Tailor Management', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Plugin', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'Manage customer orders, measurements, fabrics and deliveries easily. The complete solution for tailoring and clothing businesses.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list check-list--grid">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Order Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Customer Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Measurement & Fitting', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Fabric & Item Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Payment Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reports & Analytics', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#">
					<?php esc_html_e( 'Live Demo', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#">
					<?php esc_html_e( 'Documentation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'file-text' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<!-- CSS-built placeholder device mockup — see solution-hero.php's note. -->
			<div class="device-mock device-mock--wide">
				<div class="device-mock__screen">
					<div class="device-mock__topbar">
						<span class="device-mock__logo"><?php echo lieusoft_icon( 'home' ); ?> Lieusoft</span>
						<span class="device-mock__dot"></span>
						<span class="device-mock__dot"></span>
					</div>
					<div class="device-mock__body">
						<aside class="device-mock__nav">
							<span class="is-active"><?php echo lieusoft_icon( 'bar-chart' ); ?></span>
							<span><?php echo lieusoft_icon( 'clipboard' ); ?></span>
							<span><?php echo lieusoft_icon( 'users' ); ?></span>
							<span><?php echo lieusoft_icon( 'ruler' ); ?></span>
							<span><?php echo lieusoft_icon( 'credit-card' ); ?></span>
						</aside>
						<div class="device-mock__main">
							<p class="device-mock__title"><?php esc_html_e( 'Dashboard', 'lieusoft' ); ?></p>
							<div class="device-mock__stats">
								<div><strong>1,156</strong><span><?php esc_html_e( 'Total Orders', 'lieusoft' ); ?></span></div>
								<div><strong>842</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
								<div><strong>$19,850</strong><span><?php esc_html_e( 'Total Revenue', 'lieusoft' ); ?></span></div>
								<div><strong>28</strong><span><?php esc_html_e( 'Pending Orders', 'lieusoft' ); ?></span></div>
							</div>

							<div class="device-mock__columns">
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Orders Overview', 'lieusoft' ); ?></p>
									<svg class="device-mock__chart" viewBox="0 0 150 70" preserveAspectRatio="none" aria-hidden="true">
										<polyline points="0,50 25,42 50,48 75,20 100,32 125,12 150,24" fill="none" stroke="#7A5EEE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Recent Orders', 'lieusoft' ); ?></p>
									<div class="device-mock__table">
										<div class="device-mock__table-row"><span>#ORD-1025 John Doe</span><em class="pill"><?php esc_html_e( 'In Progress', 'lieusoft' ); ?></em></div>
										<div class="device-mock__table-row"><span>#ORD-1024 Sarah Smith</span><em class="pill"><?php esc_html_e( 'Ready', 'lieusoft' ); ?></em></div>
										<div class="device-mock__table-row"><span>#ORD-1023 Robert Brown</span><em class="pill"><?php esc_html_e( 'Fabric Cutting', 'lieusoft' ); ?></em></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="device-mock__phone">
					<div class="device-mock__phone-inner">
						<p class="device-mock__phone-title"><?php esc_html_e( 'New Order', 'lieusoft' ); ?></p>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Customer', 'lieusoft' ); ?></span><strong>John Doe</strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Item', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Suit', 'lieusoft' ); ?></strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Delivery', 'lieusoft' ); ?></span><strong>25 May</strong></div>
						<span class="device-mock__phone-btn"><?php esc_html_e( 'Add Order', 'lieusoft' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
