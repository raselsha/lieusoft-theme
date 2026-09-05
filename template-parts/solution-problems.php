<?php
/**
 * "Problems We Solve" two-column before/after section.
 * Expects $args: title, problems[] (plain strings), solutions[] (plain strings).
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'     => '',
	'problems'  => array(),
	'solutions' => array(),
) );
?>
<section class="section">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
		</div>

		<div class="problems-grid">
			<div class="problems-col problems-col--old">
				<span class="problems-col__label"><?php esc_html_e( 'The Old Way', 'lieusoft' ); ?></span>
				<?php foreach ( $a['problems'] as $item ) : ?>
					<div class="problems-row">
						<?php echo lieusoft_icon( 'x-circle' ); ?>
						<span><?php echo esc_html( $item ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="problems-col problems-col--new">
				<span class="problems-col__label"><?php esc_html_e( 'The Lieusoft Way', 'lieusoft' ); ?></span>
				<?php foreach ( $a['solutions'] as $item ) : ?>
					<div class="problems-row">
						<?php echo lieusoft_icon( 'check-circle' ); ?>
						<span><?php echo esc_html( $item ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
