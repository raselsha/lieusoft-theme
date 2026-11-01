<?php
/**
 * Blog listing — shared by home.php (the posts page), archive.php and
 * search.php. Expects $args: eyebrow, title, desc, crumb (breadcrumb label).
 * On the blog's first page the newest post is shown as a wide featured card.
 */
$a = wp_parse_args( $args ?? array(), array(
	'eyebrow' => __( 'Blog', 'lieusoft' ),
	'title'   => __( 'Insights & Guides', 'lieusoft' ),
	'desc'    => '',
	'crumb'   => '',
) );

$blog_url      = lieusoft_blog_url();
$show_featured = is_home() && ! is_paged();
$categories    = get_categories( array( 'hide_empty' => true, 'exclude' => get_option( 'default_category' ) ) );
$current_cat   = is_category() ? get_queried_object_id() : 0;
?>
<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<?php if ( $a['crumb'] ) : ?>
			<a href="<?php echo esc_url( $blog_url ); ?>"><?php esc_html_e( 'Blog', 'lieusoft' ); ?></a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php echo esc_html( $a['crumb'] ); ?></span>
		<?php else : ?>
			<span aria-current="page"><?php esc_html_e( 'Blog', 'lieusoft' ); ?></span>
		<?php endif; ?>
	</div>
</nav>

<section class="blog-hero">
	<div class="container">
		<span class="eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></span>
		<h1><?php echo esc_html( $a['title'] ); ?></h1>
		<?php if ( $a['desc'] ) : ?>
			<p><?php echo esc_html( $a['desc'] ); ?></p>
		<?php endif; ?>

		<form class="blog-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php echo lieusoft_icon( 'search' ); ?>
			<label class="screen-reader-text" for="blog-search-input"><?php esc_html_e( 'Search articles', 'lieusoft' ); ?></label>
			<input id="blog-search-input" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search articles…', 'lieusoft' ); ?>">
			<input type="hidden" name="post_type" value="post">
		</form>

		<?php if ( $categories ) : ?>
			<nav class="blog-cats" aria-label="<?php esc_attr_e( 'Categories', 'lieusoft' ); ?>">
				<a class="<?php echo ( is_home() ) ? 'is-active' : ''; ?>" href="<?php echo esc_url( $blog_url ); ?>"><?php esc_html_e( 'All', 'lieusoft' ); ?></a>
				<?php foreach ( $categories as $cat ) : ?>
					<a class="<?php echo $current_cat === $cat->term_id ? 'is-active' : ''; ?>" href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a>
				<?php endforeach; ?>
			</nav>
		<?php endif; ?>
	</div>
</section>

<section class="blog-list">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php if ( $show_featured ) : the_post(); ?>
				<?php get_template_part( 'template-parts/blog', 'card', array( 'featured' => true ) ); ?>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<div class="post-grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/blog', 'card' ); ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php
			$pagination = paginate_links( array(
				'type'      => 'list',
				'prev_text' => lieusoft_icon( 'arrow-right', 'is-flipped' ) . '<span class="screen-reader-text">' . esc_html__( 'Previous', 'lieusoft' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'lieusoft' ) . '</span>' . lieusoft_icon( 'arrow-right' ),
			) );
			if ( $pagination ) :
				?>
				<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Pages', 'lieusoft' ); ?>"><?php echo wp_kses_post( $pagination ); ?></nav>
			<?php endif; ?>
		<?php else : ?>
			<div class="blog-empty">
				<span class="icon-circle"><?php echo lieusoft_icon( is_search() ? 'search' : 'file-text' ); ?></span>
				<?php if ( is_search() ) : ?>
					<h2><?php esc_html_e( 'No articles found', 'lieusoft' ); ?></h2>
					<p><?php esc_html_e( 'Try a different word, or browse all articles.', 'lieusoft' ); ?></p>
				<?php else : ?>
					<h2><?php esc_html_e( 'Articles are on the way', 'lieusoft' ); ?></h2>
					<p><?php esc_html_e( 'We are writing practical guides on websites, bookings and running your business online. Check back soon.', 'lieusoft' ); ?></p>
				<?php endif; ?>
				<div class="blog-empty__actions">
					<?php if ( ! is_home() ) : ?>
						<a class="btn btn--outline" href="<?php echo esc_url( $blog_url ); ?>"><?php esc_html_e( 'All Articles', 'lieusoft' ); ?></a>
					<?php endif; ?>
					<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Explore Our Solutions', 'lieusoft' ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Need a Website or System for Your Business?', 'lieusoft' ),
	'desc'  => __( "Tell us what you need — we'll build, host and support it for you.", 'lieusoft' ),
) );
