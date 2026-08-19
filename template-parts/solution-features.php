<?php
/**
 * Reusable "N feature cards" section for any solution landing page.
 * Expects $args: eyebrow, title, desc, items[] (title, desc, icon).
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => '',
	'title'   => '',
	'desc'    => '',
	'items'   => array(),
) );
?>
<section class="clinic-features">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?>
				<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
			<?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="card-grid card-grid--6">
			<?php foreach ( $a['items'] as $feature ) : ?>
				<div class="feature feature--compact">
					<span class="icon-circle"><?php echo lieusoft_icon( $feature['icon'] ); ?></span>
					<h3 class="feature__title"><?php echo esc_html( $feature['title'] ); ?></h3>
					<p class="feature__desc"><?php echo esc_html( $feature['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
