<section class="section">
	<div class="container" style="display:grid;grid-template-columns:1.05fr 1fr;gap:var(--space-5);align-items:center;">
		<div>
			<h1 style="margin-bottom:var(--space-2);"><?php esc_html_e( 'Professional WordPress Services', 'lieusoft' ); ?></h1>
			<p class="hero__lead" style="max-width:460px;"><?php esc_html_e( 'Complete solutions for businesses of all sizes.', 'lieusoft' ); ?></p>

			<div class="services-tagline">
				<span><?php esc_html_e( 'Website Development', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Domain', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Managed Hosting', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Custom Plugin Development', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Maintenance', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Technical Support', 'lieusoft' ); ?></span>
			</div>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#book-consultation"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
				<a class="btn btn--outline btn--lg" href="#services"><?php esc_html_e( 'Our Services', 'lieusoft' ); ?></a>
			</div>
		</div>

		<div class="services-hero-art">
			<div class="services-hero-art__frame">
				<svg width="100%" height="100%" viewBox="0 0 220 150" fill="none">
					<rect x="30" y="10" width="160" height="100" rx="6" stroke="var(--color-ink)" stroke-width="2.5"/>
					<rect x="42" y="22" width="136" height="76" rx="2" fill="var(--color-blue-light)"/>
					<path d="M10 130h200l-14 14H24l-14-14Z" stroke="var(--color-ink)" stroke-width="2.5" stroke-linejoin="round"/>
					<path d="M90 40h60M90 55h40M90 70h50" stroke="var(--color-primary)" stroke-width="3" stroke-linecap="round"/>
				</svg>
			</div>
			<span class="services-hero-art__badge" style="left:-18px;top:6px;color:var(--color-primary);"><?php echo lieusoft_icon( 'globe' ); ?></span>
			<span class="services-hero-art__badge" style="right:-18px;top:26px;color:var(--color-green);"><?php echo lieusoft_icon( 'cloud' ); ?></span>
			<span class="services-hero-art__badge" style="left:10px;bottom:-16px;color:var(--color-orange);"><?php echo lieusoft_icon( 'envelope' ); ?></span>
			<span class="services-hero-art__badge" style="right:24px;bottom:-20px;color:var(--color-purple);"><?php echo lieusoft_icon( 'server' ); ?></span>
		</div>
	</div>
</section>
