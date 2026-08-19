<?php
/**
 * The footer for the Lieusoft theme.
 */
?>
	<footer class="site-footer">
		<div class="container site-footer__grid">
			<div class="site-footer__brand">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-footer__logo" width="140" height="28">
				<p class="site-footer__tagline">
					<?php esc_html_e( 'We build the digital backbone of your business — from custom websites and WordPress plugins to email infrastructure and IT strategy. Trusted by businesses worldwide.', 'lieusoft' ); ?>
				</p>
				<div class="social-icons">
					<a href="#" aria-label="Facebook"><?php echo lieusoft_icon( 'facebook' ); ?></a>
					<a href="#" aria-label="LinkedIn"><?php echo lieusoft_icon( 'linkedin' ); ?></a>
					<a href="#" aria-label="YouTube"><?php echo lieusoft_icon( 'youtube' ); ?></a>
				</div>
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
				<h3 class="footer-widget__title"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></h3>
				<?php
				lieusoft_nav_menu( array(
					'theme_location' => 'footer-solutions',
					'container'      => false,
					'menu_class'     => 'footer-col__list',
					'fallback_cb'    => false,
				) );
				?>
			</div>

			<div class="site-footer__col">
				<h3 class="footer-widget__title"><?php esc_html_e( 'Services', 'lieusoft' ); ?></h3>
				<?php
				lieusoft_nav_menu( array(
					'theme_location' => 'footer-services',
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
				<ul class="footer-contact">
					<li><?php echo lieusoft_icon( 'envelope' ); ?><a href="mailto:hello@lieusof.com">hello@lieusof.com</a></li>
					<li><?php echo lieusoft_icon( 'whatsapp' ); ?><span><?php esc_html_e( '+8801737266685 — available on WhatsApp', 'lieusoft' ); ?></span></li>
					<li><?php echo lieusoft_icon( 'pin' ); ?><span><?php esc_html_e( 'Remote-first · Serving clients worldwide', 'lieusoft' ); ?></span></li>
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
