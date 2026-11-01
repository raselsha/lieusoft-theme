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
			<?php echo lieusoft_render_logo(); ?>
		</div>

		<div class="site-nav__backdrop"></div>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'lieusoft' ); ?>">
			<div class="site-nav__panel-head">
				<?php echo lieusoft_render_logo(); ?>
				<button class="site-nav__close" type="button">
					<?php echo lieusoft_icon( 'x-circle' ); ?>
					<span class="screen-reader-text"><?php esc_html_e( 'Close menu', 'lieusoft' ); ?></span>
				</button>
			</div>

			<?php
			lieusoft_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'site-nav__list',
				'fallback_cb'    => false,
			) );
			?>

			<div class="site-nav__panel-lang">
				<?php lieusoft_language_switcher( 'list' ); ?>
			</div>

			<div class="site-nav__panel-cta">
				<a class="btn btn--primary" href="https://wa.me/8801521255463" target="_blank" rel="noopener"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
			</div>
		</nav>

		<?php lieusoft_language_switcher(); ?>

		<div class="site-header__cta">
			<a class="btn btn--primary" href="https://wa.me/8801521255463" target="_blank" rel="noopener"><?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?></a>
		</div>

		<button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="site-nav-mobile">
			<span></span><span></span><span></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'lieusoft' ); ?></span>
		</button>
	</div>
</header>
