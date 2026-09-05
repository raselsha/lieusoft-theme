<?php
/**
 * Template Name: Product — Doctor Appointment Plugin
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Doctor Appointment Plugin', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero', array(
	'title'            => __( 'Doctor Appointment', 'lieusoft' ),
	'desc'             => __( 'A complete appointment booking solution for doctors, clinics and hospitals.', 'lieusoft' ),
	'checklist'        => array( __( 'Online Appointment Booking', 'lieusoft' ), __( 'Secure Payments', 'lieusoft' ), __( 'Doctor & Schedule Management', 'lieusoft' ), __( 'Email & SMS Notification', 'lieusoft' ), __( 'Patient Management', 'lieusoft' ), __( 'Reports & Analytics', 'lieusoft' ) ),
	'screenshot_icon'  => 'stethoscope',
	'screenshot_label' => __( 'Clinic Dashboard Screenshot', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Features', 'lieusoft' ),
	'title'   => __( 'Everything You Need', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Doctors & Schedule', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Secure Payments', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Notifications', 'lieusoft' ), 'icon' => 'bell' ),
		array( 'title' => __( 'Patient Management', 'lieusoft' ), 'icon' => 'user' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery', array(
	'title' => __( 'See It In Action', 'lieusoft' ),
	'items' => array(
		array( 'label' => __( 'Booking Form', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'label' => __( 'Doctor List', 'lieusoft' ), 'icon' => 'stethoscope' ),
		array( 'label' => __( 'Time Slot', 'lieusoft' ), 'icon' => 'clock' ),
		array( 'label' => __( 'Appointment Calendar', 'lieusoft' ), 'icon' => 'calendar' ),
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
		array( 'q' => __( 'Can I manage multiple doctors and departments?', 'lieusoft' ), 'a' => __( "Yes, you can add multiple doctors, assign them to departments, and manage each one's own schedule.", 'lieusoft' ) ),
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
