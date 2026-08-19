<?php
/**
 * Template Name: Product — Tailor Management Plugin
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="#"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Tailor Management Plugin', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero-tailor' );

get_template_part( 'template-parts/solution', 'features', array(
	'title' => __( 'Powerful Features', 'lieusoft' ),
	'desc'  => __( 'Everything you need to manage your tailoring business.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Order Management', 'lieusoft' ), 'desc' => __( 'Create, track and manage orders from start to delivery.', 'lieusoft' ), 'icon' => 'building' ),
		array( 'title' => __( 'Customer Management', 'lieusoft' ), 'desc' => __( 'Store customer details, contact info and order history.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Measurements', 'lieusoft' ), 'desc' => __( 'Save body measurements and fitting details for perfect orders.', 'lieusoft' ), 'icon' => 'ruler' ),
		array( 'title' => __( 'Items & Fabrics', 'lieusoft' ), 'desc' => __( 'Manage fabrics, services, designs and pricing easily.', 'lieusoft' ), 'icon' => 'shirt' ),
		array( 'title' => __( 'Payments', 'lieusoft' ), 'desc' => __( 'Track payments, due amounts and generate invoices.', 'lieusoft' ), 'icon' => 'credit-card' ),
		array( 'title' => __( 'Reports & Analytics', 'lieusoft' ), 'desc' => __( 'Get business reports and insights to grow your tailoring shop.', 'lieusoft' ), 'icon' => 'bar-chart' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery-tailor' );

get_template_part( 'template-parts/product', 'pricing', array(
	'licenses' => array(
		array(
			'name'     => __( 'Regular License', 'lieusoft' ),
			'price'    => '4,999',
			'features' => array(
				__( 'Use on 1 Website', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( '6 Months Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'primary',
		),
		array(
			'name'     => __( 'Extended License', 'lieusoft' ),
			'price'    => '8,999',
			'features' => array(
				__( 'Use on Unlimited Websites', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( '12 Months Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'outline',
		),
	),
	'trust_items' => array(
		array(
			'icon'  => 'shield-check',
			'title' => __( '14-Day Money Back Guarantee', 'lieusoft' ),
			'desc'  => __( 'Not satisfied? Get a full refund within 14 days of purchase.', 'lieusoft' ),
		),
		array(
			'icon'  => 'lock',
			'title' => __( 'Secure & Trusted', 'lieusoft' ),
			'desc'  => __( 'Trusted by 1,000+ tailoring businesses.', 'lieusoft' ),
		),
		array(
			'icon'  => 'headset',
			'title' => __( 'Regular Updates', 'lieusoft' ),
			'desc'  => __( 'We add new features and improvements regularly.', 'lieusoft' ),
		),
	),
) );

get_template_part( 'template-parts/product', 'trust-bar' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I try before buying?', 'lieusoft' ), 'a' => __( 'Yes, you can test the live demo before purchasing a license.', 'lieusoft' ) ),
		array( 'q' => __( 'Will it work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, it is built to work with any properly coded WordPress theme.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I track deliveries and payments?', 'lieusoft' ), 'a' => __( 'Yes, every order tracks its delivery status and payment/due amount in one place.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide support?', 'lieusoft' ), 'a' => __( 'Yes, every license includes dedicated support for the covered period.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'Our support team is always ready to help you with any questions.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:hello@lieusoft.com',
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Ready to Organize Your Tailor Shop?', 'lieusoft' ),
	'desc'     => __( 'Get started with Tailor Management and run your shop effortlessly.', 'lieusoft' ),
	'icon'     => 'shirt',
	'btn_text' => __( 'Get Tailor Management Now', 'lieusoft' ),
	'btn_href' => '#',
	'anchor'   => 'get-started',
) );

get_footer();
