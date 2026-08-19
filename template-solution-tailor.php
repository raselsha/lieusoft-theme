<?php
/**
 * Template Name: Solution — Tailor Shop Management
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Tailor Shop Management Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero-tailor' );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Everything You Need', 'lieusoft' ),
	'title'   => __( 'Everything You Need to Run Your Tailor Shop', 'lieusoft' ),
	'desc'    => __( 'All the tools you need to manage your shop operations in one place.', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Order Management', 'lieusoft' ), 'desc' => __( 'Create, track and manage customer orders from start to finish.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Body Measurements', 'lieusoft' ), 'desc' => __( 'Store and manage customer measurements securely for future orders.', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'title' => __( 'Invoice & Payment', 'lieusoft' ), 'desc' => __( 'Generate invoices, track payments and manage due amounts.', 'lieusoft' ), 'icon' => 'file-text' ),
		array( 'title' => __( 'Delivery Management', 'lieusoft' ), 'desc' => __( 'Schedule deliveries and notify customers when orders are ready.', 'lieusoft' ), 'icon' => 'truck' ),
		array( 'title' => __( 'Customer Management', 'lieusoft' ), 'desc' => __( 'Maintain customer profile, order history and communication.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'View sales reports, popular items and business insights to grow more.', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'experience-tailor' );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'eyebrow' => __( 'Easy Steps', 'lieusoft' ),
	'title'   => __( 'How It Works', 'lieusoft' ),
	'desc'    => __( 'Get started in simple steps and manage your shop like a pro.', 'lieusoft' ),
	'steps'   => array(
		array( 'title' => __( 'Add Orders', 'lieusoft' ), 'desc' => __( 'Create new orders and add customer details.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Take Measurements', 'lieusoft' ), 'desc' => __( 'Record body measurements and save for future.', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'title' => __( 'Generate Invoice', 'lieusoft' ), 'desc' => __( 'Create invoice and collect payments easily.', 'lieusoft' ), 'icon' => 'file-text' ),
		array( 'title' => __( 'Deliver & Complete', 'lieusoft' ), 'desc' => __( 'Deliver on time and keep customers happy.', 'lieusoft' ), 'icon' => 'truck' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'Everything you get with our Tailor Shop Solution.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'     => '49,999',
	'features'  => array(
		__( 'Complete Tailor Website', 'lieusoft' ),
		__( 'Order Management', 'lieusoft' ),
		__( 'Measurement Management', 'lieusoft' ),
		__( 'Invoice & Payment', 'lieusoft' ),
		__( 'Delivery Management', 'lieusoft' ),
		__( '1 Year Support & Updates', 'lieusoft' ),
	),
	'photo'     => 'solution-tailor-bg.png',
	'photo_alt' => __( 'Tailor shop owner', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Take Your Tailor Shop Online?', 'lieusoft' ),
	'desc'  => __( 'Let us build a professional website for your business and help you grow.', 'lieusoft' ),
) );

get_footer();
