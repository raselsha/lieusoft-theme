<?php
/**
 * Featured Case Study — 60/40 layout with a large screenshot and full project
 * details. Expects $args: image, title, client, industry, location, duration,
 * overview, delivered[] (plain strings), visit_url, solution_url.
 */
$a = wp_parse_args( $args ?? array(), array(
	'image'       => '',
	'title'       => '',
	'client'      => '',
	'industry'    => '',
	'location'    => '',
	'duration'    => '',
	'overview'    => '',
	'delivered'   => array(),
	'visit_url'   => '',
	'solution_url' => '',
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Featured Case Study', 'lieusoft' ); ?></span>
		</div>

		<div class="case-studies-featured__grid" style="display:grid;grid-template-columns:1.2fr 1fr;gap:var(--space-5);align-items:start;">
			<div class="project-card" style="border-radius:var(--radius-lg);">
				<div class="project-card__media" style="aspect-ratio:16/11;">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $a['image'] ) ); ?>" alt="<?php echo esc_attr( $a['title'] ); ?>">
				</div>
			</div>

			<div>
				<h3 style="margin-bottom:var(--space-3);"><?php echo esc_html( $a['title'] ); ?></h3>

				<div class="case-study-meta">
					<div>
						<span class="case-study-meta__label"><?php esc_html_e( 'Client', 'lieusoft' ); ?></span>
						<span class="case-study-meta__value"><?php echo esc_html( $a['client'] ); ?></span>
					</div>
					<div>
						<span class="case-study-meta__label"><?php esc_html_e( 'Industry', 'lieusoft' ); ?></span>
						<span class="case-study-meta__value"><?php echo esc_html( $a['industry'] ); ?></span>
					</div>
					<div>
						<span class="case-study-meta__label"><?php esc_html_e( 'Location', 'lieusoft' ); ?></span>
						<span class="case-study-meta__value"><?php echo esc_html( $a['location'] ); ?></span>
					</div>
					<div>
						<span class="case-study-meta__label"><?php esc_html_e( 'Duration', 'lieusoft' ); ?></span>
						<span class="case-study-meta__value"><?php echo esc_html( $a['duration'] ); ?></span>
					</div>
				</div>

				<h4 style="margin-bottom:6px;"><?php esc_html_e( 'Project Overview', 'lieusoft' ); ?></h4>
				<p class="card__desc" style="margin-bottom:var(--space-3);"><?php echo esc_html( $a['overview'] ); ?></p>

				<h4 style="margin-bottom:var(--space-2);"><?php esc_html_e( 'What We Delivered', 'lieusoft' ); ?></h4>
				<ul class="check-list check-list--grid" style="margin-bottom:var(--space-3);">
					<?php foreach ( $a['delivered'] as $item ) : ?>
						<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>

				<div class="hero__actions">
					<a class="btn btn--primary" href="<?php echo esc_url( $a['visit_url'] ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Visit Website', 'lieusoft' ); ?></a>
					<a class="btn btn--outline" href="<?php echo esc_url( $a['solution_url'] ); ?>"><?php esc_html_e( 'View Solution', 'lieusoft' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
