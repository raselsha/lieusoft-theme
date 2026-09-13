<?php
/**
 * Case Studies page hero — laptop mockup with 3 real project thumbnails.
 */
?>
<section class="section case-studies-hero">
	<div class="container" style="display:grid;grid-template-columns:1.05fr 1fr;gap:var(--space-5);align-items:center;">
		<div>
			<h1 style="margin-bottom:var(--space-2);"><?php esc_html_e( 'Case Studies', 'lieusoft' ); ?></h1>
			<p class="hero__lead" style="max-width:480px;"><?php esc_html_e( "Real business websites we've built for our clients.", 'lieusoft' ); ?></p>
			<p style="max-width:480px;color:var(--color-secondary);margin-bottom:var(--space-3);">
				<?php esc_html_e( 'Discover how we help businesses launch professional websites with custom solutions, managed hosting, and ongoing support.', 'lieusoft' ); ?>
			</p>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="https://wa.me/8801737266685" target="_blank" rel="noopener"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
				<a class="btn btn--outline btn--lg" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'View Solutions', 'lieusoft' ); ?></a>
			</div>
		</div>

		<div class="services-hero-art">
			<div class="services-hero-art__frame">
				<svg width="100%" height="100%" viewBox="0 0 220 150" fill="none">
					<rect x="30" y="10" width="160" height="100" rx="6" stroke="var(--color-ink)" stroke-width="2.5"/>
					<rect x="42" y="22" width="136" height="76" rx="2" fill="var(--color-blue-light)"/>
					<path d="M10 130h200l-14 14H24l-14-14Z" stroke="var(--color-ink)" stroke-width="2.5" stroke-linejoin="round"/>
				</svg>
			</div>
			<span class="services-hero-art__badge services-hero-art__badge--thumb" style="left:-24px;top:0;">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/case-study-preview.png' ) ); ?>" alt="<?php esc_attr_e( 'CozyThai', 'lieusoft' ); ?>">
			</span>
			<span class="services-hero-art__badge services-hero-art__badge--thumb" style="right:-24px;top:24px;">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/solution-doctor-bg.png' ) ); ?>" alt="<?php esc_attr_e( 'Doctor Website', 'lieusoft' ); ?>">
			</span>
			<span class="services-hero-art__badge services-hero-art__badge--thumb" style="left:20px;bottom:-24px;">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/solution-tailor-bg.png' ) ); ?>" alt="<?php esc_attr_e( 'Tailor Website', 'lieusoft' ); ?>">
			</span>
		</div>
	</div>
</section>
