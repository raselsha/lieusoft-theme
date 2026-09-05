<?php
/**
 * Reusable product-details hero — light, homepage-consistent style
 * (no dark mockup, no eyebrow pill). Expects $args: title, desc,
 * checklist[] (plain strings), screenshot_icon, screenshot_label.
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'            => '',
	'desc'             => '',
	'checklist'        => array(),
	'screenshot_icon'  => 'monitor',
	'screenshot_label' => __( 'Product Screenshot', 'lieusoft' ),
) );
?>
<section class="section product-hero">
	<div class="container" style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-5);align-items:center;">
		<div>
			<h1 style="font-size:2.6rem;margin-bottom:var(--space-2);"><?php echo esc_html( $a['title'] ); ?></h1>
			<p class="hero__lead" style="max-width:460px;"><?php echo esc_html( $a['desc'] ); ?></p>

			<ul class="check-list" style="margin-top:var(--space-2);">
				<?php foreach ( $a['checklist'] as $item ) : ?>
					<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--outline btn--lg" href="#"><?php esc_html_e( 'Live Demo', 'lieusoft' ); ?></a>
				<a class="btn btn--primary btn--lg" href="#pricing"><?php esc_html_e( 'Buy Now', 'lieusoft' ); ?></a>
			</div>
		</div>

		<div class="screenshot-card">
			<?php echo lieusoft_icon( $a['screenshot_icon'] ); ?>
			<span><?php echo esc_html( $a['screenshot_label'] ); ?></span>
		</div>
	</div>
</section>
