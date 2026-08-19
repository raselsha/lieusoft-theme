<?php
/**
 * Card grid for the 4 WordPress plugins. Expects $args: items[] (defaults
 * to lieusoft_get_plugins()), columns (grid column count). Shared by the
 * homepage section and the /products/ index page.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items'   => lieusoft_get_plugins(),
	'columns' => 4,
) );
?>
<div class="card-grid card-grid--<?php echo esc_attr( $a['columns'] ); ?>">
	<?php foreach ( $a['items'] as $plugin ) : ?>
		<article class="card card--plugin">
			<span class="plugin-icon plugin-icon--<?php echo esc_attr( $plugin['accent'] ); ?>">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $plugin['icon'] ) ); ?>" alt="">
			</span>
			<h3 class="card__title"><?php echo esc_html( $plugin['title'] ); ?></h3>
			<p class="card__desc"><?php echo esc_html( $plugin['desc'] ); ?></p>
			<div class="card__rating" aria-label="<?php esc_attr_e( 'Rated 5.0 out of 5 from 6 reviews', 'lieusoft' ); ?>">
				<?php echo str_repeat( lieusoft_icon( 'star', 'icon--star' ), 5 ); ?>
				<span>5.0 (6)</span>
			</div>
			<div class="card__actions">
				<a class="btn btn--sm btn--primary" href="#"><?php esc_html_e( 'Live Demo', 'lieusoft' ); ?></a>
				<a class="btn btn--sm btn--ghost" href="<?php echo esc_url( $plugin['url'] ?? '#' ); ?>"><?php esc_html_e( 'Details', 'lieusoft' ); ?></a>
			</div>
		</article>
	<?php endforeach; ?>
</div>
