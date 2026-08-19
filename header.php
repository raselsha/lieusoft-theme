<?php
/**
 * The header for the Lieusoft theme.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-branding__name" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</div>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'lieusoft' ); ?>">
			<?php
			lieusoft_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'site-nav__list',
				'fallback_cb'    => false,
			) );
			?>
		</nav>

		<div class="site-header__cta">
			<a class="btn btn--primary" href="#book-consultation"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
		</div>

		<button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="site-nav-mobile">
			<span></span><span></span><span></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'lieusoft' ); ?></span>
		</button>
	</div>
</header>
