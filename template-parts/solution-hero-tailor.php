<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php echo lieusoft_icon( 'shirt' ); ?> <?php esc_html_e( 'Tailor Management Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Tailor Shop Website &', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Order Management System', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'We build a complete tailor shop website with online order tracking, measurement records, delivery management, hosting and support.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Website', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Domain', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Hosting', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Order System', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="https://tailor.lieusoft.com/" target="_blank" rel="noopener">
					<?php esc_html_e( 'Live Demo', 'lieusoft' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<!-- CSS-built placeholder device mockup — see note in template-parts/product-hero.php. -->
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
							<span><?php echo lieusoft_icon( 'file-text' ); ?></span>
							<span><?php echo lieusoft_icon( 'truck' ); ?></span>
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
									<svg class="device-mock__chart" viewBox="0 0 130 70" preserveAspectRatio="none" aria-hidden="true">
										<polyline points="0,55 22,45 44,50 66,30 88,38 110,15 130,25" fill="none" stroke="#FB811B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
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
