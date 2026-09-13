<?php
/**
 * "Technologies" — simple centered icon+label row. Expects $args: items[]
 * (label, icon).
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'Technologies', 'lieusoft' ); ?></h2>
		</div>
		<div class="tech-row">
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="tech-row__item">
					<span class="icon-circle"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<span><?php echo esc_html( $item['label'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
