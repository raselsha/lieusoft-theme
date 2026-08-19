<?php
/**
 * Template Name: Solution — Doctor Appointment
 *
 * Product landing page for the Doctor Appointment solution.
 * Hero device mockup is built in CSS/SVG (no real screenshot exists yet for
 * this not-yet-live page) — swap `template-parts/solution-hero.php`'s
 * `.device-mock` markup for a real image whenever one is ready.
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Doctor Appointment Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero' );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Built for Modern Clinics', 'lieusoft' ),
	'title'   => __( 'Everything You Need to Run Your Clinic Efficiently', 'lieusoft' ),
	'desc'    => __( 'Our solution helps you save time, reduce manual work and provide a better experience for your patients.', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Online Booking', 'lieusoft' ), 'desc' => __( 'Patients can book appointments online 24/7 from any device.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Patient Management', 'lieusoft' ), 'desc' => __( 'Store patient records, history, documents and medical information.', 'lieusoft' ), 'icon' => 'user' ),
		array( 'title' => __( 'Doctor Management', 'lieusoft' ), 'desc' => __( 'Manage doctors, their schedules, availability and departments.', 'lieusoft' ), 'icon' => 'stethoscope' ),
		array( 'title' => __( 'SMS & Email Alerts', 'lieusoft' ), 'desc' => __( 'Automatic SMS and email notifications for appointments.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Payments', 'lieusoft' ), 'desc' => __( 'Accept online payments and manage fees securely.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'View detailed reports and grow your clinic with data.', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'experience' );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'eyebrow' => __( 'Easy Steps', 'lieusoft' ),
	'title'   => __( 'How It Works', 'lieusoft' ),
	'desc'    => __( 'Get started in simple steps and take your clinic online.', 'lieusoft' ),
	'steps'   => array(
		array( 'title' => __( 'We Setup Your Website', 'lieusoft' ), 'desc' => __( 'We create your clinic website with all features you need.', 'lieusoft' ), 'icon' => 'briefcase' ),
		array( 'title' => __( 'Manage & Customize', 'lieusoft' ), 'desc' => __( 'Add doctors, services, schedules and customize your settings.', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Patients Book Online', 'lieusoft' ), 'desc' => __( 'Patients visit your website and book appointments easily.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'You Grow Your Clinic', 'lieusoft' ), 'desc' => __( 'Manage appointments, patients, and grow your business.', 'lieusoft' ), 'icon' => 'trending-up' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'Everything you need to run your clinic online.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'    => '49,999',
	'features' => array(
		__( 'Complete Clinic Website', 'lieusoft' ),
		__( 'Patient Management', 'lieusoft' ),
		__( 'Appointment Booking', 'lieusoft' ),
		__( 'SMS & Email Notifications', 'lieusoft' ),
		__( 'Up to 5 Doctors', 'lieusoft' ),
		__( '1 Year Support & Updates', 'lieusoft' ),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'How long does it take to setup my clinic website?', 'lieusoft' ), 'a' => __( 'Usually it takes 3-5 working days to complete your website and make it live.', 'lieusoft' ) ),
		array( 'q' => __( 'Can patients reschedule or cancel appointments?', 'lieusoft' ), 'a' => __( "Yes, patients can reschedule or cancel their own appointments from their booking confirmation, subject to your clinic's cancellation policy.", 'lieusoft' ) ),
		array( 'q' => __( 'Can I manage multiple doctors and departments?', 'lieusoft' ), 'a' => __( "Yes, you can add multiple doctors, assign them to departments, and manage each one's own schedule and availability.", 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide training and support?', 'lieusoft' ), 'a' => __( 'Yes, every plan includes onboarding training plus ongoing technical support.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Take Your Clinic Online?', 'lieusoft' ),
	'desc'  => __( 'Let us build a professional website for your clinic and help you grow.', 'lieusoft' ),
) );

get_footer();
