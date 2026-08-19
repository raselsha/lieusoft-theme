<?php
/**
 * The footer for the Lieusoft theme.
 */
?>
	<footer class="site-footer">
		<div class="container site-footer__grid">
			<div class="site-footer__brand">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<p class="site-footer__name"><?php bloginfo( 'name' ); ?></p>
				<?php endif; ?>
				<p class="site-footer__tagline"><?php bloginfo( 'description' ); ?></p>
			</div>

			<div class="site-footer__col">
				<h3 class="footer-widget__title"><?php esc_html_e( 'Product', 'lieusoft' ); ?></h3>
				<?php
				lieusoft_nav_menu( array(
					'theme_location' => 'footer-product',
					'container'      => false,
					'menu_class'     => 'footer-col__list',
					'fallback_cb'    => false,
				) );
				?>
			</div>

			<div class="site-footer__col">
				<h3 class="footer-widget__title"><?php esc_html_e( 'Company', 'lieusoft' ); ?></h3>
				<?php
				lieusoft_nav_menu( array(
					'theme_location' => 'footer-company',
					'container'      => false,
					'menu_class'     => 'footer-col__list',
					'fallback_cb'    => false,
				) );
				?>
			</div>

			<div class="site-footer__col">
				<h3 class="footer-widget__title"><?php esc_html_e( 'Get in Touch', 'lieusoft' ); ?></h3>
				<ul class="footer-col__list">
					<li><a href="mailto:hello@lieusoft.com">hello@lieusoft.com</a></li>
				</ul>
			</div>
		</div>

		<div class="container site-footer__bottom">
			<p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'lieusoft' ); ?></p>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
