<?php
/**
 * Template Name: Pricing
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Pricing', 'lieusoft' ); ?></span>
	</div>
</nav>

<section class="index-hero">
	<div class="container">
		<h1><?php esc_html_e( 'Simple & Transparent Pricing', 'lieusoft' ); ?></h1>
		<p><?php esc_html_e( "Choose the option that fits your business. Whether you need a complete business solution or a standalone plugin, we've got you covered.", 'lieusoft' ); ?></p>
	</div>
</section>

<?php
get_template_part( 'template-parts/pricing', 'solutions-table', array(
	'items' => array(
		array( 'name' => __( 'Doctor Clinic Website', 'lieusoft' ) ),
		array( 'name' => __( 'Tailor Shop Website', 'lieusoft' ) ),
		array( 'name' => __( 'Service Booking Website', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/pricing', 'services', array(
	'items' => array(
		array( 'title' => __( 'Website Development', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Custom Plugin Development', 'lieusoft' ), 'icon' => 'puzzle' ),
		array( 'title' => __( 'Managed Hosting', 'lieusoft' ), 'icon' => 'cloud' ),
		array( 'title' => __( 'Domain Registration', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Website Maintenance', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'icon' => 'envelope' ),
	),
) );

get_template_part( 'template-parts/pricing', 'plugins', array(
	'items' => array(
		array( 'title' => __( 'PDF Embed Viewer', 'lieusoft' ), 'desc' => __( '3D flipbook PDF viewer & embed for WordPress.', 'lieusoft' ), 'icon' => 'icon-open-book.png', 'accent' => 'blue', 'price' => '2,999', 'url' => home_url( '/pdf-embed-viewer/' ) ),
		array( 'title' => __( 'Service Booking Plugin', 'lieusoft' ), 'desc' => __( 'Complete booking & appointment solution for any service.', 'lieusoft' ), 'icon' => 'badge-calendar.png', 'accent' => 'green', 'price' => '4,999', 'url' => home_url( '/service-booking-plugin/' ) ),
		array( 'title' => __( 'Doctor Appointment Plugin', 'lieusoft' ), 'desc' => __( 'Appointment booking system for clinics and hospitals.', 'lieusoft' ), 'icon' => 'badge-doctor.png', 'accent' => 'purple', 'price' => '4,999', 'url' => home_url( '/doctor-appointment-plugin/' ) ),
		array( 'title' => __( 'Tailor Order Plugin', 'lieusoft' ), 'desc' => __( 'Manage tailor orders, customers, measurements and deliveries.', 'lieusoft' ), 'icon' => 'badge-shirt.png', 'accent' => 'orange', 'price' => '4,999', 'url' => home_url( '/tailor-order-management-plugin/' ) ),
	),
) );

get_template_part( 'template-parts/pricing', 'compare' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Do I need my own hosting?', 'lieusoft' ), 'a' => __( 'No, managed hosting is included with every business solution. You can also bring your own if you prefer.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you migrate my website?', 'lieusoft' ), 'a' => __( 'Yes, we can migrate an existing website to a new solution or hosting with no downtime.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide support?', 'lieusoft' ), 'a' => __( 'Yes, every business solution includes ongoing support, and every plugin includes updates.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I request custom features?', 'lieusoft' ), 'a' => __( 'Yes, tell us what you need during your consultation and we will scope it for you.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Not Sure Which Option is Right?', 'lieusoft' ),
	'desc'     => __( "Let's discuss your business.", 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
) );

get_footer();
