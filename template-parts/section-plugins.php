<section class="plugins">
	<div class="container">
		<div class="section-head section-head--row">
			<div>
				<h2><?php esc_html_e( 'Featured WordPress Plugins', 'lieusoft' ); ?></h2>
				<p><?php esc_html_e( 'Powerful plugins built to extend WordPress and simplify your business workflow.', 'lieusoft' ); ?></p>
			</div>
			<a class="link-arrow" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
				<?php esc_html_e( 'View All Plugins', 'lieusoft' ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>
		</div>

		<?php get_template_part( 'template-parts/plugins-grid' ); ?>
	</div>
</section>
