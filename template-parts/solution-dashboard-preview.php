<?php
/**
 * "Dashboard Preview" — a large mock screenshot plus 4 labeled thumbnails.
 * Expects $args: desc, stats[] (value,label — reuses the hero's 4 stats),
 * thumbs[] (icon,label — 4 items).
 */
$a = wp_parse_args( $args ?? array(), array(
	'desc'   => '',
	'stats'  => array(),
	'thumbs' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<h2><?php esc_html_e( 'See Your Dashboard in Action', 'lieusoft' ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="dash-preview">
			<div class="dash-preview__bar">
				<span></span><span></span><span></span>
			</div>
			<div class="dash-preview__body">
				<div class="device-mock__stats">
					<?php foreach ( $a['stats'] as $stat ) : ?>
						<div><strong><?php echo esc_html( $stat['value'] ); ?></strong><span><?php echo esc_html( $stat['label'] ); ?></span></div>
					<?php endforeach; ?>
				</div>
				<div class="dash-preview__chart">
					<svg viewBox="0 0 600 120" preserveAspectRatio="none" aria-hidden="true">
						<polyline points="0,100 75,80 150,95 225,50 300,70 375,30 450,55 525,20 600,40" fill="none" stroke="var(--color-primary)" stroke-width="3"/>
					</svg>
				</div>
			</div>
		</div>

		<div class="card-grid card-grid--4" style="margin-top:var(--space-3);">
			<?php foreach ( $a['thumbs'] as $thumb ) : ?>
				<div class="dash-thumb">
					<span class="icon-circle"><?php echo lieusoft_icon( $thumb['icon'] ); ?></span>
					<span><?php echo esc_html( $thumb['label'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
