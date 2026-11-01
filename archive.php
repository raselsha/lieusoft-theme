<?php
/**
 * Category, tag, author and date archives — same layout as the blog index.
 */

get_header();

get_template_part( 'template-parts/blog', 'index', array(
	'eyebrow' => is_category() ? __( 'Category', 'lieusoft' ) : ( is_tag() ? __( 'Tag', 'lieusoft' ) : __( 'Archive', 'lieusoft' ) ),
	'title'   => wp_strip_all_tags( get_the_archive_title() ),
	'desc'    => wp_strip_all_tags( get_the_archive_description() ),
	'crumb'   => single_term_title( '', false ) ? single_term_title( '', false ) : wp_strip_all_tags( get_the_archive_title() ),
) );

get_footer();
