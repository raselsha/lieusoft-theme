<?php
/**
 * Homepage hero slider — auto-rotating, one solution/product shown large
 * at a time (replaces the old single cramped composite image). Expects
 * $args: slides[] (accent, icon, title, features[], url, image — optional
 * filename in assets/images/; when present the slide renders as a
 * full-bleed illustration instead of the icon+checklist layout).
 *
 * The whole slide is itself the link to that solution/product's page (no
 * separate "Learn More" button) — keeps the hero to its two real CTAs
 * ("View Solutions" / "Book Consultation") instead of a competing third.
 */
$a = wp_parse_args( $args ?? array(), array(
	'slides' => array(),
) );
?>
<div class="hero-slider" data-autoplay="4500">
	<div class="hero-slider__slides">
		<?php foreach ( $a['slides'] as $i => $slide ) : ?>
			<?php $has_image = ! empty( $slide['image'] ); ?>
			<a class="hero-slider__slide<?php echo ( 0 === $i ) ? ' is-active' : ''; ?><?php echo $has_image ? ' hero-slider__slide--media' : ''; ?>" href="<?php echo esc_url( $slide['url'] ); ?>">
				<?php
				if ( $has_image ) :
					$image_path = get_theme_file_path( '/assets/images/' . $slide['image'] );
					$image_size = file_exists( $image_path ) ? getimagesize( $image_path ) : false;
					?>
					<h3 class="screen-reader-text"><?php echo esc_html( $slide['title'] ); ?></h3>
					<img class="hero-slider__image" <?php echo $image_size ? 'width="' . esc_attr( $image_size[0] ) . '" height="' . esc_attr( $image_size[1] ) . '"' : ''; ?> src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $slide['image'] ) ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>">
				<?php else : ?>
					<span class="plugin-icon plugin-icon--<?php echo esc_attr( $slide['accent'] ); ?> hero-slider__icon"><?php echo lieusoft_icon( $slide['icon'] ); ?></span>
					<h3 class="hero-slider__title"><?php echo esc_html( $slide['title'] ); ?></h3>
					<ul class="check-list check-list--stacked">
						<?php foreach ( $slide['features'] as $feature ) : ?>
							<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $feature ); ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</a>
		<?php endforeach; ?>
	</div>

	<div class="hero-slider__dots">
		<?php foreach ( $a['slides'] as $i => $slide ) : ?>
			<button type="button" class="hero-slider__dot<?php echo ( 0 === $i ) ? ' is-active' : ''; ?>" data-slide="<?php echo esc_attr( $i ); ?>">
				<span class="screen-reader-text"><?php echo esc_html( $slide['title'] ); ?></span>
			</button>
		<?php endforeach; ?>
	</div>
</div>
