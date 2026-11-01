<?php
/**
 * Template Name: Products Index
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Products', 'lieusoft' ); ?></span>
	</div>
</nav>

<section class="index-hero">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'WordPress Plugins', 'lieusoft' ); ?></span>
		<h1><?php esc_html_e( 'Premium Plugins for Your WordPress Site', 'lieusoft' ); ?></h1>
		<p><?php esc_html_e( 'Professional, actively supported plugins built by the Lieusoft team — install on your own site or ask us to set it up for you.', 'lieusoft' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/plugins-grid' ); ?>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I try a plugin before buying?', 'lieusoft' ), 'a' => __( 'Yes, each plugin has a live demo you can test before you purchase a license.', 'lieusoft' ) ),
		array( 'q' => __( 'Will the plugins work with my theme?', 'lieusoft' ), 'a' => __( 'Yes, they are built to work with any properly coded WordPress theme.', 'lieusoft' ) ),
		array( 'q' => __( 'Do licenses include updates and support?', 'lieusoft' ), 'a' => __( 'Yes, every license includes updates and support for the covered period.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you install and set it up for me?', 'lieusoft' ), 'a' => __( 'Yes, we can install, configure and style the plugin on your site for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you customize a plugin for my business?', 'lieusoft' ), 'a' => __( 'Yes, tell us what you need and we will build it on top of the plugin or create a custom one.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Custom Plugin?', 'lieusoft' ),
	'desc'     => __( "If none of these fit your workflow, we'll build one that does.", 'lieusoft' ),
	'icon'     => 'chat',
	'btn_text' => __( 'Talk to Us', 'lieusoft' ),
	'btn_href' => 'mailto:hello@lieusoft.com',
	'anchor'   => 'talk-to-us',
) );

get_footer();
