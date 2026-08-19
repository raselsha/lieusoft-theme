<section class="sol-hero product-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow-pill"><?php esc_html_e( 'WordPress Plugin', 'lieusoft' ); ?></span>
			<h1 class="hero__title hero__title--product"><?php esc_html_e( 'PDF Embed Viewer', 'lieusoft' ); ?></h1>
			<p class="hero__tagline"><?php esc_html_e( 'Display PDF Documents Beautifully on Your Website', 'lieusoft' ); ?></p>
			<p class="hero__lead">
				<?php esc_html_e( 'A powerful WordPress plugin to embed PDF files in flipbook, grid, list or full-screen viewer with a modern and responsive interface.', 'lieusoft' ); ?>
			</p>

			<ul class="check-list check-list--grid">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Flipbook View', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Grid & List View', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Shortcode Generator', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Elementor Support', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Fully Responsive', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Lightweight & Fast', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#">
					<?php esc_html_e( 'Live Demo', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#">
					<?php esc_html_e( 'View Documentation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'file-text' ); ?>
				</a>
			</div>
		</div>

		<div class="hero__media">
			<!-- CSS-built placeholder viewer mockup — see solution-hero.php's note. -->
			<div class="viewer-mock viewer-mock--flipbook viewer-mock--lg">
				<div class="viewer-mock__toolbar">
					<?php echo lieusoft_icon( 'list' ); ?>
					<span class="viewer-mock__page">12 / 28</span>
					<span class="viewer-mock__spacer"></span>
					<?php echo lieusoft_icon( 'search' ); ?>
					<?php echo lieusoft_icon( 'smartphone' ); ?>
					<?php echo lieusoft_icon( 'expand' ); ?>
				</div>
				<div class="viewer-mock__body">
					<div class="viewer-mock__rail">
						<span></span><span></span><span class="is-active"></span><span></span>
					</div>
					<div class="viewer-mock__book">
						<div class="viewer-mock__page-left">
							<strong><?php esc_html_e( 'Business Growth', 'lieusoft' ); ?></strong>
							<em><?php esc_html_e( 'Strategy & Planning', 'lieusoft' ); ?></em>
							<span class="viewer-mock__line"></span>
							<span class="viewer-mock__line"></span>
							<span class="viewer-mock__line short"></span>
							<svg class="viewer-mock__mini-chart" viewBox="0 0 100 30" preserveAspectRatio="none" aria-hidden="true">
								<polyline points="0,25 20,18 40,22 60,8 80,14 100,4" fill="none" stroke="#2454F5" stroke-width="2.5"/>
							</svg>
						</div>
						<div class="viewer-mock__page-right">
							<div class="viewer-mock__bars">
								<span style="height:30%"></span><span style="height:55%"></span><span style="height:40%"></span>
								<span style="height:70%"></span><span style="height:50%"></span><span style="height:85%"></span>
								<span style="height:65%"></span>
							</div>
						</div>
					</div>
				</div>
				<span class="viewer-mock__badge"><?php echo lieusoft_icon( 'book-open' ); ?><?php esc_html_e( 'Flipbook View', 'lieusoft' ); ?></span>
			</div>
		</div>
	</div>
</section>
