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
			<div class="hero-sim-window" data-hero-sim>
				<div class="hero-sim-window__bar">
					<span class="hiw-widget__dot" style="background:#FF5F57"></span>
					<span class="hiw-widget__dot" style="background:#FEBC2E"></span>
					<span class="hiw-widget__dot" style="background:#28C840"></span>
					<span class="hero-sim-window__title" data-sim-title><?php esc_html_e( 'New Order', 'lieusoft' ); ?></span>
				</div>

				<div class="hero-sim-window__body">

					<!-- Scene 1: pick the customer and what they're ordering -->
					<div class="hero-sim__scene is-active" data-scene="order" data-title="<?php esc_attr_e( 'New Order', 'lieusoft' ); ?>">
						<div class="sim-profile">
							<span class="sim-profile__avatar">R</span>
							<span class="sim-profile__text"><strong>Rahim Uddin</strong><small><?php esc_html_e( '01XXXXXXXXX · Customer since 2023', 'lieusoft' ); ?></small></span>
							<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( '12 orders', 'lieusoft' ); ?></span>
						</div>
						<span class="hiw-modal__label"><?php esc_html_e( 'Item', 'lieusoft' ); ?></span>
						<div class="sim-chips">
							<span><?php esc_html_e( 'Shirt', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Pant', 'lieusoft' ); ?></span>
							<span class="is-active"><?php esc_html_e( 'Panjabi', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Suit', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Sherwani', 'lieusoft' ); ?></span>
							<span><?php esc_html_e( 'Blazer', 'lieusoft' ); ?></span>
						</div>
						<div class="hiw-form">
							<div class="hiw-form__row">
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Quantity', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">2</span>
								</div>
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Fabric', 'lieusoft' ); ?></span>
									<span class="hiw-form__value"><?php esc_html_e( 'Cotton · 5 m', 'lieusoft' ); ?></span>
								</div>
							</div>
							<div class="hiw-form__row">
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Trial Date', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">Nov 2, 2026</span>
								</div>
								<div class="hiw-form__field">
									<span class="hiw-form__label"><?php esc_html_e( 'Delivery Date', 'lieusoft' ); ?></span>
									<span class="hiw-form__value">Nov 5, 2026</span>
								</div>
							</div>
						</div>
						<span class="btn btn--primary hiw-form__submit" style="position:relative;"><?php esc_html_e( 'Next: Measurements', 'lieusoft' ); ?><span class="hero-sim__cursor" style="right:24px;top:50%;margin-top:-8px;"></span></span>
					</div>

					<!-- Scene 2: measurements (pre-filled from the last order) -->
					<div class="hero-sim__scene" data-scene="measure" data-title="<?php esc_attr_e( 'Measurements', 'lieusoft' ); ?>">
						<div class="hiw-selected-slot">
							<div><span><?php esc_html_e( 'Panjabi · Rahim Uddin', 'lieusoft' ); ?></span><strong><?php esc_html_e( 'Measurements in inches', 'lieusoft' ); ?></strong></div>
							<span class="hiw-modal__link"><?php esc_html_e( 'Edit', 'lieusoft' ); ?></span>
						</div>
						<div class="sim-measure">
							<div><span><?php esc_html_e( 'Length', 'lieusoft' ); ?></span><strong>42</strong></div>
							<div><span><?php esc_html_e( 'Chest', 'lieusoft' ); ?></span><strong>40</strong></div>
							<div><span><?php esc_html_e( 'Waist', 'lieusoft' ); ?></span><strong>36</strong></div>
							<div><span><?php esc_html_e( 'Hip', 'lieusoft' ); ?></span><strong>41</strong></div>
							<div><span><?php esc_html_e( 'Shoulder', 'lieusoft' ); ?></span><strong>18</strong></div>
							<div class="is-active" style="position:relative;"><span><?php esc_html_e( 'Sleeve', 'lieusoft' ); ?></span><strong>24.5</strong><span class="hero-sim__cursor" style="right:40px;top:50%;margin-top:-8px;"></span></div>
							<div><span><?php esc_html_e( 'Collar', 'lieusoft' ); ?></span><strong>15.5</strong></div>
							<div><span><?php esc_html_e( 'Cuff', 'lieusoft' ); ?></span><strong>10</strong></div>
							<div><span><?php esc_html_e( 'Armhole', 'lieusoft' ); ?></span><strong>19</strong></div>
							<div><span><?php esc_html_e( 'Neck Depth', 'lieusoft' ); ?></span><strong>8</strong></div>
						</div>
						<div class="hiw-form" style="margin-top:12px;">
							<div class="hiw-form__field">
								<span class="hiw-form__label"><?php esc_html_e( 'Design Note', 'lieusoft' ); ?></span>
								<span class="hiw-form__value"><?php esc_html_e( 'Chinese collar, 2 side pockets', 'lieusoft' ); ?></span>
							</div>
						</div>
						<span class="sim-note"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Loaded from his last order — just update what changed.', 'lieusoft' ); ?></span>
					</div>

					<!-- Scene 3: invoice with advance payment -->
					<div class="hero-sim__scene" data-scene="invoice" data-title="<?php esc_attr_e( 'Invoice', 'lieusoft' ); ?>">
						<div class="hiw-selected-slot">
							<div><span><?php esc_html_e( 'Invoice', 'lieusoft' ); ?> #ORD-1026</span><strong><?php esc_html_e( 'Rahim Uddin · Delivery Nov 5', 'lieusoft' ); ?></strong></div>
							<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Partly Paid', 'lieusoft' ); ?></span>
						</div>
						<div class="sim-lines">
							<div><span><?php esc_html_e( 'Panjabi stitching', 'lieusoft' ); ?><small>&times; 2</small></span><strong>&#2547;2,400</strong></div>
							<div><span><?php esc_html_e( 'Cotton fabric', 'lieusoft' ); ?><small>5 m</small></span><strong>&#2547;1,500</strong></div>
							<div><span><?php esc_html_e( 'Collar embroidery', 'lieusoft' ); ?></span><strong>&#2547;600</strong></div>
							<div><span><?php esc_html_e( 'Discount', 'lieusoft' ); ?></span><strong>&minus;&#2547;200</strong></div>
							<div class="sim-lines__total"><span><?php esc_html_e( 'Total', 'lieusoft' ); ?></span><strong>&#2547;4,300</strong></div>
							<div class="sim-lines__paid"><span><?php esc_html_e( 'Advance paid', 'lieusoft' ); ?></span><strong>&#2547;2,000</strong></div>
							<div class="sim-lines__due"><span><?php esc_html_e( 'Due on delivery', 'lieusoft' ); ?></span><strong>&#2547;2,300</strong></div>
						</div>
						<span class="btn btn--primary hiw-form__submit" style="position:relative;"><?php esc_html_e( 'Save & Print Receipt', 'lieusoft' ); ?><span class="hero-sim__cursor" style="right:24px;top:50%;margin-top:-8px;"></span></span>
					</div>

					<!-- Scene 4: order moves through the workshop -->
					<div class="hero-sim__scene" data-scene="status" data-title="<?php esc_attr_e( 'Order Status', 'lieusoft' ); ?>">
						<div class="sim-profile">
							<span class="sim-profile__avatar"><?php echo lieusoft_icon( 'shirt' ); ?></span>
							<span class="sim-profile__text"><strong>#ORD-1026 &middot; <?php esc_html_e( 'Panjabi × 2', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Rahim Uddin · Delivery Nov 5, 2026', 'lieusoft' ); ?></small></span>
						</div>
						<div class="sim-timeline">
							<div class="sim-timeline__step is-done"><span class="sim-timeline__dot"><?php echo lieusoft_icon( 'check-circle' ); ?></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Order Received', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Oct 28 · advance ৳2,000 paid', 'lieusoft' ); ?></small></span></div>
							<div class="sim-timeline__step is-done"><span class="sim-timeline__dot"><?php echo lieusoft_icon( 'check-circle' ); ?></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Fabric Cutting', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Oct 29 · Karim (cutter)', 'lieusoft' ); ?></small></span></div>
							<div class="sim-timeline__step is-current"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Stitching', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'In progress · Jamal (tailor)', 'lieusoft' ); ?></small></span></div>
							<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Trial', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Nov 2', 'lieusoft' ); ?></small></span></div>
							<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Ready for Delivery', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Customer gets an SMS', 'lieusoft' ); ?></small></span></div>
							<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Delivered & Paid', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Nov 5 · due ৳2,300', 'lieusoft' ); ?></small></span></div>
						</div>
					</div>

					<!-- Scene 5: the shop's admin dashboard -->
					<div class="hero-sim__scene" data-scene="dashboard" data-title="<?php esc_attr_e( 'Shop Dashboard', 'lieusoft' ); ?>">
						<div class="hero-sim__dash">
							<div class="hero-sim__dash-side">
								<span class="is-active"><?php echo lieusoft_icon( 'clipboard' ); ?></span>
								<span><?php echo lieusoft_icon( 'users' ); ?></span>
								<span><?php echo lieusoft_icon( 'ruler' ); ?></span>
								<span><?php echo lieusoft_icon( 'bar-chart' ); ?></span>
							</div>
							<div class="hero-sim__dash-main">
								<div class="hero-sim__dash-head">
									<strong><?php esc_html_e( 'Orders', 'lieusoft' ); ?></strong>
									<span><?php esc_html_e( 'Wed, Oct 28, 2026', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-stats">
									<div><?php echo lieusoft_icon( 'clipboard' ); ?><strong>28</strong><span><?php esc_html_e( 'Orders in Progress', 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'truck' ); ?><strong>6</strong><span><?php esc_html_e( "Today's Deliveries", 'lieusoft' ); ?></span></div>
									<div><?php echo lieusoft_icon( 'credit-card' ); ?><strong>&#2547;38,500</strong><span><?php esc_html_e( 'Total Due', 'lieusoft' ); ?></span></div>
								</div>
								<h5><?php esc_html_e( 'Recent Orders', 'lieusoft' ); ?></h5>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">K</span>
									<strong>Kamal Hossain</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Suit', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Ready', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">S</span>
									<strong>Selim Reza</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Shirt × 3', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--blue"><?php esc_html_e( 'Stitching', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">A</span>
									<strong>Arif Hasan</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Sherwani', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Trial', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row">
									<span class="hiw-admin__avatar">N</span>
									<strong>Nayeem Khan</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Pant × 2', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--gray"><?php esc_html_e( 'Cutting', 'lieusoft' ); ?></span>
								</div>
								<div class="hero-sim__dash-row hiw-admin__row--new" data-sim-new-row>
									<span class="hiw-admin__avatar">R</span>
									<strong>Rahim Uddin</strong>
									<span class="hero-sim__dash-tag"><?php esc_html_e( 'Panjabi × 2', 'lieusoft' ); ?></span>
									<span class="hiw-admin__status hiw-admin__status--blue"><?php esc_html_e( 'Stitching', 'lieusoft' ); ?></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="hero-sim-progress" data-hero-sim-progress>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
				<span class="hero-sim-progress__seg"><span class="hero-sim-progress__fill"></span></span>
			</div>
		</div>
	</div>
</section>
