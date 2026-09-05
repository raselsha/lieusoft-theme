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

get_template_part( 'template-parts/solution', 'problems', array(
	'title'     => __( 'Still Booking by Phone & WhatsApp?', 'lieusoft' ),
	'problems'  => array( __( 'Missed Messages', 'lieusoft' ), __( 'Double Bookings', 'lieusoft' ), __( 'No Reminders', 'lieusoft' ), __( 'Manual Payment Collection', 'lieusoft' ) ),
	'solutions' => array( __( 'Online Booking', 'lieusoft' ), __( 'Auto Confirmations', 'lieusoft' ), __( 'SMS Reminders', 'lieusoft' ), __( 'Online Payments', 'lieusoft' ) ),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'Everything Your Business Needs', 'lieusoft' ),
	'desc'    => __( 'Everything you need to manage your services and appointments in one place.', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'desc' => __( 'Customers book online 24/7 from any device.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Staff & Schedule', 'lieusoft' ), 'desc' => __( 'Manage staff, shifts and availability.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Service Management', 'lieusoft' ), 'desc' => __( 'Create services with price and duration.', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'title' => __( 'SMS Notifications', 'lieusoft' ), 'desc' => __( 'Automatic reminders for every booking.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Secure Payments', 'lieusoft' ), 'desc' => __( 'Accept payments securely online.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Customer Reviews', 'lieusoft' ), 'desc' => __( 'Collect ratings after every booking.', 'lieusoft' ), 'icon' => 'star' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'Track bookings, revenue and growth.', 'lieusoft' ), 'icon' => 'bar-chart' ),
		array( 'title' => __( 'Dashboard', 'lieusoft' ), 'desc' => __( 'One clean screen for your whole business.', 'lieusoft' ), 'icon' => 'monitor' ),
	),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'How It Works', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Customer Books', 'lieusoft' ), 'desc' => __( 'Chooses a service and time online.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Confirmation Sent', 'lieusoft' ), 'desc' => __( 'Automatic SMS & email confirmation.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Service Delivered', 'lieusoft' ), 'desc' => __( 'Staff completes the booking.', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'title' => __( 'Payment Collected', 'lieusoft' ), 'desc' => __( 'Paid online or on the spot.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Review Requested', 'lieusoft' ), 'desc' => __( 'Customer asked to rate the visit.', 'lieusoft' ), 'icon' => 'star' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'dashboard-preview', array(
	'desc'   => __( 'Everything you need to run your business, in one clean screen.', 'lieusoft' ),
	'stats'  => array(
		array( 'value' => '1,250', 'label' => __( 'Total Bookings', 'lieusoft' ) ),
		array( 'value' => '850', 'label' => __( 'Total Customers', 'lieusoft' ) ),
		array( 'value' => '$24,500', 'label' => __( 'Total Revenue', 'lieusoft' ) ),
		array( 'value' => '48', 'label' => __( "Today's Bookings", 'lieusoft' ) ),
	),
	'thumbs' => array(
		array( 'label' => __( 'Bookings', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'label' => __( 'Staff', 'lieusoft' ), 'icon' => 'users' ),
		array( 'label' => __( 'Customers', 'lieusoft' ), 'icon' => 'user' ),
		array( 'label' => __( 'Reports', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-choose' );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'    => '35,000',
	'includes' => array(
		__( 'Complete booking website', 'lieusoft' ),
		__( 'Online booking & payments', 'lieusoft' ),
		__( 'Staff & service management', 'lieusoft' ),
		__( '1 year support & updates', 'lieusoft' ),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I take online payment?', 'lieusoft' ), 'a' => __( 'Yes, customers can pay securely online at the time of booking.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I manage multiple staff?', 'lieusoft' ), 'a' => __( 'Yes, you can add unlimited staff members, each with their own schedule.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting is included in every plan.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide training?', 'lieusoft' ), 'a' => __( 'Yes, every plan includes onboarding training for your staff.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Launch Your Booking Website?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your business requirements.", 'lieusoft' ),
) );

get_footer();
