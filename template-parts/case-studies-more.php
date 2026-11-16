<?php
/**
 * "More Case Studies" — every other real client project as a static card
 * grid (same project-card markup as the marquee strip). Expects $args:
 * title, desc, items[] (name, category, desc, tags[], image, url) — items
 * default to lieusoft_get_projects().
 */
$a = wp_parse_args( $args ?? array(), array(
	'title' => __( 'More Case Studies', 'lieusoft' ),
	'desc'  => __( 'Real websites and systems we have built and launched for our clients.', 'lieusoft' ),
	'items' => lieusoft_get_projects(),
) );

if ( ! $a['items'] ) {
	return;
}
?>
<section class="section" style="background:var(--color-body-bg);">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<?php if ( $a['desc'] ) : ?><p><?php echo esc_html( $a['desc'] ); ?></p><?php endif; ?>
		</div>
		<div class="project-grid">
			<?php foreach ( $a['items'] as $item ) : ?>
				<article class="project-card">
					<a class="project-card__media" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener" tabindex="-1" aria-hidden="true">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $item['image'] ) ); ?>" alt="" loading="lazy" decoding="async">
					</a>
					<div class="project-card__body">
						<span class="project-card__category"><?php echo esc_html( $item['category'] ); ?></span>
						<h3 class="project-card__name"><?php echo esc_html( $item['name'] ); ?></h3>
						<p class="project-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
						<ul class="project-card__tags">
							<?php foreach ( $item['tags'] as $tag ) : ?>
								<li><?php echo esc_html( $tag ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="project-card__link" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Visit website', 'lieusoft' ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
