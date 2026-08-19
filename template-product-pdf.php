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
		<a href="#"><?php esc_html_e( 'Products', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'PDF Embed Viewer', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/product', 'hero' );

get_template_part( 'template-parts/solution', 'features', array(
	'title' => __( 'Powerful Features', 'lieusoft' ),
	'desc'  => __( 'Everything you need to display PDF files in the best way possible.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Multiple View Modes', 'lieusoft' ), 'desc' => __( 'Flipbook, Grid, List and Full-screen viewer options.', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( 'Shortcode Generator', 'lieusoft' ), 'desc' => __( 'Generate shortcodes easily with live preview and settings.', 'lieusoft' ), 'icon' => 'code' ),
		array( 'title' => __( 'Fully Responsive', 'lieusoft' ), 'desc' => __( 'Looks perfect on all devices and screen sizes.', 'lieusoft' ), 'icon' => 'smartphone' ),
		array( 'title' => __( 'Elementor Support', 'lieusoft' ), 'desc' => __( 'Integrate and control PDF viewer directly in Elementor.', 'lieusoft' ), 'icon' => 'puzzle' ),
		array( 'title' => __( 'Remote PDF Support', 'lieusoft' ), 'desc' => __( 'Embed PDF files from your server or any external URL.', 'lieusoft' ), 'icon' => 'download' ),
		array( 'title' => __( 'Lightweight & Fast', 'lieusoft' ), 'desc' => __( 'Optimized for speed and better website performance.', 'lieusoft' ), 'icon' => 'gauge' ),
	),
) );

get_template_part( 'template-parts/product', 'gallery' );

get_template_part( 'template-parts/product', 'pricing', array(
	'licenses'    => array(
		array(
			'name'     => __( 'Standard License', 'lieusoft' ),
			'price'    => '2,999',
			'features' => array(
				__( 'Use on 1 Website', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( 'Lifetime Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'primary',
		),
		array(
			'name'     => __( 'Developer License', 'lieusoft' ),
			'price'    => '5,999',
			'features' => array(
				__( 'Use on Unlimited Websites', 'lieusoft' ),
				__( 'Lifetime Updates', 'lieusoft' ),
				__( 'Lifetime Support', 'lieusoft' ),
				__( 'All Features Included', 'lieusoft' ),
			),
			'style' => 'outline',
		),
	),
	'trust_items' => array(
		array(
			'icon'  => 'shield-check',
			'title' => __( '14-Day Money Back Guarantee', 'lieusoft' ),
			'desc'  => __( 'Not satisfied? Get a full refund within 14 days of purchase. No questions asked.', 'lieusoft' ),
		),
		array(
			'icon'    => 'users',
			'title'   => __( 'Trusted by 1,000+ Websites', 'lieusoft' ),
			'desc'    => __( 'Join thousands of website owners who love our products.', 'lieusoft' ),
			'avatars' => true,
		),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I try before buying?', 'lieusoft' ), 'a' => __( 'Yes, you can test every view mode on the live demo before purchasing a license.', 'lieusoft' ) ),
		array( 'q' => __( 'Will this plugin work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, it is built to work with any properly coded WordPress theme, including page builders like Elementor.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I embed PDF from another website?', 'lieusoft' ), 'a' => __( 'Yes, you can embed a PDF hosted on your own server or from any external URL.', 'lieusoft' ) ),
		array( 'q' => __( 'Is it compatible with Elementor?', 'lieusoft' ), 'a' => __( 'Yes, a dedicated Elementor widget is included so you can add and style the viewer visually.', 'lieusoft' ) ),
	),
	'sidebar_icon'  => 'headset',
	'sidebar_title' => __( 'Need Help?', 'lieusoft' ),
	'sidebar_desc'  => __( 'If you have any questions, our support team is always here to help you.', 'lieusoft' ),
	'sidebar_btn'   => __( 'Contact Support', 'lieusoft' ),
	'sidebar_href'  => 'mailto:hello@lieusoft.com',
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Ready to Showcase Your PDF Documents?', 'lieusoft' ),
	'desc'     => __( 'Display your PDFs beautifully and provide a better experience to your visitors.', 'lieusoft' ),
	'icon'     => 'file-text',
	'btn_text' => __( 'Get PDF Embed Viewer Now', 'lieusoft' ),
	'btn_href' => '#',
	'anchor'   => 'get-started',
) );

get_footer();
