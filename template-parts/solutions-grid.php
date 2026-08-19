<?php
/**
 * Card grid for the 3 business solutions. Expects $args: items[] (defaults
 * to lieusoft_get_solutions()). Shared by the homepage section and the
 * /solutions/ index page.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => lieusoft_get_solutions(),
) );
?>
<div class="card-grid card-grid--3">
	<?php foreach ( $a['items'] as $solution ) : ?>
		<article class="solution-card">
			<div class="solution-card__media">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $solution['bg'] ) ); ?>" alt="">
				<span class="solution-card__badge solution-card__badge--<?php echo esc_attr( $solution['accent'] ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $solution['badge'] ) ); ?>" alt="">
				</span>
			</div>
			<div class="solution-card__body">
				<h3 class="card__title"><?php echo esc_html( $solution['title'] ); ?></h3>
				<p class="card__desc"><?php echo esc_html( $solution['desc'] ); ?></p>
				<ul class="card__tags card__tags--<?php echo esc_attr( $solution['accent'] ); ?>">
					<?php foreach ( $solution['tags'] as $tag ) : ?>
						<li><?php echo esc_html( $tag ); ?></li>
					<?php endforeach; ?>
				</ul>
				<a class="link-arrow" href="<?php echo esc_url( $solution['url'] ?? '#solutions' ); ?>">
					<?php esc_html_e( 'View Solutions', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
			</div>
		</article>
	<?php endforeach; ?>
</div>
