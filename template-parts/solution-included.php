<?php
/**
 * Reusable "What's Included" section. Items are identical across every
 * solution page; only the description line changes. Expects $args: desc.
 */
$a = wp_parse_args( $args ?? array(), array(
	'desc' => __( 'Everything you need to run your business online.', 'lieusoft' ),
) );

$lieusoft_included = array(
	array( 'title' => __( 'Complete Website', 'lieusoft' ), 'icon' => 'home' ),
	array( 'title' => __( 'Domain & Hosting', 'lieusoft' ), 'icon' => 'server' ),
	array( 'title' => __( 'SSL Certificate', 'lieusoft' ), 'icon' => 'shield-check' ),
	array( 'title' => __( 'Business Email', 'lieusoft' ), 'icon' => 'envelope' ),
	array( 'title' => __( 'Training & Guide', 'lieusoft' ), 'icon' => 'book-open' ),
	array( 'title' => __( 'Ongoing Support', 'lieusoft' ), 'icon' => 'headset' ),
);
?>
<section class="included-wrap">
	<div class="container">
		<div class="included">
			<div class="section-head">
				<h2><?php esc_html_e( "What's Included", 'lieusoft' ); ?></h2>
				<p><?php echo esc_html( $a['desc'] ); ?></p>
			</div>

			<div class="included__row">
				<?php foreach ( $lieusoft_included as $item ) : ?>
					<div class="included__item">
						<span class="icon-circle icon-circle--white"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
						<span><?php echo esc_html( $item['title'] ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
