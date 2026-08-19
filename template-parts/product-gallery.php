<section class="gallery">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Beautiful Viewer Layouts', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Choose the perfect layout to match your website design.', 'lieusoft' ); ?></p>
		</div>

		<div class="gallery__grid">
			<figure class="gallery__item">
				<div class="viewer-mock viewer-mock--flipbook viewer-mock--sm">
					<div class="viewer-mock__toolbar viewer-mock__toolbar--sm">
						<?php echo lieusoft_icon( 'list' ); ?><span class="viewer-mock__spacer"></span><?php echo lieusoft_icon( 'expand' ); ?>
					</div>
					<div class="viewer-mock__book viewer-mock__book--sm">
						<div class="viewer-mock__page-left viewer-mock__page-left--sm">
							<strong><?php esc_html_e( 'Business Growth', 'lieusoft' ); ?></strong>
							<svg class="viewer-mock__mini-chart" viewBox="0 0 100 30" preserveAspectRatio="none" aria-hidden="true">
								<polyline points="0,25 20,18 40,22 60,8 80,14 100,4" fill="none" stroke="#2454F5" stroke-width="2.5"/>
							</svg>
						</div>
						<div class="viewer-mock__page-right viewer-mock__page-right--sm">
							<div class="viewer-mock__bars">
								<span style="height:40%"></span><span style="height:70%"></span><span style="height:55%"></span><span style="height:85%"></span>
							</div>
						</div>
					</div>
				</div>
				<figcaption><?php esc_html_e( 'Flipbook View', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="viewer-mock viewer-mock--sm">
					<div class="viewer-mock__toolbar viewer-mock__toolbar--sm">
						<?php echo lieusoft_icon( 'grid' ); ?><span class="viewer-mock__spacer"></span><?php echo lieusoft_icon( 'expand' ); ?>
					</div>
					<div class="viewer-mock__grid-pages">
						<?php for ( $i = 0; $i < 6; $i++ ) : ?>
							<span></span>
						<?php endfor; ?>
					</div>
				</div>
				<figcaption><?php esc_html_e( 'Grid View', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="viewer-mock viewer-mock--list viewer-mock--sm">
					<div class="viewer-mock__list-head">
						<span><?php esc_html_e( 'Title', 'lieusoft' ); ?></span><span><?php esc_html_e( 'Size', 'lieusoft' ); ?></span><span><?php esc_html_e( 'Pages', 'lieusoft' ); ?></span><span><?php esc_html_e( 'Action', 'lieusoft' ); ?></span>
					</div>
					<div class="viewer-mock__list-row"><span><?php esc_html_e( 'Annual Report 2024.pdf', 'lieusoft' ); ?></span><span>2.4 MB</span><span>28</span><?php echo lieusoft_icon( 'download' ); ?></div>
					<div class="viewer-mock__list-row"><span><?php esc_html_e( 'Company Profile.pdf', 'lieusoft' ); ?></span><span>1.8 MB</span><span>20</span><?php echo lieusoft_icon( 'download' ); ?></div>
					<div class="viewer-mock__list-row"><span><?php esc_html_e( 'Product Catalog.pdf', 'lieusoft' ); ?></span><span>3.2 MB</span><span>32</span><?php echo lieusoft_icon( 'download' ); ?></div>
					<div class="viewer-mock__list-row"><span><?php esc_html_e( 'Presentation Slides.pdf', 'lieusoft' ); ?></span><span>4.1 MB</span><span>45</span><?php echo lieusoft_icon( 'download' ); ?></div>
				</div>
				<figcaption><?php esc_html_e( 'List View', 'lieusoft' ); ?></figcaption>
			</figure>

			<figure class="gallery__item">
				<div class="viewer-mock viewer-mock--sm viewer-mock--fullscreen">
					<div class="viewer-mock__toolbar viewer-mock__toolbar--sm">
						<?php echo lieusoft_icon( 'list' ); ?><span class="viewer-mock__spacer"></span><?php echo lieusoft_icon( 'expand' ); ?>
					</div>
					<div class="viewer-mock__full-page">
						<strong><?php esc_html_e( 'Digital Transformation', 'lieusoft' ); ?></strong>
					</div>
				</div>
				<figcaption><?php esc_html_e( 'Full Screen View', 'lieusoft' ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>
