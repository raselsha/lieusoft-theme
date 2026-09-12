<?php
/**
 * Template Name: Product — PDF Embed Viewer
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'PDF Embed Viewer', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero', array(
	'title'            => __( 'PDF Embed Viewer', 'lieusoft' ),
	'desc'             => __( 'Embed and display PDFs on your WordPress site in both traditional and interactive 3D flipbook modes.', 'lieusoft' ),
	'checklist'        => array( __( 'Flipbook', 'lieusoft' ), __( 'Grid View', 'lieusoft' ), __( 'List View', 'lieusoft' ), __( 'Shortcode Generator', 'lieusoft' ), __( 'Elementor Support', 'lieusoft' ), __( 'Remote PDF', 'lieusoft' ) ),
	'screenshot_icon'  => 'book-open',
	'screenshot_label' => __( 'Viewer Screenshot', 'lieusoft' ),
	'demo_url'         => 'https://flipbook.lieusoft.com/demo/',
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Features', 'lieusoft' ),
	'title'   => __( 'Everything You Need', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Online Viewer', 'lieusoft' ), 'icon' => 'monitor' ),
		array( 'title' => __( 'Flipbook', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( 'Grid Layout', 'lieusoft' ), 'icon' => 'grid' ),
		array( 'title' => __( 'List Layout', 'lieusoft' ), 'icon' => 'list' ),
		array( 'title' => __( 'Elementor', 'lieusoft' ), 'icon' => 'puzzle' ),
		array( 'title' => __( 'Shortcode', 'lieusoft' ), 'icon' => 'code' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery', array(
	'title' => __( 'See It In Action', 'lieusoft' ),
	'items' => array(
		array( 'label' => __( 'Flipbook', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'label' => __( 'Grid', 'lieusoft' ), 'icon' => 'grid' ),
		array( 'label' => __( 'List', 'lieusoft' ), 'icon' => 'list' ),
		array( 'label' => __( 'E-book', 'lieusoft' ), 'icon' => 'book-open' ),
	),
) );

get_template_part( 'template-parts/product', 'pricing', array(
	'title' => __( 'Simple Pricing', 'lieusoft' ),
	'desc'  => __( 'One time payment, lifetime updates and support.', 'lieusoft' ),
	'licenses' => array(
		array(
			'name'     => __( 'Regular License', 'lieusoft' ),
			'price'    => '2,999',
			'features' => array( __( 'Use on 1 Website', 'lieusoft' ), __( 'Lifetime Updates', 'lieusoft' ), __( 'Lifetime Support', 'lieusoft' ) ),
			'style'    => 'primary',
			'url'      => 'https://lieusoft.com/downloads/pdf-flipbook-pro/',
		),
		array(
			'name'     => __( 'Developer License', 'lieusoft' ),
			'price'    => '5,999',
			'features' => array( __( 'Use on Unlimited Websites', 'lieusoft' ), __( 'Lifetime Updates', 'lieusoft' ), __( 'Lifetime Support', 'lieusoft' ) ),
			'style'    => 'primary',
			'featured' => true,
			'url'      => 'https://lieusoft.com/downloads/pdf-flipbook-pro/',
		),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I try before buying?', 'lieusoft' ), 'a' => __( 'Yes, you can test every view mode on the live demo before purchasing a license.', 'lieusoft' ) ),
		array( 'q' => __( 'Will this plugin work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, it is built to work with any properly coded WordPress theme, including page builders like Elementor.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I embed a PDF from another website?', 'lieusoft' ), 'a' => __( 'Yes, you can embed a PDF hosted on your own server or from any external URL.', 'lieusoft' ) ),
		array( 'q' => __( 'Is it compatible with Elementor?', 'lieusoft' ), 'a' => __( 'Yes, a dedicated Elementor widget is included so you can add and style the viewer visually.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'If you have any questions, our support team is always here to help you.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:hello@lieusoft.com',
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Complete Website?', 'lieusoft' ),
	'desc'     => __( 'We also build complete business solutions.', 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
	'anchor'   => 'get-started',
) );

get_footer();
