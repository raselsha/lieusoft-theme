<?php
/**
 * "Professional Services" — quote-based cards, each with its own
 * Request Quote action (no price shown — every service is scoped first).
 * Expects $args: items[] (title, icon), btn_href.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items'    => array(),
	'btn_href' => '#book-consultation',
) );
?>
<section class="section section--gray">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Professional Services', 'lieusoft' ); ?></span>
			<h2 style="margin-top:8px;"><?php esc_html_e( 'À la Carte Services', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Need just one piece of the puzzle? We handle these individually too.', 'lieusoft' ); ?></p>
		</div>
		<div class="card-grid card-grid--3">
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="card pricing-service-card">
					<span class="icon-circle"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<h3 class="card__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<span class="pricing-service-card__label"><?php esc_html_e( 'Starting From', 'lieusoft' ); ?></span>
					<a class="link-arrow" href="<?php echo esc_url( $a['btn_href'] ); ?>">
						<?php esc_html_e( 'Request Quote', 'lieusoft' ); ?>
						<?php echo lieusoft_icon( 'arrow-right' ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
