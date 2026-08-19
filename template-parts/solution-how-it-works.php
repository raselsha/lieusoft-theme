<?php
/**
 * Reusable 4-step "How It Works" section.
 * Expects $args: eyebrow, title, desc, steps[] (title, desc, icon).
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => '',
	'title'   => '',
	'desc'    => '',
	'steps'   => array(),
) );
?>
<section class="how-it-works">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?>
				<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
			<?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="steps">
			<?php foreach ( $a['steps'] as $i => $step ) : ?>
				<div class="step">
					<span class="step__icon">
						<?php echo lieusoft_icon( $step['icon'] ); ?>
						<span class="step__number"><?php echo esc_html( $i + 1 ); ?></span>
					</span>
					<h3 class="step__title"><?php echo esc_html( $step['title'] ); ?></h3>
					<p class="step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
