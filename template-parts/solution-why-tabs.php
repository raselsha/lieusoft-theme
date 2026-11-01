<?php
/**
 * "Why Choose Lieusoft" as a numbered tab list + detail panel. On desktop
 * the section pins while you scroll through it and the active tab follows
 * the scroll (see the [data-why-tabs] block in theme.js); tabs are also
 * clickable. Expects $args: title, items[] (title, desc, icon).
 */
$a = wp_parse_args( $args ?? array(), array(
	'title' => __( 'Why Choose Lieusoft', 'lieusoft' ),
	'items' => array(),
) );

if ( ! $a['items'] ) {
	return;
}
?>
<section class="why-tabs" data-why-tabs style="--why-count: <?php echo esc_attr( count( $a['items'] ) ); ?>;">
	<div class="why-tabs__sticky">
		<div class="container">
			<div class="section-head"><h2><?php echo esc_html( $a['title'] ); ?></h2></div>

			<div class="why-tabs__grid">
				<div class="why-tabs__list" role="tablist">
					<?php foreach ( $a['items'] as $i => $item ) : ?>
						<button type="button" class="why-tabs__tab<?php echo 0 === $i ? ' is-active' : ''; ?>" role="tab" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>" data-why-tab="<?php echo esc_attr( $i ); ?>">
							<span class="why-tabs__num"><?php echo esc_html( $i + 1 ); ?></span>
							<span class="why-tabs__label"><?php echo esc_html( $item['title'] ); ?></span>
							<?php echo lieusoft_icon( 'arrow-right', 'why-tabs__chev' ); ?>
						</button>
					<?php endforeach; ?>
				</div>

				<div class="why-tabs__panels">
					<?php foreach ( $a['items'] as $i => $item ) : ?>
						<div class="why-tabs__panel<?php echo 0 === $i ? ' is-active' : ''; ?>" role="tabpanel" data-why-panel="<?php echo esc_attr( $i ); ?>">
							<span class="why-tabs__icon"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
							<h3 class="why-tabs__title"><span><?php echo esc_html( $i + 1 ); ?></span><?php echo esc_html( $item['title'] ); ?></h3>
							<p class="why-tabs__desc"><?php echo esc_html( $item['desc'] ); ?></p>
							<a class="why-tabs__link" href="#book-consultation"><?php esc_html_e( 'Book a free consultation', 'lieusoft' ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
