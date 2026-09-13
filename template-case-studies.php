<?php
/**
 * Template Name: Case Studies
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Case Studies', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php get_template_part( 'template-parts/case-studies', 'hero' ); ?>

<?php
get_template_part( 'template-parts/case-studies', 'featured', array(
	'image'        => 'case-study-preview.png',
	'title'        => __( 'CozyThai – Thai Massage Booking Website', 'lieusoft' ),
	'client'       => __( 'CozyThai', 'lieusoft' ),
	'industry'     => __( 'Massage & Wellness', 'lieusoft' ),
	'location'     => __( 'Portugal', 'lieusoft' ),
	'duration'     => __( '2 Weeks', 'lieusoft' ),
	'overview'     => __( 'We built a complete booking website for CozyThai, including custom design, appointment booking system, domain, hosting, SSL, business email, and ongoing maintenance.', 'lieusoft' ),
	'delivered'    => array(
		__( 'Website Design', 'lieusoft' ),
		__( 'Appointment Booking', 'lieusoft' ),
		__( 'Domain', 'lieusoft' ),
		__( 'Hosting', 'lieusoft' ),
		__( 'SSL', 'lieusoft' ),
		__( 'Business Email', 'lieusoft' ),
		__( 'Technical Support', 'lieusoft' ),
	),
	'visit_url'    => 'https://cozythai.pt/',
	'solution_url' => home_url( '/service-booking-solution/' ),
) );

get_template_part( 'template-parts/case-studies', 'more', array(
	'items' => array(
		array(
			'icon'  => 'stethoscope',
			'title' => __( 'Doctor Appointment Website', 'lieusoft' ),
			'tags'  => array( __( 'Clinic Website', 'lieusoft' ), __( 'Appointment Booking', 'lieusoft' ), __( 'Patient Management', 'lieusoft' ) ),
			'url'   => home_url( '/doctor-appointment-solution/' ),
		),
		array(
			'icon'  => 'shirt',
			'title' => __( 'Tailor Management Website', 'lieusoft' ),
			'tags'  => array( __( 'Order Management', 'lieusoft' ), __( 'Measurements', 'lieusoft' ), __( 'Invoices', 'lieusoft' ) ),
			'url'   => home_url( '/tailor-shop-management-solution/' ),
		),
		array(
			'icon'  => 'calendar',
			'title' => __( 'Service Booking Website', 'lieusoft' ),
			'tags'  => array( __( 'Salon', 'lieusoft' ), __( 'Spa', 'lieusoft' ), __( 'Online Booking', 'lieusoft' ) ),
			'url'   => home_url( '/service-booking-solution/' ),
		),
	),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'Our Process', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Consultation', 'lieusoft' ), 'desc' => __( 'We learn about your business and goals.', 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Planning', 'lieusoft' ), 'desc' => __( 'We map out the scope, timeline and tech.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Development', 'lieusoft' ), 'desc' => __( 'We build your website and set up everything.', 'lieusoft' ), 'icon' => 'code' ),
		array( 'title' => __( 'Launch & Support', 'lieusoft' ), 'desc' => __( 'We launch and stay on for ongoing support.', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );

get_template_part( 'template-parts/case-studies', 'tech', array(
	'items' => array(
		array( 'label' => __( 'WordPress', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'label' => __( 'WooCommerce', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'label' => __( 'Elementor', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'label' => __( 'PHP', 'lieusoft' ), 'icon' => 'code' ),
		array( 'label' => __( 'MySQL', 'lieusoft' ), 'icon' => 'server' ),
		array( 'label' => __( 'Cloud Hosting', 'lieusoft' ), 'icon' => 'cloud' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-choose', array(
	'title' => __( 'Why Clients Choose Lieusoft', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Complete Business Solutions', 'lieusoft' ), 'desc' => __( 'Website, hosting, email and support — all from one team.', 'lieusoft' ), 'icon' => 'grid' ),
		array( 'title' => __( 'Professional Development', 'lieusoft' ), 'desc' => __( 'Clean, modern websites built the right way.', 'lieusoft' ), 'icon' => 'code' ),
		array( 'title' => __( 'Reliable Support', 'lieusoft' ), 'desc' => __( "We're reachable long after your site goes live.", 'lieusoft' ), 'icon' => 'headset' ),
		array( 'title' => __( 'Long-Term Partnership', 'lieusoft' ), 'desc' => __( 'We grow alongside your business, not just launch and leave.', 'lieusoft' ), 'icon' => 'trending-up' ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Build Your Business?', 'lieusoft' ),
	'desc'  => __( "Let's create a professional website that helps your business grow.", 'lieusoft' ),
) );

get_footer();
