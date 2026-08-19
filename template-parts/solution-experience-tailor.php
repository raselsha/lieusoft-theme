<section class="experience">
	<div class="container experience__grid">
		<div class="experience__media">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/solution-tailor-bg.png' ) ); ?>" alt="<?php esc_attr_e( 'Tailor at work in the shop', 'lieusoft' ); ?>">

			<div class="floating-card floating-card--chart">
				<span class="floating-card__label"><?php esc_html_e( 'Monthly Sales', 'lieusoft' ); ?></span>
				<span class="floating-card__number">৳ 85,450</span>
				<span class="floating-card__delta">+10% <?php esc_html_e( 'from last month', 'lieusoft' ); ?></span>
				<div class="floating-card__bars">
					<span style="height:30%"></span>
					<span style="height:45%"></span>
					<span style="height:38%"></span>
					<span style="height:60%"></span>
					<span style="height:75%"></span>
					<span style="height:95%"></span>
				</div>
			</div>
		</div>

		<div class="experience__content">
			<span class="eyebrow"><?php esc_html_e( 'Better Business, Better Growth', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Save Time & Grow Your Tailor Business', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Our solution helps you manage your shop efficiently, reduce errors and provide a better experience to your customers.', 'lieusoft' ); ?></p>

			<ul class="check-list check-list--stacked">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Keep all orders and measurements organized', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reduce manual work and avoid mistakes', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Fast billing and easy payment tracking', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Customer history at your fingertips', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Make better decisions with business reports', 'lieusoft' ); ?></li>
			</ul>
		</div>
	</div>
</section>
