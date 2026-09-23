<?php
/**
 * Alternating image+text feature walkthrough (inspired by
 * wpbookingly.com/how-it-works/) — a numbered "sticky-note" badge, title
 * and description next to a real product screenshot, alternating sides
 * per step. Expects $args: eyebrow, title, desc, steps[] (num, title,
 * desc, image — filename in assets/images/).
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => '',
	'title'   => '',
	'desc'    => '',
	'steps'   => array(),
) );
?>
<section class="section feature-steps">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?>
				<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
			<?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<?php foreach ( $a['steps'] as $i => $step ) : ?>
			<div class="feature-step<?php echo ( 1 === $i % 2 ) ? ' feature-step--reverse' : ''; ?>">
				<div class="feature-step__media">
					<div class="feature-step__frame">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $step['image'] ) ); ?>" alt="<?php echo esc_attr( $step['title'] ); ?>">
					</div>
				</div>
				<div class="feature-step__content">
					<span class="feature-step__badge"><?php echo esc_html( $step['num'] ); ?></span>
					<h3><?php echo esc_html( $step['title'] ); ?></h3>
					<p><?php echo esc_html( $step['desc'] ); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
