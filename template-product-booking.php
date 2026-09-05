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
		<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Service Booking Plugin', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero', array(
	'title'            => __( 'Service Booking', 'lieusoft' ),
	'desc'             => __( 'A simple and powerful booking & appointment plugin for service-based businesses.', 'lieusoft' ),
	'checklist'        => array( __( 'Online Booking', 'lieusoft' ), __( 'Secure Payments', 'lieusoft' ), __( 'Staff & Schedule', 'lieusoft' ), __( 'Custom Fields', 'lieusoft' ), __( 'Email & SMS Notification', 'lieusoft' ), __( 'Reports & Analytics', 'lieusoft' ) ),
	'screenshot_icon'  => 'calendar',
	'screenshot_label' => __( 'Booking Dashboard Screenshot', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Features', 'lieusoft' ),
	'title'   => __( 'Everything You Need', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Staff & Schedule', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Secure Payments', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Notifications', 'lieusoft' ), 'icon' => 'bell' ),
		array( 'title' => __( 'Custom Fields', 'lieusoft' ), 'icon' => 'form' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery', array(
	'title' => __( 'See It In Action', 'lieusoft' ),
	'items' => array(
		array( 'label' => __( 'Booking Form', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'label' => __( 'Service List', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'label' => __( 'Staff Grid', 'lieusoft' ), 'icon' => 'users' ),
		array( 'label' => __( 'Calendar View', 'lieusoft' ), 'icon' => 'calendar' ),
	),
) );

get_template_part( 'template-parts/product', 'pricing', array(
	'title' => __( 'Simple Pricing', 'lieusoft' ),
	'desc'  => __( 'One time payment, lifetime updates and support.', 'lieusoft' ),
	'licenses' => array(
		array(
			'name'     => __( 'Regular License', 'lieusoft' ),
			'price'    => '4,999',
			'features' => array( __( 'Use on 1 Website', 'lieusoft' ), __( 'Lifetime Updates', 'lieusoft' ), __( '6 Months Support', 'lieusoft' ) ),
			'style'    => 'primary',
		),
		array(
			'name'     => __( 'Extended License', 'lieusoft' ),
			'price'    => '8,999',
			'features' => array( __( 'Use on Unlimited Websites', 'lieusoft' ), __( 'Lifetime Updates', 'lieusoft' ), __( '12 Months Support', 'lieusoft' ) ),
			'style'    => 'primary',
			'featured' => true,
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
	'title'    => __( 'Need a Complete Website?', 'lieusoft' ),
	'desc'     => __( 'We also build complete business solutions.', 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
	'btn_href' => '#',
	'anchor'   => 'get-started',
) );

get_footer();
