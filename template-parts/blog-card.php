<?php
/**
 * One blog post card, used in the blog index, archives and "Related articles".
 * Must be called inside the loop. Expects $args: featured (bool) — the wide
 * card at the top of the blog's first page.
 */
$featured = ! empty( $args['featured'] );
$category = get_the_category();
$category = $category ? $category[0] : null;
?>
<article <?php post_class( 'post-card' . ( $featured ? ' post-card--featured' : '' ) ); ?>>
	<a class="post-card__media" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( $featured ? 'large' : 'medium_large', array( 'loading' => $featured ? 'eager' : 'lazy' ) ); ?>
		<?php else : ?>
			<span class="post-card__placeholder"><?php echo lieusoft_icon( 'file-text' ); ?></span>
		<?php endif; ?>
	</a>
	<div class="post-card__body">
		<?php if ( $category && 'uncategorized' !== $category->slug ) : ?>
			<a class="post-card__category" href="<?php echo esc_url( get_category_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
		<?php endif; ?>
		<h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), $featured ? 34 : 20 ) ); ?></p>
		<div class="post-card__meta">
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			<span aria-hidden="true">&middot;</span>
			<span><?php echo esc_html( sprintf( _n( '%d min read', '%d min read', lieusoft_reading_time(), 'lieusoft' ), lieusoft_reading_time() ) ); ?></span>
		</div>
	</div>
</article>
