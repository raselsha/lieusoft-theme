<?php
/**
 * Case Studies page hero — three real client sites as overlapping browser
 * windows, plus a projects-delivered badge.
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
				<a class="btn btn--primary btn--lg" href="https://wa.me/8801521255463" target="_blank" rel="noopener"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
				<a class="btn btn--outline btn--lg" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'View Solutions', 'lieusoft' ); ?></a>
			</div>
		</div>

		<?php
		$lieusoft_cs_windows = array(
			array( 'mod' => 'back', 'name' => 'KnowledgeHut', 'domain' => 'knowledgehut.org.uk', 'image' => 'project-knowledgehut.jpg' ),
			array( 'mod' => 'main', 'name' => 'CozyThai', 'domain' => 'cozythai.pt', 'image' => 'project-cozythai.jpg' ),
			array( 'mod' => 'front', 'name' => 'Shafiul Amraz', 'domain' => 'shafiulamraz.com', 'image' => 'project-shafiulamraz.jpg' ),
		);
		?>
		<div class="cs-hero-stack">
			<?php foreach ( $lieusoft_cs_windows as $win ) : ?>
				<figure class="cs-hero-stack__window cs-hero-stack__window--<?php echo esc_attr( $win['mod'] ); ?>">
					<div class="cs-hero-stack__bar" aria-hidden="true"><i></i><i></i><i></i><span><?php echo esc_html( $win['domain'] ); ?></span></div>
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $win['image'] ) ); ?>" width="800" height="500" alt="<?php echo esc_attr( sprintf( __( '%s website', 'lieusoft' ), $win['name'] ) ); ?>"<?php echo 'main' === $win['mod'] ? ' fetchpriority="high"' : ' decoding="async"'; ?>>
				</figure>
			<?php endforeach; ?>
			<div class="cs-hero-stack__badge">
				<span class="cs-hero-stack__badge-icon"><?php echo lieusoft_icon( 'check-circle' ); ?></span>
				<span>
					<strong><?php echo esc_html( sprintf( __( '%s websites launched', 'lieusoft' ), number_format_i18n( count( lieusoft_get_projects() ) ) ) ); ?></strong>
					<?php esc_html_e( 'Clients in 6 countries', 'lieusoft' ); ?>
				</span>
			</div>
		</div>
		</div>
	</div>
</section>
