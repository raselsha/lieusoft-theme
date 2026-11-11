<?php
/**
 * Template Name: Product — Service Booking Plugin
 *
 * Sales page for Service Booking Manager for WooCommerce (EDD download 388):
 * hero with a real screenshot of the booking popup, features, screenshots,
 * a free live-demo card plus the three paid plans (same prices and plan
 * shapes as Flipbook Pro), FAQ.
 */

get_header();

$sbm_download = 388;
$sbm_demo     = 'https://servicebooking.lieusoft.com/';
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Service Booking Plugin', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
$fbp_check = '<svg class="fbp-check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg>';
$fbp_icon  = static function ( $paths ) {
	return '<span class="fbp-feature__icon"><svg viewBox="0 0 24 24" aria-hidden="true">' . $paths . '</svg></span>';
};
// Screenshot from the live demo, 1200px with a 720px variant.
$sbm_img = static function ( $name, $alt, $eager = false ) {
	$base = esc_url( get_theme_file_uri( '/assets/images/' . $name ) );
	return sprintf(
		'<img src="%1$s.jpg" srcset="%1$s-720.jpg 720w, %1$s.jpg 1200w" sizes="(max-width: 960px) 92vw, 600px" width="1200" height="794" alt="%2$s"%3$s decoding="async">',
		$base,
		esc_attr( $alt ),
		$eager ? ' fetchpriority="high"' : ' loading="lazy"'
	);
};
$sbm_features = array(
	array( '<rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4"/><path d="m9 15 2 2 4-4"/>', __( 'Step-by-step booking popup', 'lieusoft' ), __( 'Branch, service, duration, date and time in one clean popup that opens from any button on your site.', 'lieusoft' ) ),
	array( '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>', __( 'Durations & prices per service', 'lieusoft' ), __( '30, 60 or 90 minutes — each length with its own price, a "Most popular" badge and a pressure-intensity scale.', 'lieusoft' ) ),
	array( '<path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>', __( 'Multiple branches', 'lieusoft' ), __( 'Run several locations from one site — each branch with its own address, staff and bookings.', 'lieusoft' ) ),
	array( '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M21.5 20a6.5 6.5 0 0 0-4-6"/>', __( 'Staff, roles & schedules', 'lieusoft' ), __( 'Staff profiles with their own "My Bookings" dashboard, plus branch manager and store manager roles.', 'lieusoft' ) ),
	array( '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>', __( 'Calendar, customers & reports', 'lieusoft' ), __( 'An appointment calendar for every branch and staff member, customer and payment lists, and 30-day reports.', 'lieusoft' ) ),
	array( '<path d="M3 4h2l2.4 10.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 1.9-1.5L21 8H6"/><circle cx="10" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/>', __( 'WooCommerce checkout & alerts', 'lieusoft' ), __( 'Bookings go through your WooCommerce cart and checkout, so every payment gateway works — with email and Telegram alerts for new orders.', 'lieusoft' ) ),
);
$sbm_plans = array(
	array( 'name' => __( 'Free demo', 'lieusoft' ), 'desc' => __( 'Try every feature on our live demo site before you buy.', 'lieusoft' ), 'price' => '0', 'period' => __( '/ try it', 'lieusoft' ), 'items' => array( __( 'Full booking flow', 'lieusoft' ), __( 'Branches, services & durations', 'lieusoft' ), __( 'Calendar & time slots', 'lieusoft' ), __( 'No sign-up needed', 'lieusoft' ) ), 'cta' => __( 'Open the live demo', 'lieusoft' ), 'url' => $sbm_demo ),
	array( 'name' => __( 'Pro Single', 'lieusoft' ), 'desc' => __( 'For one business website.', 'lieusoft' ), 'price' => '29', 'period' => __( '/ year', 'lieusoft' ), 'items' => array( __( '1 domain', 'lieusoft' ), __( 'All features', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Pro Single', 'lieusoft' ), 'price_id' => 1 ),
	array( 'name' => __( 'Lifetime', 'lieusoft' ), 'desc' => __( 'Pay once for one site and keep it for life.', 'lieusoft' ), 'price' => '79', 'period' => __( 'one time', 'lieusoft' ), 'items' => array( __( '1 domain', 'lieusoft' ), __( 'All features', 'lieusoft' ), __( 'Lifetime updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Lifetime', 'lieusoft' ), 'price_id' => 3 ),
	array( 'name' => __( 'Pro 10', 'lieusoft' ), 'desc' => __( 'For agencies and businesses with several sites.', 'lieusoft' ), 'price' => '99', 'period' => __( '/ year', 'lieusoft' ), 'items' => array( __( '10 domains', 'lieusoft' ), __( 'All features', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ), 'cta' => __( 'Buy Pro 10', 'lieusoft' ), 'price_id' => 2, 'featured' => true ),
);
?>

<section class="fbp-hero sbm-hero">
	<div class="container fbp-hero__inner">
		<div class="fbp-hero__copy">
			<span class="fbp-pill"><?php esc_html_e( 'WordPress plugin · for WooCommerce', 'lieusoft' ); ?></span>
			<h1><?php esc_html_e( 'Online booking for spas, salons and service businesses', 'lieusoft' ); ?></h1>
			<p class="fbp-hero__lead"><?php esc_html_e( 'Service Booking Manager turns WooCommerce into a complete booking system: customers pick a branch, service, duration, date and time in one popup, then pay through your normal checkout.', 'lieusoft' ); ?></p>
			<div class="fbp-hero__actions">
				<a class="btn btn--primary" href="#pricing"><?php esc_html_e( 'See pricing', 'lieusoft' ); ?></a>
				<a class="btn btn--outline" href="<?php echo esc_url( $sbm_demo ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Try the live demo', 'lieusoft' ); ?></a>
			</div>
			<ul class="fbp-hero__checks">
				<li><?php echo $fbp_check; // phpcs:ignore WordPress.Security.EscapeOutput ?><?php esc_html_e( 'Works with WooCommerce', 'lieusoft' ); ?></li>
				<li><?php echo $fbp_check; // phpcs:ignore WordPress.Security.EscapeOutput ?><?php esc_html_e( 'Branches & staff', 'lieusoft' ); ?></li>
				<li><?php echo $fbp_check; // phpcs:ignore WordPress.Security.EscapeOutput ?><?php esc_html_e( 'Key emailed instantly', 'lieusoft' ); ?></li>
			</ul>
		</div>
		<div class="fbp-hero__visual">
			<div class="fbp-window sbm-window">
				<div class="fbp-window__bar" aria-hidden="true"><i></i><i></i><i></i><span>yourspa.com</span></div>
				<?php echo $sbm_img( 'booking-popup', __( 'The Service Booking popup: choose a branch, service, duration, date and time', 'lieusoft' ), true ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			</div>
		</div>
	</div>
</section>

<section class="fbp-section" id="features">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'Features', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Everything a booking business needs', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'From the first click on "Book now" to the staff calendar and the payment, all inside your own WordPress site.', 'lieusoft' ); ?></p>
		</div>
		<div class="fbp-features">
			<?php foreach ( $sbm_features as $f ) : ?>
				<div class="fbp-feature">
					<?php echo $fbp_icon( $f[0] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					<h3><?php echo esc_html( $f[1] ); ?></h3>
					<p><?php echo esc_html( $f[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="fbp-section fbp-section--tint sbm-shots">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'See It In Action', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'A real booking site, built with this plugin', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'These screenshots come from our live demo — open it and book a test appointment yourself.', 'lieusoft' ); ?></p>
		</div>
		<div class="sbm-shots__grid">
			<figure class="sbm-shot">
				<div class="fbp-window"><div class="fbp-window__bar" aria-hidden="true"><i></i><i></i><i></i><span>yourspa.com/services</span></div><?php echo $sbm_img( 'booking-services', __( 'Service cards with durations, prices, pressure scale and Book Now buttons', 'lieusoft' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
				<figcaption><strong><?php esc_html_e( 'Service menu', 'lieusoft' ); ?></strong><?php esc_html_e( 'Every service with its durations, prices and a one-click Book Now.', 'lieusoft' ); ?></figcaption>
			</figure>
			<figure class="sbm-shot">
				<div class="fbp-window"><div class="fbp-window__bar" aria-hidden="true"><i></i><i></i><i></i><span>yourspa.com</span></div><?php echo $sbm_img( 'booking-site', __( 'Homepage of the demo spa site with a Book an Appointment button', 'lieusoft' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
				<figcaption><strong><?php esc_html_e( 'Booking from any button', 'lieusoft' ); ?></strong><?php esc_html_e( 'Add the booking popup to your header, hero or any page.', 'lieusoft' ); ?></figcaption>
			</figure>
		</div>
		<p class="sbm-shots__cta"><a class="btn btn--primary" href="<?php echo esc_url( $sbm_demo ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Open the live demo', 'lieusoft' ); ?></a></p>
	</div>
</section>

<section class="fbp-section" id="pricing">
	<div class="container">
		<div class="fbp-head">
			<span class="eyebrow"><?php esc_html_e( 'Pricing', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Try it free. Pick the plan that fits your sites.', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Every plan includes all features. Yearly plans renew each year, Lifetime is a single payment. Prices in USD.', 'lieusoft' ); ?></p>
		</div>
		<div class="fbp-plans">
			<?php foreach ( $sbm_plans as $plan ) : ?>
				<div class="fbp-plan<?php echo ! empty( $plan['featured'] ) ? ' fbp-plan--featured' : ''; ?>">
					<?php if ( ! empty( $plan['featured'] ) ) : ?><span class="fbp-plan__badge"><?php esc_html_e( 'Best value', 'lieusoft' ); ?></span><?php endif; ?>
					<div>
						<h3><?php echo esc_html( $plan['name'] ); ?></h3>
						<p class="fbp-plan__desc"><?php echo esc_html( $plan['desc'] ); ?></p>
					</div>
					<p class="fbp-plan__price"><strong>$<?php echo esc_html( $plan['price'] ); ?></strong><span><?php echo esc_html( $plan['period'] ); ?></span></p>
					<ul class="fbp-plan__list">
						<?php foreach ( $plan['items'] as $item ) : ?><li><?php echo $fbp_check; // phpcs:ignore WordPress.Security.EscapeOutput ?><?php echo esc_html( $item ); ?></li><?php endforeach; ?>
					</ul>
					<?php if ( isset( $plan['url'] ) ) : ?>
						<a class="btn btn--block btn--outline" href="<?php echo esc_url( $plan['url'] ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $plan['cta'] ); ?></a>
					<?php else : ?>
						<a class="btn btn--block <?php echo ! empty( $plan['featured'] ) ? 'btn--primary' : 'btn--outline'; ?>" href="<?php echo esc_url( lieusoft_buy_url( $sbm_download, $plan['price_id'] ) ); ?>" rel="nofollow"><?php echo esc_html( $plan['cta'] ); ?></a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<p class="fbp-plans__note"><?php esc_html_e( 'Secure card checkout with Stripe · License key emailed instantly · Requires WooCommerce', 'lieusoft' ); ?></p>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Do I need WooCommerce?', 'lieusoft' ), 'a' => __( 'Yes. Bookings use the WooCommerce cart and checkout, so customers can pay with any payment method your store already supports.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I try it before buying?', 'lieusoft' ), 'a' => __( 'Yes — the live demo has the full booking flow. Pick a branch, a service and a time slot just like a real customer.', 'lieusoft' ) ),
		array( 'q' => __( 'How do I get the plugin and my license key?', 'lieusoft' ), 'a' => __( 'Right after payment you get an email with the download link and your license key. Both are also on the confirmation page and in your Lieusoft account.', 'lieusoft' ) ),
		array( 'q' => __( 'What happens when a yearly plan ends?', 'lieusoft' ), 'a' => __( 'The plugin keeps working. Renew to keep getting updates and support.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I use it on more than one site?', 'lieusoft' ), 'a' => __( 'Pro Single and Lifetime cover one domain each. Pro 10 covers up to 10 domains — ideal for agencies.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you set it up for me?', 'lieusoft' ), 'a' => __( 'Yes. Our ready-made Service Booking Solution includes the website, hosting, setup and support, so you do not have to install anything.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'If you have any questions, our support team is always here to help you.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:info@lieusoft.com',
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Complete Website?', 'lieusoft' ),
	'desc'     => __( 'We also build complete business solutions.', 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
	'anchor'   => 'get-started',
) );

get_footer();
