<?php
/**
 * "Problems We Solve" — a merged old-way/new-way compare table next to a
 * real photo. Expects $args: title, desc, image (filename in
 * assets/images/, optional), problems[] and solutions[] (plain strings,
 * paired row-by-row by array index).
 */
$a = wp_parse_args( $args ?? array(), array(
	'title'     => '',
	'desc'      => '',
	'image'     => '',
	'problems'  => array(),
	'solutions' => array(),
) );
?>
<section class="section problems-section">
	<div class="container">
		<div class="problems-layout">
			<div class="problems-intro">
				<div class="section-head problems-intro__head">
					<h2><?php echo esc_html( $a['title'] ); ?></h2>
					<?php if ( $a['desc'] ) : ?>
						<p><?php echo esc_html( $a['desc'] ); ?></p>
					<?php endif; ?>
				</div>
				<?php if ( $a['image'] ) : ?>
					<div class="problems-intro__media">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $a['image'] ) ); ?>" alt="">
					</div>
				<?php endif; ?>
			</div>

			<div class="problems-table">
				<div class="problems-table__head">
					<span class="problems-table__head-cell problems-table__head-cell--old"><?php echo lieusoft_icon( 'x-circle' ); ?><?php esc_html_e( 'The Old Way', 'lieusoft' ); ?></span>
					<span class="problems-table__head-cell problems-table__head-cell--new"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'The Lieusoft Way', 'lieusoft' ); ?></span>
				</div>
				<?php foreach ( $a['problems'] as $i => $problem ) : ?>
					<div class="problems-table__row">
						<div class="problems-table__cell problems-table__cell--old">
							<?php echo lieusoft_icon( 'x-circle' ); ?>
							<span><?php echo esc_html( $problem ); ?></span>
						</div>
						<div class="problems-table__cell problems-table__cell--new">
							<?php echo lieusoft_icon( 'check-circle' ); ?>
							<span><?php echo isset( $a['solutions'][ $i ] ) ? esc_html( $a['solutions'][ $i ] ) : ''; ?></span>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
