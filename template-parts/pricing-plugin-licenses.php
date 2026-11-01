<?php
/**
 * Plugin license prices — one row per plugin with its Regular and
 * Extended/Developer license side by side. Expects $args: items[] (title,
 * desc, icon, accent, url, demo_url, licenses[] (name, price, features[],
 * featured)). Prices must match each product page's own pricing section.
 */
$a = wp_parse_args( $args ?? array(), array(
	'items' => array(),
) );
?>
<section class="section plugin-prices" id="plugins">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'WordPress Plugins', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Plugin Licenses', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Install on your own WordPress site. Pay once — updates are included for life.', 'lieusoft' ); ?></p>
		</div>

		<div class="plugin-prices__list">
			<?php foreach ( $a['items'] as $plugin ) : ?>
				<article class="plugin-price">
					<div class="plugin-price__info">
						<span class="plugin-icon plugin-icon--<?php echo esc_attr( $plugin['accent'] ); ?>">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $plugin['icon'] ) ); ?>" alt="">
						</span>
						<div>
							<h3><a href="<?php echo esc_url( $plugin['url'] ); ?>"><?php echo esc_html( $plugin['title'] ); ?></a></h3>
							<p><?php echo esc_html( $plugin['desc'] ); ?></p>
							<div class="plugin-price__links">
								<a href="<?php echo esc_url( $plugin['url'] ); ?>"><?php esc_html_e( 'Details', 'lieusoft' ); ?></a>
								<?php if ( ! empty( $plugin['demo_url'] ) ) : ?>
									<a href="<?php echo esc_url( $plugin['demo_url'] ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Live Demo', 'lieusoft' ); ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<?php foreach ( $plugin['licenses'] as $license ) : ?>
						<div class="plugin-price__license<?php echo ! empty( $license['featured'] ) ? ' is-featured' : ''; ?>">
							<span class="plugin-price__name"><?php echo esc_html( $license['name'] ); ?></span>
							<p class="plugin-price__amount"><span>৳</span><?php echo esc_html( $license['price'] ); ?><small><?php esc_html_e( 'one time', 'lieusoft' ); ?></small></p>
							<ul>
								<?php foreach ( $license['features'] as $feature ) : ?>
									<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $feature ); ?></li>
								<?php endforeach; ?>
							</ul>
							<a class="btn btn--sm <?php echo ! empty( $license['featured'] ) ? 'btn--primary' : 'btn--outline'; ?>" href="<?php echo esc_url( $plugin['url'] . '#pricing' ); ?>"><?php esc_html_e( 'Buy Now', 'lieusoft' ); ?></a>
						</div>
					<?php endforeach; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
