<?php
/**
 * "Complete Business Solutions" — a simple table (no fixed prices, every
 * solution is custom-quoted) plus a single CTA. Expects $args: items[]
 * (name), btn_text, btn_href.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items'    => array(),
	'btn_text' => __( 'Get Custom Quote', 'lieusoft' ),
	'btn_href' => '#book-consultation',
) );
?>
<section class="section">
	<div class="container" style="max-width:800px;">
		<div class="section-head">
			<h2><?php esc_html_e( 'Complete Business Solutions', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'We build everything you need to launch your business online.', 'lieusoft' ); ?></p>
		</div>

		<div class="pricing-table">
			<div class="pricing-table__row pricing-table__row--head">
				<span><?php esc_html_e( 'Solution', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Starting From', 'lieusoft' ); ?></span>
			</div>
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="pricing-table__row">
					<span><?php echo esc_html( $item['name'] ); ?></span>
					<span class="pricing-table__quote"><?php esc_html_e( 'Contact Us', 'lieusoft' ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>

		<p class="pricing-table__note"><?php esc_html_e( 'Why "Contact Us"? Every business is different — some need hosting, some bring their own domain, some want custom features. We scope and quote based on what you actually need.', 'lieusoft' ); ?></p>

		<div style="text-align:center;">
			<a class="btn btn--primary btn--lg" href="<?php echo esc_url( $a['btn_href'] ); ?>"><?php echo esc_html( $a['btn_text'] ); ?></a>
		</div>
	</div>
</section>
