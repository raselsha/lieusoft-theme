<section class="sol-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php esc_html_e( 'Tailor Shop Solution', 'lieusoft' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Complete Tailor Shop Management', 'lieusoft' ); ?>
				<span class="text-primary"><?php esc_html_e( 'Solution', 'lieusoft' ); ?></span>
			</h1>
			<p class="hero__lead">
				<?php esc_html_e( 'Manage orders, measurements, delivery schedules, invoices and customers easily. A complete solution to run your tailor shop professionally and grow your business.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list check-list--grid">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Order Management', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Measurements', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Invoices', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Delivery Tracking', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Customer Database', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reports & Analytics', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#">
					<?php esc_html_e( 'View Live Demo', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Free Consultation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'calendar' ); ?>
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
								<div><strong>1250</strong><span><?php esc_html_e( 'Total Orders', 'lieusoft' ); ?></span></div>
								<div><strong>48</strong><span><?php esc_html_e( 'Pending Orders', 'lieusoft' ); ?></span></div>
								<div><strong>1050</strong><span><?php esc_html_e( 'Completed Orders', 'lieusoft' ); ?></span></div>
								<div><strong>850</strong><span><?php esc_html_e( 'Total Customers', 'lieusoft' ); ?></span></div>
							</div>

							<div class="device-mock__columns">
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Recent Orders', 'lieusoft' ); ?></p>
									<div class="device-mock__table">
										<div class="device-mock__table-row"><span>John Doe</span><em class="pill"><?php esc_html_e( 'Pending', 'lieusoft' ); ?></em><em>$2,450</em></div>
										<div class="device-mock__table-row"><span>Robert Brown</span><em class="pill"><?php esc_html_e( 'In Progress', 'lieusoft' ); ?></em><em>$3,700</em></div>
										<div class="device-mock__table-row"><span>Michael Smith</span><em class="pill"><?php esc_html_e( 'Completed', 'lieusoft' ); ?></em><em>$1,950</em></div>
									</div>
								</div>
								<div>
									<p class="device-mock__chart-title"><?php esc_html_e( 'Sales Overview', 'lieusoft' ); ?></p>
									<svg class="device-mock__chart" viewBox="0 0 130 70" preserveAspectRatio="none" aria-hidden="true">
										<polyline points="0,55 22,45 44,50 66,30 88,38 110,15 130,25" fill="none" stroke="#FB811B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="device-mock__phone">
					<div class="device-mock__phone-inner">
						<p class="device-mock__phone-title"><?php esc_html_e( 'Order Details', 'lieusoft' ); ?></p>
						<div class="device-mock__phone-field"><span>#ORD-1250</span><strong><?php esc_html_e( 'Pending', 'lieusoft' ); ?></strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Customer', 'lieusoft' ); ?></span><strong>John Doe</strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Delivery', 'lieusoft' ); ?></span><strong>25 May</strong></div>
						<div class="device-mock__phone-field"><span><?php esc_html_e( 'Items', 'lieusoft' ); ?></span><strong>3</strong></div>
						<span class="device-mock__phone-btn"><?php esc_html_e( 'View Details', 'lieusoft' ); ?></span>
					</div>
				</div>

				<?php echo lieusoft_icon( 'briefcase', 'device-mock__plant' ); ?>
			</div>
		</div>
	</div>
</section>
