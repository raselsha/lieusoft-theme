<?php
/**
 * Template Name: Product — PDF Embed Viewer
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Flipbook Pro', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
$fbp_check = '<svg class="fbp-check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg>';
$fbp_icon  = static function ( $paths ) {
	return '<span class="fbp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true">' . $paths . '</svg></span>';
};
$fbp_features = array(
	array( '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/>', __( 'Premium toolbar skins', 'lieusoft' ), __( 'The Studio Light skin: page slider, zoom, thumbnails, fullscreen and a dark-mode toggle in a clean modern toolbar.', 'lieusoft' ) ),
	array( '<circle cx="12" cy="12" r="9"/><path d="M12 3a9 9 0 0 0 0 18"/>', __( 'Custom brand colors', 'lieusoft' ), __( 'Match the stage, toolbar and border to your brand so every flipbook feels like part of your site.', 'lieusoft' ) ),
	array( '<rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V8a4 4 0 0 1 8 0v3"/>', __( 'Hidden PDF links', 'lieusoft' ), __( 'Protected mode never prints the file URL in your page — the viewer streams it through a short-lived signed link.', 'lieusoft' ) ),
	array( '<path d="M12 4v11M7 10l5 5 5-5M5 20h14"/>', __( 'Download button control', 'lieusoft' ), __( 'Show, hide or protect the download button per document — readers get the file only when you want them to.', 'lieusoft' ) ),
	array( '<path d="M4 6h16M4 12h10M4 18h7"/><circle cx="17.5" cy="16.5" r="3"/><path d="m21 20-1.3-1.3"/>', __( 'Contents, thumbnails & search', 'lieusoft' ), __( 'A side panel docked to the book for table of contents, page thumbnails and full-text search — RTL aware.', 'lieusoft' ) ),
	array( '<path d="M21 12a9 9 0 1 1-3-6.7L21 8"/><path d="M21 3v5h-5"/>', __( 'Updates & support', 'lieusoft' ), __( 'One-click updates in your dashboard and direct support from the developer for the length of your plan.', 'lieusoft' ) ),
);
// Visitors arriving from the free plugin's offer see a banner, and the code
// rides along to checkout, where EDD applies it. The plugin's offer links carry
// ?discount=FLIPBOOK30&utm_campaign=free-user-offer; EDD stores the discount in
// the session and redirects without `discount`, so the campaign tag is what is
// still in the URL when this page renders.
// phpcs:disable WordPress.Security.NonceVerification.Recommended
$fbp_offer = ( isset( $_GET['utm_campaign'] ) && 'free-user-offer' === sanitize_key( wp_unslash( $_GET['utm_campaign'] ) ) )
	|| ( isset( $_GET['discount'] ) && 'FLIPBOOK30' === strtoupper( sanitize_key( wp_unslash( $_GET['discount'] ) ) ) );
// phpcs:enable WordPress.Security.NonceVerification.Recommended
$fbp_buy   = static function ( $price_id ) use ( $fbp_offer ) {
	$url = lieusoft_buy_url( 390, $price_id );
	return $fbp_offer ? add_query_arg( 'discount', 'FLIPBOOK30', $url ) : $url;
};
$fbp_compare = array(
	array( __( '3D flipbook and classic reader', 'lieusoft' ), true ),
	array( __( 'Unlimited PDFs', 'lieusoft' ), true ),
	array( __( 'Grid, list, e-book and newsletter layouts', 'lieusoft' ), true ),
	array( __( 'Elementor widgets and shortcodes', 'lieusoft' ), true ),
	array( __( 'View and download counters', 'lieusoft' ), true ),
	array( __( 'Lockdown: no download, file link or print', 'lieusoft' ), false ),
	array( __( 'Hidden file URL (protected streaming)', 'lieusoft' ), false ),
	array( __( 'Studio Light toolbar with thumbnails, contents and search', 'lieusoft' ), false ),
	array( __( 'Brand colours, page-flip sound, autoplay and zoom limits', 'lieusoft' ), false ),
	array( __( 'Right-to-left page turning', 'lieusoft' ), false ),
	array( __( 'Single-page view on phones', 'lieusoft' ), false ),
	array( __( 'Show or hide each toolbar button', 'lieusoft' ), false ),
);
// Real reviews from wordpress.org/support/plugin/pdf-embed-viewer/reviews/ (all 5 stars).
$fbp_reviews = array(
	array( 'title' => 'Excellent!', 'text' => 'The plugin works flawlessly and is very stable. There are certainly still a few areas that could be improved. But the developer took one of my suggestions and implemented it in an update to the plugin. That’s what I call customer service.', 'author' => 'Thobie', 'date' => 'May 2026', 'url' => 'https://wordpress.org/support/topic/excellent-14254/' ),
	array( 'title' => 'Stunning 3D Flipbook Plugin – A Game-Changer for PDF Display!', 'text' => 'The interface is really easy to use, so embedding and showcasing PDFs in a visually appealing, interactive 3D flipbook format is a breeze! It’s absolutely perfect for presenting e-books, manuals and reports in a really professional way.', 'author' => 'yuseyhan', 'date' => 'July 2025', 'url' => 'https://wordpress.org/support/topic/stunning-3d-flipbook-plugin-a-game-changer-for-pdf-display/' ),
	array( 'title' => 'awesome plugin', 'text' => 'very simple to use and fast in scrolling pages. The Support is SUPER', 'author' => 'fabriziolaneve', 'date' => 'July 2025', 'url' => 'https://wordpress.org/support/topic/awesome-plugin-7399/' ),
	array( 'title' => 'Easy and objective!', 'text' => 'Very practical and simple to use', 'author' => 'superbr', 'date' => 'May 2025', 'url' => 'https://wordpress.org/support/topic/easy-and-objective-2/' ),
);
$fbp_shield = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4.5 6v5.5c0 4.6 3.2 8.4 7.5 9.5 4.3-1.1 7.5-4.9 7.5-9.5V6L12 3Z"/><path d="m8.8 12.2 2.2 2.2 4.2-4.4"/></svg>';
$fbp_plans = array(
	array( 'name' => __( 'Free', 'lieusoft' ), 'desc' => __( 'Everything you need to publish flipbooks on any WordPress site.', 'lieusoft' ), 'price' => '0', 'period' => __( '/ forever', 'lieusoft' ), 'items' => array( __( 'Unlimited PDFs', 'lieusoft' ), __( 'All 4 archive layouts', 'lieusoft' ), __( 'Elementor widgets', 'lieusoft' ), __( 'Read & download counters', 'lieusoft' ), __( 'Community support', 'lieusoft' ) ), 'cta' => __( 'Download free', 'lieusoft' ), 'url' => 'https://downloads.wordpress.org/plugin/pdf-embed-viewer.zip' ),
	array( 'name' => __( 'Pro Single', 'lieusoft' ), 'desc' => __( 'For one site that wants a premium reader.', 'lieusoft' ), 'price' => '29', 'period' => __( '/ year', 'lieusoft' ), 'items' => array( __( 'Everything in Free', 'lieusoft' ), __( '1 domain', 'lieusoft' ), __( 'All Pro features', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Pro Single', 'lieusoft' ), 'price_id' => 1 ),
	array( 'name' => __( 'Lifetime', 'lieusoft' ), 'desc' => __( 'Pay once for one site and keep it for life.', 'lieusoft' ), 'price' => '79', 'period' => __( 'one time', 'lieusoft' ), 'items' => array( __( 'Everything in Free', 'lieusoft' ), __( '1 domain', 'lieusoft' ), __( 'All Pro features', 'lieusoft' ), __( 'Lifetime updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Lifetime', 'lieusoft' ), 'price_id' => 3 ),
	array( 'name' => __( 'Pro 10', 'lieusoft' ), 'desc' => __( 'For agencies and publishers with several sites.', 'lieusoft' ), 'price' => '99', 'period' => __( '/ year', 'lieusoft' ), 'items' => array( __( 'Everything in Free', 'lieusoft' ), __( '10 domains', 'lieusoft' ), __( 'All Pro features', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Pro 10', 'lieusoft' ), 'price_id' => 2, 'featured' => true ),
);
?>

<section class="fbp-hero">
	<div class="container fbp-hero__inner">
		<div class="fbp-hero__copy">
			<span class="fbp-pill"><?php esc_html_e( 'WordPress plugin · Pro add-on', 'lieusoft' ); ?></span>
			<h1><?php esc_html_e( 'Turn PDFs into 3D flipbooks your readers love', 'lieusoft' ); ?></h1>
			<p class="fbp-hero__lead"><?php esc_html_e( 'Flipbook PDF Viewer & Embedder Pro adds a premium reading experience to the free plugin: on-brand toolbar skins, protected PDF links and full control over downloads.', 'lieusoft' ); ?></p>
			<div class="fbp-hero__actions">
				<a class="btn btn--primary" href="#pricing"><?php esc_html_e( 'See pricing', 'lieusoft' ); ?></a>
				<a class="btn btn--outline" href="https://flipbook.lieusoft.com/demo/" target="_blank" rel="noopener"><?php esc_html_e( 'Try the live demo', 'lieusoft' ); ?></a>
			</div>
			<ul class="fbp-hero__checks">
				<li><?php echo $fbp_check; ?><?php esc_html_e( 'Works with any theme', 'lieusoft' ); ?></li>
				<li><?php echo $fbp_check; ?><?php esc_html_e( 'Elementor ready', 'lieusoft' ); ?></li>
				<li><?php echo $fbp_check; ?><?php esc_html_e( 'Key emailed instantly', 'lieusoft' ); ?></li>
			</ul>
			<a class="fbp-rating" href="#reviews">
				<span class="fbp-rating__stars" aria-hidden="true">★★★★★</span>
				<span><?php esc_html_e( '5.0 on WordPress.org · used on 300+ sites', 'lieusoft' ); ?></span>
			</a>
		</div>
		<div class="fbp-hero__visual" aria-hidden="true">
			<div class="fbp-window">
				<div class="fbp-window__bar"><i></i><i></i><i></i><span>yoursite.com/annual-report</span></div>
				<div class="fbp-window__stage">
					<div class="fbp-book">
						<div class="fbp-book__page">
							<span class="fbp-book__kicker">ANNUAL REPORT</span>
							<span class="fbp-book__title">A year in review</span>
							<span class="fbp-book__img"></span>
							<span class="fbp-line" style="width:90%"></span><span class="fbp-line" style="width:75%"></span><span class="fbp-line" style="width:85%"></span>
						</div>
						<div class="fbp-book__page">
							<span class="fbp-book__sub">Highlights</span>
							<span class="fbp-line" style="width:92%"></span><span class="fbp-line" style="width:70%"></span>
							<span class="fbp-bars"><span style="height:40%"></span><span style="height:65%"></span><span style="height:50%"></span><span class="is-hi" style="height:90%"></span></span>
							<span class="fbp-line" style="width:80%"></span>
						</div>
					</div>
				</div>
				<div class="fbp-window__tools">
					<span><svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h10"/></svg><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></span>
					<b>Page 4 / 64</b>
					<span><svg viewBox="0 0 24 24"><path d="M12 3a9 9 0 1 0 9 9 7 7 0 0 1-9-9z"/></svg><svg viewBox="0 0 24 24"><path d="M4 9V4h5M20 9V4h-5M4 15v5h5M20 15v5h-5"/></svg></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="fbp-section" id="features">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'What Pro adds', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Everything in Free, plus a premium reader', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Pro installs alongside the free plugin and switches on these extras — nothing to migrate.', 'lieusoft' ); ?></p>
		</div>
		<div class="fbp-features">
			<?php foreach ( $fbp_features as $f ) : ?>
				<div class="fbp-feature">
					<?php echo $fbp_icon( $f[0] ); ?>
					<h3><?php echo esc_html( $f[1] ); ?></h3>
					<p><?php echo esc_html( $f[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="fbp-section fbp-section--tint" id="compare">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'Free vs Pro', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Keep everything you have. Add protection and polish.', 'lieusoft' ); ?></h2>
		</div>
		<div class="fbp-compare">
			<table>
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Feature', 'lieusoft' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Free', 'lieusoft' ); ?></th>
						<th scope="col" class="is-pro"><?php esc_html_e( 'Pro', 'lieusoft' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $fbp_compare as $row ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( $row[0] ); ?></th>
							<td><?php echo $row[1] ? $fbp_check : '<span class="fbp-compare__no" aria-label="' . esc_attr__( 'Not included', 'lieusoft' ) . '">—</span>'; // phpcs:ignore WordPress.Security.EscapeOutput ?></td>
							<td class="is-pro"><?php echo $fbp_check; // phpcs:ignore WordPress.Security.EscapeOutput ?></td>
						</tr>
					<?php endforeach; ?>
					<tr>
						<th scope="row"><?php esc_html_e( 'Support', 'lieusoft' ); ?></th>
						<td><?php esc_html_e( 'Community forum', 'lieusoft' ); ?></td>
						<td class="is-pro"><?php esc_html_e( 'Direct from the developer', 'lieusoft' ); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section class="fbp-section" id="reviews">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'Reviews', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Rated 5 stars by WordPress users', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Every review of the plugin on WordPress.org gives it five stars.', 'lieusoft' ); ?></p>
		</div>
		<div class="fbp-reviews">
			<?php foreach ( $fbp_reviews as $review ) : ?>
				<figure class="fbp-review" lang="en" dir="ltr">
					<span class="fbp-rating__stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'lieusoft' ); ?>">★★★★★</span>
					<blockquote>
						<p class="fbp-review__title"><?php echo esc_html( $review['title'] ); ?></p>
						<p><?php echo esc_html( $review['text'] ); ?></p>
					</blockquote>
					<figcaption><a href="<?php echo esc_url( $review['url'] ); ?>" target="_blank" rel="noopener nofollow">@<?php echo esc_html( $review['author'] ); ?></a> · <?php echo esc_html( $review['date'] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
		<p class="fbp-reviews__all"><a href="https://wordpress.org/support/plugin/pdf-embed-viewer/reviews/" target="_blank" rel="noopener"><?php esc_html_e( 'Read all reviews on WordPress.org', 'lieusoft' ); ?> &rarr;</a></p>
	</div>
</section>

<section class="fbp-section fbp-section--tint" id="pricing">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'Pricing', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Start free. Go Pro when you want more.', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'The free plugin is yours forever. Yearly Pro plans renew each year, Lifetime is a single payment. Prices in USD.', 'lieusoft' ); ?></p>
		</div>
		<?php if ( $fbp_offer ) : ?>
			<div class="fbp-offer" role="status">
				<strong><?php esc_html_e( '30% off for Flipbook PDF Viewer users', 'lieusoft' ); ?></strong>
				<span><?php esc_html_e( 'Your code FLIPBOOK30 is applied at checkout — pick a plan below.', 'lieusoft' ); ?></span>
			</div>
		<?php endif; ?>
		<div class="fbp-plans">
			<?php foreach ( $fbp_plans as $plan ) : ?>
				<div class="fbp-plan<?php echo ! empty( $plan['featured'] ) ? ' fbp-plan--featured' : ''; ?>">
					<?php if ( ! empty( $plan['featured'] ) ) : ?><span class="fbp-plan__badge"><?php esc_html_e( 'Best value', 'lieusoft' ); ?></span><?php endif; ?>
					<div>
						<h3><?php echo esc_html( $plan['name'] ); ?></h3>
						<p class="fbp-plan__desc"><?php echo esc_html( $plan['desc'] ); ?></p>
					</div>
					<p class="fbp-plan__price"><strong>$<?php echo esc_html( $plan['price'] ); ?></strong><span><?php echo esc_html( $plan['period'] ); ?></span></p>
					<ul class="fbp-plan__list">
						<?php foreach ( $plan['items'] as $item ) : ?><li><?php echo $fbp_check; ?><?php echo esc_html( $item ); ?></li><?php endforeach; ?>
					</ul>
					<a class="btn btn--block <?php echo ! empty( $plan['featured'] ) ? 'btn--primary' : 'btn--outline'; ?>" href="<?php echo esc_url( isset( $plan['url'] ) ? $plan['url'] : $fbp_buy( $plan['price_id'] ) ); ?>"<?php echo isset( $plan['url'] ) ? ' download rel="nofollow"' : ''; ?>><?php echo esc_html( $plan['cta'] ); ?></a>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="fbp-guarantee">
			<?php echo $fbp_shield; // phpcs:ignore WordPress.Security.EscapeOutput ?>
			<div>
				<strong><?php esc_html_e( '14-day money-back guarantee', 'lieusoft' ); ?></strong>
				<span><?php esc_html_e( 'If Pro isn’t right for you, email info@lieusoft.com within 14 days of your purchase for a full refund. No questions asked.', 'lieusoft' ); ?></span>
			</div>
		</div>
		<p class="fbp-plans__note"><?php esc_html_e( 'Secure card checkout with Stripe · License key emailed instantly · Requires the free Flipbook PDF Viewer plugin', 'lieusoft' ); ?></p>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Is there a money-back guarantee?', 'lieusoft' ), 'a' => __( 'Yes. If Pro isn’t right for you, email info@lieusoft.com within 14 days of your purchase and we’ll refund you in full.', 'lieusoft' ) ),
		array( 'q' => __( 'Do I need the free plugin?', 'lieusoft' ), 'a' => __( 'Yes. Pro is an add-on to the free Flipbook PDF Viewer & Embedder from WordPress.org — install both.', 'lieusoft' ) ),
		array( 'q' => __( 'How do I get my license key?', 'lieusoft' ), 'a' => __( 'It is emailed right after payment and shown on the receipt page. Paste it on the plugin’s License screen and click Activate.', 'lieusoft' ) ),
		array( 'q' => __( 'What happens when a yearly plan ends?', 'lieusoft' ), 'a' => __( 'The plugin keeps working. Renew to keep getting updates and support.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I move my license to another site?', 'lieusoft' ), 'a' => __( 'Yes — deactivate it on the old site to free the slot, then activate it on the new one.', 'lieusoft' ) ),
		array( 'q' => __( 'Will this plugin work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, it is built to work with any properly coded WordPress theme, including page builders like Elementor.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'If you have any questions, our support team is always here to help you.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:info@lieusoft.com',
) );

get_footer();
