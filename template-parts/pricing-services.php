<?php
/**
 * "Services" — quote-based cards (no price shown: every service is scoped
 * first, then quoted). Expects $args: items[] (title, desc, icon), btn_href.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items'    => array(),
	'btn_href' => '#book-consultation',
) );
?>
<section class="section section--gray" id="services">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Services', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Custom Work, Quoted for You', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Every project is different, so we scope it with you first and send a fixed quote — no surprises later.', 'lieusoft' ); ?></p>
		</div>
		<div class="card-grid card-grid--3">
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="card pricing-service-card">
					<span class="icon-circle"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<h3 class="card__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
					<a class="link-arrow" href="<?php echo esc_url( $a['btn_href'] ); ?>">
						<?php esc_html_e( 'Get a Quote', 'lieusoft' ); ?>
						<?php echo lieusoft_icon( 'arrow-right' ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="pricing-steps">
			<div><b>1</b><span><?php esc_html_e( 'Free consultation', 'lieusoft' ); ?></span></div>
			<div><b>2</b><span><?php esc_html_e( 'Written scope & fixed quote', 'lieusoft' ); ?></span></div>
			<div><b>3</b><span><?php esc_html_e( 'Work starts after you approve', 'lieusoft' ); ?></span></div>
		</div>
	</div>
</section>
