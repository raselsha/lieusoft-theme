<?php
/**
 * Template Name: Services
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Services', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php get_template_part( 'template-parts/services', 'hero' ); ?>

<div id="services"></div>
<?php
get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Our Services', 'lieusoft' ),
	'title'   => __( 'Everything Your Business Needs', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Website Development', 'lieusoft' ), 'desc' => __( 'Custom WordPress websites built for your business, from scratch or on a page builder.', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Custom Plugin Development', 'lieusoft' ), 'desc' => __( 'Bespoke WordPress plugins built around your exact workflow and requirements.', 'lieusoft' ), 'icon' => 'puzzle' ),
		array( 'title' => __( 'Managed Hosting', 'lieusoft' ), 'desc' => __( 'Fast, secure hosting with monitoring and updates handled for you.', 'lieusoft' ), 'icon' => 'cloud' ),
		array( 'title' => __( 'Domain Registration', 'lieusoft' ), 'desc' => __( "We register and manage your domain so it's always renewed and pointed correctly.", 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Website Maintenance', 'lieusoft' ), 'desc' => __( 'Regular updates, backups and health checks so your site keeps running smoothly.', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Business Email Setup', 'lieusoft' ), 'desc' => __( 'Professional @yourdomain email addresses set up and configured for your team.', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Business Automation', 'lieusoft' ), 'desc' => __( 'Custom n8n workflows that automate repetitive tasks and connect your tools together.', 'lieusoft' ), 'icon' => 'infinity' ),
		array( 'title' => __( 'Migration Services', 'lieusoft' ), 'desc' => __( 'Moving from another host or builder? We migrate your site with no downtime.', 'lieusoft' ), 'icon' => 'refresh' ),
		array( 'title' => __( 'Technical Support', 'lieusoft' ), 'desc' => __( 'A real team on the other end whenever something needs fixing or explaining.', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-choose', array(
	'items' => array(
		array( 'title' => __( 'One-Stop Solution', 'lieusoft' ), 'desc' => __( 'Website, hosting, email and support — all from one team.', 'lieusoft' ), 'icon' => 'grid' ),
		array( 'title' => __( 'Business Focused', 'lieusoft' ), 'desc' => __( 'Built around how your business actually operates.', 'lieusoft' ), 'icon' => 'briefcase' ),
		array( 'title' => __( 'Ongoing Support', 'lieusoft' ), 'desc' => __( 'We stay reachable long after your site goes live.', 'lieusoft' ), 'icon' => 'headset' ),
		array( 'title' => __( 'Secure Infrastructure', 'lieusoft' ), 'desc' => __( 'SSL, backups and monitoring built into every plan.', 'lieusoft' ), 'icon' => 'shield-check' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'title' => __( 'A Complete Business Setup', 'lieusoft' ),
	'desc'  => __( 'Everything included, so nothing is left for you to chase down separately.', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Website', 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Domain', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Hosting', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'SSL', 'lieusoft' ), 'icon' => 'shield-check' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Backups', 'lieusoft' ), 'icon' => 'refresh' ),
		array( 'title' => __( 'Security', 'lieusoft' ), 'icon' => 'lock' ),
		array( 'title' => __( 'Training', 'lieusoft' ), 'icon' => 'book-open' ),
	),
) );

get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'Work Process', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Consultation', 'lieusoft' ), 'desc' => __( "We learn about your business and goals.", 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Planning', 'lieusoft' ), 'desc' => __( 'We map out the scope, timeline and tech.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Development', 'lieusoft' ), 'desc' => __( 'We build your website and set up everything.', 'lieusoft' ), 'icon' => 'code' ),
		array( 'title' => __( 'Launch & Support', 'lieusoft' ), 'desc' => __( 'We launch and stay on for ongoing support.', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'How long does a website take?', 'lieusoft' ), 'a' => __( 'Most business websites are ready in 1–3 weeks, depending on the number of pages and features. We give you a clear timeline after the consultation.', 'lieusoft' ) ),
		array( 'q' => __( 'Do I own my website?', 'lieusoft' ), 'a' => __( 'Yes. The website, its content and your domain belong to you. We just build, host and look after it.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you build a custom plugin for my workflow?', 'lieusoft' ), 'a' => __( 'Yes, we build WordPress plugins around your exact process — tell us what you need and we will scope it with you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you migrate my existing website?', 'lieusoft' ), 'a' => __( 'Yes, we can move your site from another host or builder with no downtime.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you offer maintenance after launch?', 'lieusoft' ), 'a' => __( 'Yes, we handle updates, backups and fixes so your site keeps running smoothly.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you work with clients outside Bangladesh?', 'lieusoft' ), 'a' => __( 'Yes, we have built and launched sites for clients in Bangladesh, the UK, Portugal and the U.S.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Complete Business Website?', 'lieusoft' ),
	'desc'     => __( "Tell us about your business and we'll build everything for you.", 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
) );

get_footer();
