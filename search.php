<?php
/**
 * Search results — same layout as the blog index.
 */

get_header();

get_template_part( 'template-parts/blog', 'index', array(
	'eyebrow' => __( 'Search', 'lieusoft' ),
	/* translators: %s: search term */
	'title'   => sprintf( __( 'Results for “%s”', 'lieusoft' ), get_search_query() ),
	'crumb'   => __( 'Search', 'lieusoft' ),
) );

get_footer();
