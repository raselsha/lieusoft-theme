<?php
/**
 * "Projects We've Delivered" — real client sites as cards (screenshot,
 * type, what we built, live link) in an endless one-row marquee driven by
 * theme.js ([data-marquee]). Expects $args: eyebrow, title, desc,
 * items[] (name, category, desc, tags[], image, url) — all optional,
 * items default to lieusoft_get_projects().
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => __( 'Our Work', 'lieusoft' ),
	'title'   => __( "Projects We've Delivered", 'lieusoft' ),
	'desc'    => __( 'Real websites and systems we have built and launched for our clients.', 'lieusoft' ),
	'items'   => lieusoft_get_projects(),
) );

if ( ! $a['items'] ) {
	return;
}

// Repeat until one loop is at least ~3000px wide so the strip never runs
// out on wide screens.
$row = $a['items'];
while ( count( $row ) < 8 ) {
	$row = array_merge( $row, $a['items'] );
}
?>
<section class="section projects-strip">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?><span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span><?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<?php if ( $a['desc'] ) : ?><p><?php echo esc_html( $a['desc'] ); ?></p><?php endif; ?>
		</div>
	</div>

	<div class="marquee" data-marquee>
		<div class="marquee__track">
			<?php for ( $copy = 0; $copy < 2; $copy++ ) : // Second copy makes the loop seamless. ?>
				<?php foreach ( $row as $i => $item ) : ?>
					<article class="project-card"<?php echo ( $copy || $i >= count( $a['items'] ) ) ? ' aria-hidden="true"' : ''; ?>>
						<a class="project-card__media" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener" tabindex="-1">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $item['image'] ) ); ?>" alt="<?php echo esc_attr( sprintf( __( '%s website', 'lieusoft' ), $item['name'] ) ); ?>" loading="lazy">
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
			<?php endfor; ?>
		</div>
	</div>
</section>
