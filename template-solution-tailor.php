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

get_template_part( 'template-parts/solution', 'problems', array(
	'title'     => __( 'Your Tailor Shop Still Runs on Paper?', 'lieusoft' ),
	'problems'  => array( __( 'Lost Order Details', 'lieusoft' ), __( 'Paper Measurement Book', 'lieusoft' ), __( 'Missed Deliveries', 'lieusoft' ), __( 'No Order Tracking', 'lieusoft' ) ),
	'solutions' => array( __( 'Digital Order Records', 'lieusoft' ), __( 'Saved Measurements', 'lieusoft' ), __( 'Delivery Reminders', 'lieusoft' ), __( 'Order Status Dashboard', 'lieusoft' ) ),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'Everything Your Tailor Shop Needs', 'lieusoft' ),
	'desc'    => __( 'All the tools you need to manage your shop operations in one place.', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Order Management', 'lieusoft' ), 'desc' => __( 'Create, track and manage orders end to end.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Body Measurements', 'lieusoft' ), 'desc' => __( 'Save customer measurements for every order.', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'title' => __( 'Customer Management', 'lieusoft' ), 'desc' => __( 'Keep customer profiles and order history.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Fabric & Items', 'lieusoft' ), 'desc' => __( 'Manage fabrics, designs and pricing.', 'lieusoft' ), 'icon' => 'shirt' ),
		array( 'title' => __( 'Invoice & Payment', 'lieusoft' ), 'desc' => __( 'Generate invoices and track due amounts.', 'lieusoft' ), 'icon' => 'file-text' ),
		array( 'title' => __( 'Delivery Tracking', 'lieusoft' ), 'desc' => __( 'Schedule and notify on delivery dates.', 'lieusoft' ), 'icon' => 'truck' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'See sales trends and popular items.', 'lieusoft' ), 'icon' => 'bar-chart' ),
		array( 'title' => __( 'Dashboard', 'lieusoft' ), 'desc' => __( 'One clean screen for your whole shop.', 'lieusoft' ), 'icon' => 'monitor' ),
	),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'How It Works', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Order Placed', 'lieusoft' ), 'desc' => __( 'Customer order created with details.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Measurements Taken', 'lieusoft' ), 'desc' => __( 'Saved to the customer profile.', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'title' => __( 'In Progress', 'lieusoft' ), 'desc' => __( 'Order moves through your workflow.', 'lieusoft' ), 'icon' => 'shirt' ),
		array( 'title' => __( 'Ready for Delivery', 'lieusoft' ), 'desc' => __( 'Customer notified automatically.', 'lieusoft' ), 'icon' => 'truck' ),
		array( 'title' => __( 'Delivered & Paid', 'lieusoft' ), 'desc' => __( 'Invoice settled, order closed.', 'lieusoft' ), 'icon' => 'check-circle' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'desc' => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'dashboard-preview', array(
	'desc'   => __( 'Everything you need to run your shop, in one clean screen.', 'lieusoft' ),
	'stats'  => array(
		array( 'value' => '1,156', 'label' => __( 'Total Orders', 'lieusoft' ) ),
		array( 'value' => '842', 'label' => __( 'Total Customers', 'lieusoft' ) ),
		array( 'value' => '$19,850', 'label' => __( 'Total Revenue', 'lieusoft' ) ),
		array( 'value' => '28', 'label' => __( 'Pending Orders', 'lieusoft' ) ),
	),
	'thumbs' => array(
		array( 'label' => __( 'Orders', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'label' => __( 'Customers', 'lieusoft' ), 'icon' => 'users' ),
		array( 'label' => __( 'Measurements', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'label' => __( 'Reports', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-choose' );

get_template_part( 'template-parts/solution', 'pricing', array(
	'price'    => '35,000',
	'includes' => array(
		__( 'Complete tailor shop website', 'lieusoft' ),
		__( 'Order & measurement system', 'lieusoft' ),
		__( 'Customer & delivery management', 'lieusoft' ),
		__( '1 year support & updates', 'lieusoft' ),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I take online payment?', 'lieusoft' ), 'a' => __( 'Yes, online payments can be enabled through supported payment gateways.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I track fabric inventory?', 'lieusoft' ), 'a' => __( 'Yes, fabrics and items are tracked alongside orders and pricing.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting is included in every plan.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide training?', 'lieusoft' ), 'a' => __( 'Yes, every plan includes onboarding training for your staff.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Digitize Your Tailor Shop?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your shop's requirements.", 'lieusoft' ),
) );

get_footer();
