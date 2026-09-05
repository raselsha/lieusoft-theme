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

get_template_part( 'template-parts/solution', 'problems', array(
	'title'     => __( 'Your Clinic Still Uses Phone Calls?', 'lieusoft' ),
	'problems'  => array( __( 'Missed Appointments', 'lieusoft' ), __( 'Paper Register', 'lieusoft' ), __( 'Manual Schedule', 'lieusoft' ), __( 'No Online Booking', 'lieusoft' ) ),
	'solutions' => array( __( 'Online Booking', 'lieusoft' ), __( 'SMS Reminder', 'lieusoft' ), __( 'Doctor Schedule', 'lieusoft' ), __( 'Easy Dashboard', 'lieusoft' ) ),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'Everything Your Clinic Needs', 'lieusoft' ),
	'desc'    => __( 'Our solution helps you save time, reduce manual work and provide a better experience for your patients.', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Appointment Booking', 'lieusoft' ), 'desc' => __( 'Patients book online 24/7 from any device.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Doctor Schedule', 'lieusoft' ), 'desc' => __( 'Manage doctors, shifts and availability.', 'lieusoft' ), 'icon' => 'stethoscope' ),
		array( 'title' => __( 'Patient Management', 'lieusoft' ), 'desc' => __( 'Store history, records and documents.', 'lieusoft' ), 'icon' => 'user' ),
		array( 'title' => __( 'SMS Notification', 'lieusoft' ), 'desc' => __( 'Automatic reminders for every visit.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Reports', 'lieusoft' ), 'desc' => __( 'Track visits, revenue and growth.', 'lieusoft' ), 'icon' => 'bar-chart' ),
		array( 'title' => __( 'Payments', 'lieusoft' ), 'desc' => __( 'Accept payments securely online.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Prescription', 'lieusoft' ), 'desc' => __( 'Digital prescriptions, saved per visit.', 'lieusoft' ), 'icon' => 'file-text' ),
		array( 'title' => __( 'Dashboard', 'lieusoft' ), 'desc' => __( 'One clean screen for your whole clinic.', 'lieusoft' ), 'icon' => 'monitor' ),
	),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'How It Works', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Patient Books', 'lieusoft' ), 'desc' => __( 'Chooses a doctor and time online.', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Doctor Confirms', 'lieusoft' ), 'desc' => __( 'Appointment appears on the schedule.', 'lieusoft' ), 'icon' => 'stethoscope' ),
		array( 'title' => __( 'SMS Sent', 'lieusoft' ), 'desc' => __( 'Patient gets a reminder before the visit.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Visit Complete', 'lieusoft' ), 'desc' => __( 'Doctor marks the appointment done.', 'lieusoft' ), 'icon' => 'check-circle' ),
		array( 'title' => __( 'Report Saved', 'lieusoft' ), 'desc' => __( 'Visit history stored for next time.', 'lieusoft' ), 'icon' => 'file-text' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'dashboard-preview', array(
	'desc'   => __( 'Everything you need to run your clinic, in one clean screen.', 'lieusoft' ),
	'stats'  => array(
		array( 'value' => '1,248', 'label' => __( 'Total Appointments', 'lieusoft' ) ),
		array( 'value' => '956', 'label' => __( 'Total Patients', 'lieusoft' ) ),
		array( 'value' => '$24,560', 'label' => __( 'Total Revenue', 'lieusoft' ) ),
		array( 'value' => '32', 'label' => __( "Today's Appointments", 'lieusoft' ) ),
	),
	'thumbs' => array(
		array( 'label' => __( 'Appointments', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'label' => __( 'Doctors', 'lieusoft' ), 'icon' => 'stethoscope' ),
		array( 'label' => __( 'Patients', 'lieusoft' ), 'icon' => 'user' ),
		array( 'label' => __( 'Reports', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-choose' );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'    => '35,000',
	'includes' => array(
		__( 'Complete clinic website', 'lieusoft' ),
		__( 'Online appointment system', 'lieusoft' ),
		__( 'Doctor & patient management', 'lieusoft' ),
		__( '1 year support & updates', 'lieusoft' ),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I take online payment?', 'lieusoft' ), 'a' => __( 'Yes, online payments can be enabled through supported payment gateways.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I add multiple doctors?', 'lieusoft' ), 'a' => __( "Yes, you can add multiple doctors, each with their own schedule and availability.", 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting is included in every plan.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide training?', 'lieusoft' ), 'a' => __( 'Yes, every plan includes onboarding training for your staff.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Launch Your Clinic Website?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your clinic requirements.", 'lieusoft' ),
) );

get_footer();
