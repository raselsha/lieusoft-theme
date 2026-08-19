<?php
/**
 * Reusable 4-stat trust bar shown under product pricing.
 * Expects $args: items[] (icon, number, label).
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(
		array( 'icon' => 'users', 'number' => '1,000+', 'label' => __( 'Active Installations', 'lieusoft' ) ),
		array( 'icon' => 'star', 'number' => '4.9/5', 'label' => __( 'Customer Rating', 'lieusoft' ) ),
		array( 'icon' => 'smile', 'number' => '100%', 'label' => __( 'Satisfaction', 'lieusoft' ) ),
		array( 'icon' => 'headset', 'number' => __( 'Top Support', 'lieusoft' ), 'label' => __( "We're here to help you", 'lieusoft' ) ),
	),
) );
?>
<section class="trust-bar">
	<div class="container trust-bar__row">
		<?php foreach ( $a['items'] as $item ) : ?>
			<div class="trust-bar__item">
				<span class="icon-circle"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
				<div>
					<strong><?php echo esc_html( $item['number'] ); ?></strong>
					<span><?php echo esc_html( $item['label'] ); ?></span>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
