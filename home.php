<?php
/**
 * Blog index (the page set as "Posts page").
 */

get_header();

get_template_part( 'template-parts/blog', 'index', array(
	'title' => __( 'Insights & Guides', 'lieusoft' ),
	'desc'  => __( 'Practical articles on websites, online booking, WordPress and running your business online.', 'lieusoft' ),
) );

get_footer();
