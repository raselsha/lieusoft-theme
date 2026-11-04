<?php
/**
 * Template Name: Pricing
 *
 * Real prices: business solutions (1/2/3/5-year plans, same for all three
 * solutions), plugin licenses (must match each product page's pricing),
 * and quote-based services.
 */

get_header();

$lieusoft_plugin_licenses = array(
	'pdf-embed-viewer' => array(
		array( 'name' => __( 'Free', 'lieusoft' ), 'currency' => '$', 'price' => '0', 'period' => __( '/ forever', 'lieusoft' ), 'url' => 'https://downloads.wordpress.org/plugin/pdf-embed-viewer.zip', 'cta' => __( 'Download free', 'lieusoft' ), 'features' => array( __( 'Unlimited PDFs', 'lieusoft' ), __( 'Community support', 'lieusoft' ) ) ),
		array( 'name' => __( 'Pro Single', 'lieusoft' ), 'currency' => '$', 'price' => '22', 'period' => __( '/ year', 'lieusoft' ), 'url' => lieusoft_buy_url( 390, 1 ), 'features' => array( __( 'Use on 1 domain', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ) ),
		array( 'name' => __( 'Pro 10', 'lieusoft' ), 'currency' => '$', 'price' => '49', 'period' => __( '/ year', 'lieusoft' ), 'url' => lieusoft_buy_url( 390, 2 ), 'features' => array( __( 'Use on 10 domains', 'lieusoft' ), __( '1 year of updates & support', 'lieusoft' ) ), 'featured' => true ),
		array( 'name' => __( 'Lifetime', 'lieusoft' ), 'currency' => '$', 'price' => '79', 'period' => __( 'one time', 'lieusoft' ), 'url' => lieusoft_buy_url( 390, 3 ), 'features' => array( __( 'Unlimited domains', 'lieusoft' ), __( 'Lifetime updates & support', 'lieusoft' ) ) ),
	),
	'default'          => array(
		array( 'name' => __( 'Regular License', 'lieusoft' ), 'price' => '4,999', 'features' => array( __( 'Use on 1 website', 'lieusoft' ), __( 'Lifetime updates', 'lieusoft' ), __( '6 months support', 'lieusoft' ) ) ),
		array( 'name' => __( 'Extended License', 'lieusoft' ), 'price' => '8,999', 'features' => array( __( 'Use on unlimited websites', 'lieusoft' ), __( 'Lifetime updates', 'lieusoft' ), __( '12 months support', 'lieusoft' ) ), 'featured' => true ),
	),
);

$lieusoft_plugins = array();
foreach ( lieusoft_get_plugins() as $plugin ) {
	$slug                 = basename( (string) wp_parse_url( $plugin['url'], PHP_URL_PATH ) ); // Last segment, so a /bn/ or /ar/ prefix doesn't matter.
	$plugin['licenses']   = $lieusoft_plugin_licenses[ $slug ] ?? $lieusoft_plugin_licenses['default'];
	$lieusoft_plugins[]   = $plugin;
}
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Pricing', 'lieusoft' ); ?></span>
	</div>
</nav>

<section class="index-hero pricing-hero">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'Pricing', 'lieusoft' ); ?></span>
		<h1><?php esc_html_e( 'Simple, Honest Pricing', 'lieusoft' ); ?></h1>
		<p><?php esc_html_e( 'Clear prices for our ready-made business solutions and WordPress plugins, and a fixed quote for any custom work.', 'lieusoft' ); ?></p>
		<nav class="pricing-jump" aria-label="<?php esc_attr_e( 'Pricing sections', 'lieusoft' ); ?>">
			<a href="#solutions"><?php echo lieusoft_icon( 'briefcase' ); ?><span><strong><?php esc_html_e( 'Business Solutions', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'From ৳12,000/yr + ৳10,000 setup', 'lieusoft' ); ?></small></span></a>
			<a href="#plugins"><?php echo lieusoft_icon( 'puzzle' ); ?><span><strong><?php esc_html_e( 'WordPress Plugins', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Flipbook free · Pro from $22 / year', 'lieusoft' ); ?></small></span></a>
			<a href="#services"><?php echo lieusoft_icon( 'code' ); ?><span><strong><?php esc_html_e( 'Services', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Fixed quote per project', 'lieusoft' ); ?></small></span></a>
		</nav>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'pricing-plans', array(
	'id'       => 'solutions',
	'title'    => __( 'Business Solution Plans', 'lieusoft' ),
	'desc'     => __( 'A complete website and management system for your business, with hosting, domain and support. One price for every solution — the longer the plan, the less you pay per year.', 'lieusoft' ),
	'links'    => array(
		array( 'label' => __( 'Doctor Appointment', 'lieusoft' ), 'url' => home_url( '/doctor-appointment-solution/' ) ),
		array( 'label' => __( 'Tailor Shop Management', 'lieusoft' ), 'url' => home_url( '/tailor-shop-management-solution/' ) ),
		array( 'label' => __( 'Service Booking', 'lieusoft' ), 'url' => home_url( '/service-booking-solution/' ) ),
	),
	'plans'    => array(
		array( 'name' => __( '1 Year', 'lieusoft' ), 'tagline' => __( 'Get started', 'lieusoft' ), 'price' => '12,000', 'period' => '', 'note' => __( '৳12,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '2 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳2,000', 'lieusoft' ), 'price' => '22,000', 'period' => '', 'note' => __( '৳11,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '3 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳6,000', 'lieusoft' ), 'price' => '30,000', 'period' => '', 'note' => __( '৳10,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '5 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳15,000', 'lieusoft' ), 'price' => '45,000', 'period' => '', 'note' => __( '৳9,000 per year', 'lieusoft' ), 'featured' => true, 'badge' => __( 'Best Value', 'lieusoft' ) ),
	),
	'includes' => array(
		__( 'Business website', 'lieusoft' ),
		__( 'Management system (appointments, orders or bookings)', 'lieusoft' ),
		__( 'Hosting & domain for the full plan', 'lieusoft' ),
		__( 'SSL certificate', 'lieusoft' ),
		__( 'Business email', 'lieusoft' ),
		__( 'Staff training', 'lieusoft' ),
		__( 'Support & updates for the full plan', 'lieusoft' ),
		__( 'Pay once the system is live', 'lieusoft' ),
	),
	'footnote' => __( 'A one-time installation fee of ৳10,000 applies to every plan. Savings are compared with paying ৳12,000 every year. Renewal after your plan ends is priced separately — ask us for the current rate.', 'lieusoft' ),
) );

get_template_part( 'template-parts/pricing', 'plugin-licenses', array( 'items' => $lieusoft_plugins ) );

get_template_part( 'template-parts/pricing', 'services', array(
	'items' => array(
		array( 'title' => __( 'Website Development', 'lieusoft' ), 'desc' => __( 'A custom WordPress website designed and built for your business.', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Custom Plugin Development', 'lieusoft' ), 'desc' => __( 'A WordPress plugin built around your exact workflow.', 'lieusoft' ), 'icon' => 'puzzle' ),
		array( 'title' => __( 'Website Maintenance', 'lieusoft' ), 'desc' => __( 'Updates, backups, security checks and small fixes, every month.', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Managed Hosting & Domain', 'lieusoft' ), 'desc' => __( 'Fast, secure hosting and domain registration, managed for you.', 'lieusoft' ), 'icon' => 'cloud' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'desc' => __( 'Professional email addresses on your own domain, set up for your team.', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Business Automation', 'lieusoft' ), 'desc' => __( 'n8n workflows that connect your tools and remove repetitive work.', 'lieusoft' ), 'icon' => 'infinity' ),
	),
) );

get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'What does a business solution plan include?', 'lieusoft' ), 'a' => __( 'The website, the management system for your business, hosting, domain, SSL, business email, staff training, and support and updates — all for the length of the plan you choose.', 'lieusoft' ) ),
		array( 'q' => __( 'Is the price the same for every solution?', 'lieusoft' ), 'a' => __( 'Yes. Doctor Appointment, Tailor Shop Management and Service Booking all use the same 1, 2, 3 and 5 year plans.', 'lieusoft' ) ),
		array( 'q' => __( 'Is there an installation fee?', 'lieusoft' ), 'a' => __( 'Yes — a one-time installation fee of ৳10,000 for every plan. It covers setting up your website, management system, domain, hosting and business email. You pay it once, on top of the plan you choose.', 'lieusoft' ) ),
		array( 'q' => __( 'When do I pay for a solution?', 'lieusoft' ), 'a' => __( 'After your system is set up and live. You choose the plan during the consultation.', 'lieusoft' ) ),
		array( 'q' => __( 'What happens when my plan ends?', 'lieusoft' ), 'a' => __( 'You can renew to keep your website, system, hosting and domain running. Renewal is priced separately — we will share the rate before your plan ends.', 'lieusoft' ) ),
		array( 'q' => __( 'Are plugin licenses a one-time payment?', 'lieusoft' ), 'a' => __( 'Flipbook Pro has yearly plans (Single and Pro 10) and a one-time Lifetime plan, paid securely by card through Stripe with the key emailed instantly. The other plugins are a one-time payment.', 'lieusoft' ) ),
		array( 'q' => __( 'How are services priced?', 'lieusoft' ), 'a' => __( 'After a free consultation we send a written scope and a fixed quote. Work only starts once you approve it.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Not Sure Which Option is Right?', 'lieusoft' ),
	'desc'     => __( "Tell us about your business and we'll recommend the best fit — free.", 'lieusoft' ),
	'btn_text' => __( 'Book Free Consultation', 'lieusoft' ),
) );

get_footer();
