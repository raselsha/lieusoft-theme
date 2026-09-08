<?php
/**
 * "Recent Projects" — 3 project/case-study cards.
 * Expects $args: items[] (title, desc, image [filename in assets/images/ or empty], icon [fallback]).
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Portfolio', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Recent Projects', 'lieusoft' ); ?></h2>
		</div>
		<div class="card-grid card-grid--3">
			<?php foreach ( $a['items'] as $item ) :
				$image_path = ! empty( $item['image'] ) ? get_theme_file_path( '/assets/images/' . $item['image'] ) : '';
				$has_image  = $image_path && file_exists( $image_path );
				?>
				<article class="card project-card">
					<div class="project-card__media">
						<?php if ( $has_image ) : ?>
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $item['image'] ) ); ?>" alt="">
						<?php else : ?>
							<?php echo lieusoft_icon( $item['icon'] ?? 'monitor' ); ?>
						<?php endif; ?>
					</div>
					<div class="project-card__body">
						<span class="eyebrow" style="font-size:0.7rem;"><?php esc_html_e( 'Case Study', 'lieusoft' ); ?></span>
						<h3 class="card__title"><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
