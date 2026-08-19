<?php
/**
 * Template Name: Solution — Service Booking
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Service Booking Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero-service' );

get_template_part( 'template-parts/solution', 'features', array(
	'title' => __( 'Powerful Features to Simplify Your Business', 'lieusoft' ),
	'desc'  => __( 'Everything you need to manage your services and appointments in one place.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'desc' => __( 'Allow your customers to book appointments online 24/7 from any device.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Staff & Schedule', 'lieusoft' ), 'desc' => __( 'Manage staff, working hours and appointments schedules easily.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Services Management', 'lieusoft' ), 'desc' => __( 'Create unlimited services with price, duration and extra options.', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'title' => __( 'Secure Payments', 'lieusoft' ), 'desc' => __( 'Accept online payments and manage transactions securely.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Notifications', 'lieusoft' ), 'desc' => __( 'SMS and email notifications for appointments and reminders.', 'lieusoft' ), 'icon' => 'bell' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'Get detailed reports and insights to grow your business.', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'experience-service' );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'eyebrow' => __( 'Easy Steps', 'lieusoft' ),
	'title'   => __( 'How It Works', 'lieusoft' ),
	'desc'    => __( 'Get started in simple steps and take your service business online.', 'lieusoft' ),
	'steps'   => array(
		array( 'title' => __( 'Setup Your Business', 'lieusoft' ), 'desc' => __( 'Add your services, staff, working hours and settings.', 'lieusoft' ), 'icon' => 'briefcase' ),
		array( 'title' => __( 'Customers Book Online', 'lieusoft' ), 'desc' => __( 'Customers choose service, date, time and book instantly.', 'lieusoft' ), 'icon' => 'monitor' ),
		array( 'title' => __( 'Manage Bookings', 'lieusoft' ), 'desc' => __( 'Get notified and manage all appointments from dashboard.', 'lieusoft' ), 'icon' => 'bell' ),
		array( 'title' => __( 'Get Paid & Grow', 'lieusoft' ), 'desc' => __( 'Accept payments, provide great service and grow your business.', 'lieusoft' ), 'icon' => 'credit-card' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'Everything you need to run your service business successfully.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'    => '49,999',
	'features' => array(
		__( 'Complete Service Booking Website', 'lieusoft' ),
		__( 'Unlimited Services', 'lieusoft' ),
		__( 'Staff & Schedule Management', 'lieusoft' ),
		__( 'Online Payments', 'lieusoft' ),
		__( 'SMS & Email Notifications', 'lieusoft' ),
		__( 'Reports & Analytics', 'lieusoft' ),
	),
	'custom_desc' => __( 'We can build a custom solution with extra features that perfectly fit your business needs.', 'lieusoft' ),
	'photo'       => 'pricing-photo-service.jpg',
	'photo_alt'   => __( 'Cleaning service professional', 'lieusoft' ),
	'photo_icon'  => 'scissors',
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can customers book appointments online?', 'lieusoft' ), 'a' => __( 'Yes, customers can choose a service, pick a date and time, and confirm their booking instantly from your website.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I manage multiple staff and services?', 'lieusoft' ), 'a' => __( 'Yes, you can add unlimited staff members and services, each with their own schedule and pricing.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you support online payments?', 'lieusoft' ), 'a' => __( 'Yes, customers can pay securely online at the time of booking.', 'lieusoft' ) ),
		array( 'q' => __( 'Will I get SMS/email notifications?', 'lieusoft' ), 'a' => __( 'Yes, both you and your customers get automatic SMS and email notifications and reminders.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Take Your Service Business Online?', 'lieusoft' ),
	'desc'  => __( 'Let us build a professional website that helps you get more bookings and grow your business.', 'lieusoft' ),
) );

get_footer();
