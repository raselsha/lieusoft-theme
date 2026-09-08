<?php
/**
 * "Why Choose Lieusoft" — 4 value props. Expects $args: title, items[]
 * (title, desc, icon); defaults to the solution-pages' universal set.
 */
$a = wp_parse_args( $args ?? array(), array(
	'title' => __( 'Why Choose Lieusoft', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Ready in 7 Days', 'lieusoft' ), 'desc' => __( 'From kickoff to a live website.', 'lieusoft' ), 'icon' => 'clock' ),
		array( 'title' => __( 'Business Focused', 'lieusoft' ), 'desc' => __( 'Built around how your business actually runs.', 'lieusoft' ), 'icon' => 'briefcase' ),
		array( 'title' => __( 'Training Included', 'lieusoft' ), 'desc' => __( 'Your team gets hands-on onboarding.', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( 'Ongoing Support', 'lieusoft' ), 'desc' => __( 'We stay reachable after launch.', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );
?>
<section class="section" style="background:var(--color-body-bg);">
	<div class="container">
		<div class="section-head"><h2><?php echo esc_html( $a['title'] ); ?></h2></div>
		<div class="card-grid card-grid--4">
			<?php foreach ( $a['items'] as $item ) : ?>
				<div class="why-item">
					<span class="icon-circle" style="width:60px;height:60px;"><?php echo lieusoft_icon( $item['icon'] ); ?></span>
					<h3 class="feature__title"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="feature__desc"><?php echo esc_html( $item['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
