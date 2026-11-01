<?php
/**
 * Client testimonials — review cards that scroll endlessly (pure CSS
 * marquee; hover pauses). Two rows in opposite directions once there are
 * enough reviews, otherwise one. Expects $args: eyebrow, title, items[]
 * (name, role, quote, rating 1–5, source label, url). Renders nothing
 * without items. Only use real reviews, each linked to where it was posted.
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => __( 'Testimonials', 'lieusoft' ),
	'title'   => __( 'What Our Clients Say', 'lieusoft' ),
	'items'   => array(),
) );

if ( ! $a['items'] ) {
	return;
}

// Alternate items between the two rows so sources stay mixed.
$rows = array( $a['items'] );
if ( count( $a['items'] ) >= 6 ) {
	$rows = array( array(), array() );
	foreach ( array_values( $a['items'] ) as $i => $item ) {
		$rows[ $i % 2 ][] = $item;
	}
}

// Repeat each row until one loop is at least 8 cards (~3400px) wide, so
// the strip never runs out and shows blank space on wide screens.
foreach ( $rows as $r => $row ) {
	while ( count( $rows[ $r ] ) < 8 ) {
		$rows[ $r ] = array_merge( $rows[ $r ], $row );
	}
}
?>
<section class="section testimonials">
	<div class="container">
		<div class="section-head">
			<?php if ( $a['eyebrow'] ) : ?><span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span><?php endif; ?>
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
		</div>
	</div>

	<div class="testimonials__rows">
		<?php foreach ( $rows as $r => $row ) : ?>
			<div class="testimonials__row<?php echo 1 === $r ? ' testimonials__row--reverse' : ''; ?>">
				<div class="testimonials__track">
					<?php for ( $copy = 0; $copy < 2; $copy++ ) : // Second copy makes the loop seamless. ?>
						<?php foreach ( $row as $i => $item ) : ?>
							<figure class="testimonial"<?php echo ( $copy || $i >= count( $a['items'] ) ) ? ' aria-hidden="true"' : ''; ?>>
								<figcaption class="testimonial__head">
									<span class="testimonial__avatar"><?php echo esc_html( strtoupper( mb_substr( $item['name'], 0, 1 ) ) ); ?></span>
									<span>
										<strong><?php echo esc_html( $item['name'] ); ?></strong>
										<small><?php echo esc_html( $item['role'] ); ?></small>
									</span>
								</figcaption>
								<?php if ( ! empty( $item['rating'] ) ) : ?>
									<span class="testimonial__stars" aria-label="<?php echo esc_attr( sprintf( __( '%d out of 5 stars', 'lieusoft' ), $item['rating'] ) ); ?>"><?php echo str_repeat( lieusoft_icon( 'star' ), (int) $item['rating'] ); ?></span>
								<?php endif; ?>
								<blockquote class="testimonial__quote"><?php echo esc_html( $item['quote'] ); ?></blockquote>
								<?php if ( ! empty( $item['url'] ) ) : ?>
									<a class="testimonial__source" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener"><?php echo esc_html( sprintf( __( 'Review on %s', 'lieusoft' ), $item['source'] ) ); ?></a>
								<?php endif; ?>
							</figure>
						<?php endforeach; ?>
					<?php endfor; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
