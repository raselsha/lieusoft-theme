<?php
/**
 * Reusable bottom CTA banner. Expects $args: title, desc.
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'    => '',
	'desc'     => '',
	'icon'     => 'calendar',
	'btn_text' => __( 'Book Free Consultation', 'lieusoft' ),
	'btn_href' => 'mailto:hello@lieusoft.com',
	'anchor'   => 'book-consultation',
) );
?>
<section class="cta-wrap" id="<?php echo esc_attr( $a['anchor'] ); ?>">
	<div class="container">
		<div class="cta cta--icon">
			<span class="cta__icon"><?php echo lieusoft_icon( $a['icon'] ); ?></span>
			<div class="cta__text">
				<h2><?php echo esc_html( $a['title'] ); ?></h2>
				<p><?php echo esc_html( $a['desc'] ); ?></p>
			</div>
			<a class="btn btn--light btn--lg" href="<?php echo esc_url( $a['btn_href'] ); ?>">
				<?php echo esc_html( $a['btn_text'] ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>
		</div>
	</div>
</section>
