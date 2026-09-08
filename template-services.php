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

get_template_part( 'template-parts/services', 'projects', array(
	'items' => array(
		array( 'title' => __( 'CozyThai', 'lieusoft' ), 'desc' => __( 'Thai massage booking website with online scheduling.', 'lieusoft' ), 'image' => 'case-study-preview.png' ),
		array( 'title' => __( 'Doctor Website', 'lieusoft' ), 'desc' => __( 'Clinic website with appointment booking and patient records.', 'lieusoft' ), 'image' => 'solution-doctor-bg.png' ),
		array( 'title' => __( 'Tailor Website', 'lieusoft' ), 'desc' => __( 'Order and measurement management for a tailor shop.', 'lieusoft' ), 'image' => 'solution-tailor-bg.png' ),
	),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'title' => __( 'Work Process', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Consultation', 'lieusoft' ), 'desc' => __( "We learn about your business and goals.", 'lieusoft' ), 'icon' => 'chat' ),
		array( 'title' => __( 'Planning', 'lieusoft' ), 'desc' => __( 'We map out the scope, timeline and tech.', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Development', 'lieusoft' ), 'desc' => __( 'We build your website and set up everything.', 'lieusoft' ), 'icon' => 'code' ),
		array( 'title' => __( 'Launch & Support', 'lieusoft' ), 'desc' => __( 'We launch and stay on for ongoing support.', 'lieusoft' ), 'icon' => 'headset' ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( 'Need a Complete Business Website?', 'lieusoft' ),
	'desc'     => __( "Tell us about your business and we'll build everything for you.", 'lieusoft' ),
	'btn_text' => __( 'Book Consultation', 'lieusoft' ),
	'btn_href' => '#',
) );

get_footer();
