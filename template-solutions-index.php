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
get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Which solution is right for my business?', 'lieusoft' ), 'a' => __( 'Doctors and clinics use the Doctor Appointment solution, tailor shops use Tailor Shop Management, and salons, spas and other appointment businesses use Service Booking. Not sure? Book a free consultation.', 'lieusoft' ) ),
		array( 'q' => __( 'What is included in a solution?', 'lieusoft' ), 'a' => __( 'A ready website, the management system, hosting, domain, SSL, business email, staff training and support — everything in one package.', 'lieusoft' ) ),
		array( 'q' => __( 'How much does a solution cost?', 'lieusoft' ), 'a' => __( 'Plans start at ৳12,000 for 1 year, with lower yearly prices on 2, 3 and 5 year plans.', 'lieusoft' ) ),
		array( 'q' => __( 'How long does setup take?', 'lieusoft' ), 'a' => __( 'Most solutions are live in about 7 days from the day we start.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you customize it for my business?', 'lieusoft' ), 'a' => __( 'Yes, we tailor the setup to your services, staff and workflow, and can build extra features when you need them.', 'lieusoft' ) ),
		array( 'q' => __( 'Don\'t see my type of business?', 'lieusoft' ), 'a' => __( 'We also build custom solutions for any business — tell us what you need.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title'    => __( "Don't See Your Business Type?", 'lieusoft' ),
	'desc'     => __( 'We build custom solutions for any business — tell us what you need.', 'lieusoft' ),
	'icon'     => 'chat',
	'btn_text' => __( 'Talk to Us', 'lieusoft' ),
	'btn_href' => 'mailto:hello@lieusoft.com',
	'anchor'   => 'talk-to-us',
) );

get_footer();
