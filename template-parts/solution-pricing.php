<?php
/**
 * "Starting From" pricing card — solution pages use custom quotations,
 * so a single starting price reads better than fixed tiers.
 * Expects $args: title, desc, price, note, includes[].
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'    => __( 'Simple, Honest Pricing', 'lieusoft' ),
	'desc'     => __( 'Every business is different — we scope and quote based on what you actually need.', 'lieusoft' ),
	'price'    => '35,000',
	'note'     => __( 'One-time setup — hosting & support quoted separately per year', 'lieusoft' ),
	'includes' => array(),
) );
?>
<section class="pricing">
	<div class="container" style="max-width:640px;">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		</div>

		<div class="price-card price-card--simple">
			<span class="price-card__eyebrow"><?php esc_html_e( 'Starting From', 'lieusoft' ); ?></span>
			<p class="price-card__price price-card__price--lg"><span>৳</span><?php echo esc_html( $a['price'] ); ?></p>
			<p class="price-card__note"><?php echo esc_html( $a['note'] ); ?></p>

			<ul class="price-card__features price-card__features--single">
				<?php foreach ( $a['includes'] as $item ) : ?>
					<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $item ); ?></li>
				<?php endforeach; ?>
			</ul>

			<a class="btn btn--primary btn--block" href="#book-consultation"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
		</div>
	</div>
</section>
