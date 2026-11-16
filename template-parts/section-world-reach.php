<?php
/**
 * "Global Reach": a stats strip, a full-width dark card with a dotted world
 * map (a pin per country with delivered projects, arcs from our base), and
 * a grid of those countries with their projects below it. Hovering a row lights up
 * its pin (theme.js, [data-world-reach]).
 *
 * Expects $args: show_cta (bool, default true) — hide the "See all case
 * studies" button on the Case Studies page itself.
 *
 * The map is assets/images/world-dots.svg: an equirectangular grid over
 * 180°W–180°E and 78°N–56°S in a 1000 × 372.22 box. Pins use the same
 * projection, so change both together.
 */
$a = wp_parse_args( $args ?? array(), array(
	'show_cta' => true,
) );

$lieusoft_map_w       = 1000;
$lieusoft_map_h       = 372.22;
$lieusoft_map_project = static function ( $lat, $lon ) use ( $lieusoft_map_w, $lieusoft_map_h ) {
	return array(
		( $lon + 180 ) / 360 * $lieusoft_map_w,
		( 78 - $lat ) / ( 78 + 56 ) * $lieusoft_map_h,
	);
};

$lieusoft_projects  = lieusoft_get_projects();
$lieusoft_countries = lieusoft_project_countries();

// Group the projects under their country, keeping countries with at least one.
foreach ( $lieusoft_countries as $code => $country ) {
	$lieusoft_countries[ $code ]['projects'] = array_values( array_filter( $lieusoft_projects, static function ( $project ) use ( $code ) {
		return isset( $project['country'] ) && $project['country'] === $code;
	} ) );
	if ( ! $lieusoft_countries[ $code ]['projects'] ) {
		unset( $lieusoft_countries[ $code ] );
	}
}

$lieusoft_regions = count( array_unique( wp_list_pluck( $lieusoft_countries, 'region' ) ) );

$lieusoft_home = null;
foreach ( $lieusoft_countries as $code => $country ) {
	if ( ! empty( $country['home'] ) ) {
		$lieusoft_home = $lieusoft_map_project( $country['lat'], $country['lon'] );
	}
}

// List: most projects first; the stable sort keeps the helper's order on ties.
$lieusoft_rows = $lieusoft_countries;
uasort( $lieusoft_rows, static function ( $x, $y ) {
	return count( $y['projects'] ) <=> count( $x['projects'] );
} );
?>
<section class="section world-reach" data-world-reach>
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Global Reach', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Projects Delivered', 'lieusoft' ); ?> <span class="text-primary"><?php esc_html_e( 'Around the World', 'lieusoft' ); ?></span></h2>
			<p><?php esc_html_e( 'From our base in Bangladesh we build and look after websites for businesses in Europe, North America, Asia and Australia.', 'lieusoft' ); ?></p>
		</div>

		<div class="world-reach__stats<?php echo $a['show_cta'] ? '' : ' world-reach__stats--plain'; ?>">
			<div class="world-reach__stat">
				<strong><?php echo esc_html( number_format_i18n( count( $lieusoft_projects ) ) ); ?></strong>
				<span><?php esc_html_e( 'Projects delivered', 'lieusoft' ); ?></span>
			</div>
			<div class="world-reach__stat">
				<strong><?php echo esc_html( number_format_i18n( count( $lieusoft_countries ) ) ); ?></strong>
				<span><?php esc_html_e( 'Countries', 'lieusoft' ); ?></span>
			</div>
			<div class="world-reach__stat">
				<strong><?php echo esc_html( number_format_i18n( $lieusoft_regions ) ); ?></strong>
				<span><?php esc_html_e( 'Continents', 'lieusoft' ); ?></span>
			</div>
			<?php if ( $a['show_cta'] ) : ?>
				<a class="btn btn--primary world-reach__cta" href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
					<?php esc_html_e( 'See all case studies', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
			<?php endif; ?>
		</div>

		<div class="world-reach__grid">
			<div class="world-reach__card">
				<div class="world-reach__card-head">
					<h3 class="world-reach__title"><?php esc_html_e( "Where we've delivered", 'lieusoft' ); ?></h3>
					<ul class="world-reach__legend">
						<li><span class="world-reach__key"></span><?php esc_html_e( 'Client projects', 'lieusoft' ); ?></li>
						<li><span class="world-reach__key world-reach__key--home"></span><?php esc_html_e( 'Our base', 'lieusoft' ); ?></li>
					</ul>
				</div>

				<div class="world-reach__map">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/world-dots.svg' ) ); ?>" width="1000" height="372" alt="" loading="lazy" decoding="async">

					<?php if ( $lieusoft_home ) : ?>
						<svg class="world-reach__arcs" viewBox="0 0 <?php echo esc_attr( $lieusoft_map_w . ' ' . $lieusoft_map_h ); ?>" preserveAspectRatio="none" aria-hidden="true" focusable="false">
							<?php
							foreach ( $lieusoft_countries as $code => $country ) :
								if ( ! empty( $country['home'] ) ) {
									continue;
								}
								list( $x2, $y2 ) = $lieusoft_map_project( $country['lat'], $country['lon'] );
								list( $x1, $y1 ) = $lieusoft_home;
								// Bow each arc upwards by a share of its length, like a flight path.
								$lift = hypot( $x2 - $x1, $y2 - $y1 ) * 0.28;
								$cx   = ( $x1 + $x2 ) / 2;
								$cy   = max( 4, min( $y1, $y2 ) - $lift );
								?>
								<path data-country="<?php echo esc_attr( $code ); ?>" d="<?php echo esc_attr( sprintf( 'M%.1f %.1fQ%.1f %.1f %.1f %.1f', $x1, $y1, $cx, $cy, $x2, $y2 ) ); ?>"/>
							<?php endforeach; ?>
						</svg>
					<?php endif; ?>

					<?php
					foreach ( $lieusoft_countries as $code => $country ) :
						list( $x, $y ) = $lieusoft_map_project( $country['lat'], $country['lon'] );
						$classes       = 'world-reach__pin world-reach__pin--' . $country['label'] . ( empty( $country['home'] ) ? '' : ' is-home' );
						?>
						<span class="<?php echo esc_attr( $classes ); ?>" data-country="<?php echo esc_attr( $code ); ?>" style="left:<?php echo esc_attr( round( $x / $lieusoft_map_w * 100, 2 ) ); ?>%;top:<?php echo esc_attr( round( $y / $lieusoft_map_h * 100, 2 ) ); ?>%;">
							<span class="world-reach__dot" aria-hidden="true"></span>
							<span class="world-reach__label"><?php echo esc_html( $country['name'] ); ?></span>
						</span>
					<?php endforeach; ?>
				</div>
			</div>

			<ul class="world-reach__list">
				<?php foreach ( $lieusoft_rows as $code => $country ) : ?>
					<?php $lieusoft_count = count( $country['projects'] ); ?>
					<li class="world-reach__row" data-country="<?php echo esc_attr( $code ); ?>" tabindex="0">
						<span class="world-reach__thumbs" aria-hidden="true">
							<?php foreach ( array_slice( $country['projects'], 0, 3 ) as $project ) : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $project['image'] ) ); ?>" alt="" width="44" height="44" loading="lazy" decoding="async">
							<?php endforeach; ?>
						</span>
						<span class="world-reach__row-body">
							<span class="world-reach__row-meta">
								<?php
								echo esc_html( $country['region'] . ' · ' . sprintf(
									/* translators: %s: number of projects */
									_n( '%s project', '%s projects', $lieusoft_count, 'lieusoft' ),
									number_format_i18n( $lieusoft_count )
								) );
								?>
							</span>
							<strong class="world-reach__row-name"><?php echo esc_html( $country['name'] ); ?></strong>
							<span class="world-reach__row-projects"><?php echo esc_html( implode( ', ', wp_list_pluck( $country['projects'], 'name' ) ) ); ?></span>
						</span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
