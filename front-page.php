<?php
/**
 * Homepage template — mirrors the live lieusoft.com layout, rebuilt in code
 * from the design tokens read out of the site's Elementor kit.
 */

get_header();

get_template_part( 'template-parts/section', 'hero' );
get_template_part( 'template-parts/section', 'solutions' );
get_template_part( 'template-parts/section', 'what-we-do' );
get_template_part( 'template-parts/section', 'plugins' );
get_template_part( 'template-parts/section', 'services' );
get_template_part( 'template-parts/section', 'principles' );
get_template_part( 'template-parts/section', 'success-stories' );

get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Do I need my own hosting?', 'lieusoft' ), 'a' => __( 'No, managed hosting is included with every business solution. You can also bring your own if you prefer.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you migrate my website?', 'lieusoft' ), 'a' => __( 'Yes, we can migrate an existing website to a new solution or hosting with no downtime.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide support?', 'lieusoft' ), 'a' => __( 'Yes, every business solution includes ongoing support, and every plugin includes updates.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I request custom features?', 'lieusoft' ), 'a' => __( 'Yes, tell us what you need during your consultation and we will scope it for you.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/section', 'cta' );

get_footer();
