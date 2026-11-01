<?php
/**
 * Single blog post.
 */

get_header();

while ( have_posts() ) :
	the_post();

	$category  = get_the_category();
	$category  = $category ? $category[0] : null;
	$share_url = rawurlencode( get_permalink() );
	$share_txt = rawurlencode( get_the_title() );
	?>

	<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
		<div class="container breadcrumb__inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
			<span aria-hidden="true">/</span>
			<a href="<?php echo esc_url( lieusoft_blog_url() ); ?>"><?php esc_html_e( 'Blog', 'lieusoft' ); ?></a>
			<?php if ( $category && 'uncategorized' !== $category->slug ) : ?>
				<span aria-hidden="true">/</span>
				<a href="<?php echo esc_url( get_category_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
			<?php endif; ?>
		</div>
	</nav>

	<article <?php post_class( 'article' ); ?>>
		<header class="article__head">
			<div class="container">
				<?php if ( $category && 'uncategorized' !== $category->slug ) : ?>
					<a class="article__category" href="<?php echo esc_url( get_category_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
				<?php endif; ?>
				<h1 class="article__title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="article__lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>
				<div class="article__meta">
					<?php if ( get_the_author() ) : ?>
						<span class="article__avatar"><?php echo esc_html( strtoupper( mb_substr( get_the_author(), 0, 1 ) ) ); ?></span>
						<span class="article__author"><?php the_author(); ?></span>
						<span aria-hidden="true">&middot;</span>
					<?php endif; ?>
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<span aria-hidden="true">&middot;</span>
					<span><?php echo esc_html( sprintf( _n( '%d min read', '%d min read', lieusoft_reading_time(), 'lieusoft' ), lieusoft_reading_time() ) ); ?></span>
				</div>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="article__cover container">
				<?php the_post_thumbnail( 'full', array( 'loading' => 'eager' ) ); ?>
			</figure>
		<?php endif; ?>

		<div class="container">
			<div class="article__body">
				<div class="prose entry-content">
					<?php
					the_content();
					wp_link_pages( array( 'before' => '<nav class="article__pages">', 'after' => '</nav>' ) );
					?>
				</div>

				<footer class="article__foot">
					<?php $tags = get_the_tags(); ?>
					<?php if ( $tags ) : ?>
						<ul class="article__tags">
							<?php foreach ( $tags as $tag ) : ?>
								<li><a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>">#<?php echo esc_html( $tag->name ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<div class="article__share">
						<span><?php esc_html_e( 'Share', 'lieusoft' ); ?></span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_attr( $share_url ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Share on Facebook', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'facebook' ); ?></a>
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo esc_attr( $share_url ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Share on LinkedIn', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'linkedin' ); ?></a>
						<a href="https://wa.me/?text=<?php echo esc_attr( $share_txt . '%20' . $share_url ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Share on WhatsApp', 'lieusoft' ); ?>"><?php echo lieusoft_icon( 'whatsapp' ); ?></a>
					</div>
				</footer>
			</div>
		</div>
	</article>

	<?php
	$related = new WP_Query( array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'post__not_in'        => array( get_the_ID() ),
		'category__in'        => $category ? array( $category->term_id ) : array(),
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	) );

	if ( $related->have_posts() ) :
		?>
		<section class="blog-related">
			<div class="container">
				<div class="section-head section-head--row">
					<div>
						<span class="eyebrow"><?php esc_html_e( 'Keep Reading', 'lieusoft' ); ?></span>
						<h2><?php esc_html_e( 'Related Articles', 'lieusoft' ); ?></h2>
					</div>
					<a class="link-arrow" href="<?php echo esc_url( lieusoft_blog_url() ); ?>"><?php esc_html_e( 'All articles', 'lieusoft' ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
				</div>
				<div class="post-grid">
					<?php
					while ( $related->have_posts() ) :
						$related->the_post();
						get_template_part( 'template-parts/blog', 'card' );
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<?php
	endif;
endwhile;

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Need a Website or System for Your Business?', 'lieusoft' ),
	'desc'  => __( "Tell us what you need — we'll build, host and support it for you.", 'lieusoft' ),
) );

get_footer();
