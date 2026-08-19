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
get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Custom Plugin?', 'lieusoft' ),
	'desc'     => __( "If none of these fit your workflow, we'll build one that does.", 'lieusoft' ),
	'icon'     => 'chat',
	'btn_text' => __( 'Talk to Us', 'lieusoft' ),
	'btn_href' => 'mailto:hello@lieusoft.com',
	'anchor'   => 'talk-to-us',
) );

get_footer();
