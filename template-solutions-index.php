<?php
/**
 * Template Name: Solutions Index
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></span>
	</div>
</nav>

<section class="index-hero">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'Business Solutions', 'lieusoft' ); ?></span>
		<h1><?php esc_html_e( 'Ready-Made Solutions for Your Business', 'lieusoft' ); ?></h1>
		<p><?php esc_html_e( 'Pick the solution built for your industry — we handle setup, hosting and support, so you can focus on running your business.', 'lieusoft' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php get_template_part( 'template-parts/solutions-grid' ); ?>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( "Don't See Your Business Type?", 'lieusoft' ),
	'desc'     => __( 'We build custom solutions for any business — tell us what you need.', 'lieusoft' ),
	'icon'     => 'chat',
	'btn_text' => __( 'Talk to Us', 'lieusoft' ),
	'btn_href' => 'mailto:hello@lieusoft.com',
	'anchor'   => 'talk-to-us',
) );

get_footer();
