<?php
/**
 * Reusable "screenshots" row — 4 simple placeholder cards in one line.
 * Expects $args: title, items[] (icon, label) — exactly 4.
 */
$a = wp_parse_args( $args ?? array(), array(
	'title' => __( 'See It In Action', 'lieusoft' ),
	'items' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
		</div>

		<div class="card-grid card-grid--4">
			<?php foreach ( $a['items'] as $item ) : ?>
				<figure class="screenshot-thumb">
					<div class="screenshot-thumb__frame"><?php echo lieusoft_icon( $item['icon'] ); ?></div>
					<figcaption><?php echo esc_html( $item['label'] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
