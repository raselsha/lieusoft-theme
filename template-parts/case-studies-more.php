<?php
/**
 * "More Case Studies" — 3 equal cards. Expects $args: items[] (icon, title,
 * tags[], url).
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(),
) );
?>
<section class="section" style="background:var(--color-body-bg);">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'More Case Studies', 'lieusoft' ); ?></h2>
		</div>
		<div class="card-grid card-grid--3">
			<?php foreach ( $a['items'] as $item ) : ?>
				<article class="card">
					<span class="icon-circle icon-circle--white"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<h3 class="card__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<ul class="check-list check-list--stacked">
						<?php foreach ( $item['tags'] as $tag ) : ?>
							<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $tag ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="link-arrow" href="<?php echo esc_url( $item['url'] ); ?>">
						<?php esc_html_e( 'View Project', 'lieusoft' ); ?>
						<?php echo lieusoft_icon( 'arrow-right' ); ?>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
