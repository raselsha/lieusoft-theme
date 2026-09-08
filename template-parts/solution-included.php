<?php
/**
 * "Everything Included" — the USP band. Expects $args: title, desc,
 * items[] (title, icon); defaults to the solution-pages' 8-item list.
 */
$a = wp_parse_args( $args ?? array(), array(
	'title' => __( 'Everything Included. One Simple Package.', 'lieusoft' ),
	'desc'  => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Website', 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Appointment Plugin', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Hosting', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Domain', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'SSL', 'lieusoft' ), 'icon' => 'shield-check' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Training', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( '1 Year Support', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );
?>
<section class="section included-band">
	<div class="container included-band__grid">
		<div>
			<span class="included-band__eyebrow"><?php esc_html_e( 'Our Promise', 'lieusoft' ); ?></span>
			<h2 class="included-band__title"><?php echo esc_html( $a['title'] ); ?></h2>
			<p class="included-band__desc"><?php echo esc_html( $a['desc'] ); ?></p>
		</div>
		<div class="included-band__list">
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="included-band__item">
					<span class="included-band__icon"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<span><?php echo esc_html( $item['title'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
