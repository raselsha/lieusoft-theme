<?php
/**
 * Reusable FAQ accordion. Expects $args: faqs[] (q, a).
 */
$a = wp_parse_args( $args ?? array(), array(
	'faqs'          => array(),
	'sidebar_icon'  => 'chat',
	'sidebar_title' => __( 'Still Have Questions?', 'lieusoft' ),
	'sidebar_desc'  => __( 'We are here to help you. Feel free to contact us anytime.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Book Free Consultation', 'lieusoft' ),
	'sidebar_href'  => '#book-consultation',
) );
?>
<section class="faq">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'FAQ', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Frequently Asked Questions', 'lieusoft' ); ?></h2>
		</div>

		<div class="faq__grid">
			<div class="faq__list">
				<?php foreach ( $a['faqs'] as $i => $faq ) : ?>
					<details class="faq-item" <?php echo 0 === $i ? 'open' : ''; ?>>
						<summary>
							<?php echo esc_html( $faq['q'] ); ?>
							<?php echo lieusoft_icon( 'chevron-down', 'faq-item__chevron' ); ?>
						</summary>
						<p><?php echo esc_html( $faq['a'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</div>

			<div class="faq-cta">
				<span class="icon-circle"><?php echo lieusoft_icon( $a['sidebar_icon'] ); ?></span>
				<h3><?php echo esc_html( $a['sidebar_title'] ); ?></h3>
				<p><?php echo esc_html( $a['sidebar_desc'] ); ?></p>
				<a class="btn btn--primary btn--sm" href="<?php echo esc_url( $a['sidebar_href'] ); ?>">
					<?php echo esc_html( $a['sidebar_btn'] ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
			</div>
		</div>
	</div>
</section>
