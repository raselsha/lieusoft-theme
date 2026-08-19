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
get_template_part( 'template-parts/section', 'case-study' );
get_template_part( 'template-parts/section', 'cta' );

get_footer();
