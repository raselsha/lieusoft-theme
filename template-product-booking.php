<?php
/**
 * Template Name: Product — Service Booking Plugin
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="#"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Service Booking Plugin', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero-booking' );

get_template_part( 'template-parts/solution', 'features', array(
	'title' => __( 'Everything You Need to Run Your Business', 'lieusoft' ),
	'desc'  => __( 'Powerful features to manage bookings, staff, payments and more.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'desc' => __( 'Allow customers to book appointments 24/7 from any device.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Staff & Schedule', 'lieusoft' ), 'desc' => __( 'Manage staff, working hours and availability schedules easily.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Secure Payments', 'lieusoft' ), 'desc' => __( 'Accept online payments with multiple gateways securely.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Notifications', 'lieusoft' ), 'desc' => __( 'Send email & SMS notifications for bookings and reminders.', 'lieusoft' ), 'icon' => 'bell' ),
		array( 'title' => __( 'Custom Fields', 'lieusoft' ), 'desc' => __( 'Add custom fields to collect information as per your needs.', 'lieusoft' ), 'icon' => 'form' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'Get detailed reports and insights to grow your business.', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery-booking' );

get_template_part( 'template-parts/product', 'pricing', array(
	'licenses' => array(
		array(
			'name'     => __( 'Regular License', 'lieusoft' ),
			'price'    => '4,999',
			'features' => array(
				__( 'Use on 1 Website', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( '6 Months Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'primary',
		),
		array(
			'name'     => __( 'Extended License', 'lieusoft' ),
			'price'    => '8,999',
			'features' => array(
				__( 'Use on Unlimited Websites', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( '12 Months Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'outline',
		),
	),
	'trust_items' => array(
		array(
			'icon'  => 'shield-check',
			'title' => __( '14-Day Money Back Guarantee', 'lieusoft' ),
			'desc'  => __( 'Not satisfied? Get a full refund within 14 days of purchase.', 'lieusoft' ),
		),
		array(
			'icon'  => 'lock',
			'title' => __( 'Secure & Trusted', 'lieusoft' ),
			'desc'  => __( 'Used by thousands of businesses worldwide.', 'lieusoft' ),
		),
		array(
			'icon'  => 'headset',
			'title' => __( 'Regular Updates', 'lieusoft' ),
			'desc'  => __( 'We add new features and improvements regularly.', 'lieusoft' ),
		),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I try before buying?', 'lieusoft' ), 'a' => __( 'Yes, you can test the live demo before purchasing a license.', 'lieusoft' ) ),
		array( 'q' => __( 'Will it work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, it is built to work with any properly coded WordPress theme.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I collect payments using this plugin?', 'lieusoft' ), 'a' => __( 'Yes, secure online payments are supported through multiple gateways.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide support?', 'lieusoft' ), 'a' => __( 'Yes, every license includes dedicated support for the covered period.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'Our support team is always ready to help you with any questions.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:hello@lieusoft.com',
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Ready to Simplify Your Bookings?', 'lieusoft' ),
	'desc'     => __( 'Get started with Service Booking and manage appointments effortlessly.', 'lieusoft' ),
	'icon'     => 'calendar',
	'btn_text' => __( 'Get Service Booking Now', 'lieusoft' ),
	'btn_href' => '#',
	'anchor'   => 'get-started',
) );

get_footer();
