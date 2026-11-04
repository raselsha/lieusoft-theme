<?php
/**
 * Default page template.
 */

get_header();
?>

<main class="section">
	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<?php if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() ) : ?>
				<?php get_template_part( 'template-parts/checkout', 'head' ); ?>
			<?php else : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endif; ?>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
