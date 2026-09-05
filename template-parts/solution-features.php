<?php
/**
 * Reusable "N feature cards" section for any solution/product landing page.
 * Expects $args: eyebrow, title, desc, items[] (title, icon, desc optional),
 * columns (grid column count, default 4).
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => '',
	'title'   => '',
	'desc'    => '',
	'items'   => array(),
	'columns' => 4,
) );
?>
<section class="clinic-features">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?>
				<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
			<?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<?php if ( $a['desc'] ) : ?>
				<p><?php echo esc_html( $a['desc'] ); ?></p>
			<?php endif; ?>
		</div>

		<div class="card-grid card-grid--<?php echo esc_attr( $a['columns'] ); ?>">
			<?php foreach ( $a['items'] as $feature ) : ?>
				<div class="feature feature--compact">
					<span class="icon-circle"><?php echo lieusoft_icon( $feature['icon'] ); ?></span>
					<h3 class="feature__title"><?php echo esc_html( $feature['title'] ); ?></h3>
					<?php if ( ! empty( $feature['desc'] ) ) : ?>
						<p class="feature__desc"><?php echo esc_html( $feature['desc'] ); ?></p>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
