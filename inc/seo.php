<?php
/**
 * Search and AI-assistant visibility: JSON-LD structured data, the
 * per-language og:locale, and /llms.txt (a plain-text map of the site for
 * AI crawlers). Rank Math still handles titles, descriptions, canonicals
 * and Open Graph; its own schema module is off, so this is the only
 * structured data on the page.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * BCP 47 language tag for a language code: 'bn' → 'bn-BD'.
 */
function lieusoft_lang_tag( $lang ) {
	return str_replace( '_', '-', lieusoft_languages()[ $lang ]['locale'] );
}

/**
 * An author profile field in the current language: user meta "{$field}_bn"
 * or "{$field}_ar", falling back to the English "{$field}" (for the bio,
 * that's the core Biographical Info).
 */
function lieusoft_author_field( $user_id, $field, $lang = null ) {
	$lang  = $lang ?? lieusoft_lang();
	$value = 'en' !== $lang ? get_user_meta( $user_id, $field . '_' . $lang, true ) : '';
	return trim( (string) ( $value ? $value : get_user_meta( $user_id, $field, true ) ) );
}

/**
 * An author's round avatar: their WordPress (Gravatar) photo over their
 * initial — if they have no photo, the image fails (d=404) and is removed,
 * leaving the initial.
 */
function lieusoft_author_avatar( $user_id, $size = 64, $class = '' ) {
	$name = get_the_author_meta( 'display_name', $user_id );
	$url  = get_avatar_url( $user_id, array( 'size' => $size, 'default' => '404' ) );
	return sprintf(
		'<span class="article__avatar %1$s">%2$s%3$s</span>',
		esc_attr( $class ),
		esc_html( strtoupper( mb_substr( $name, 0, 1 ) ) ),
		$url ? sprintf( '<img src="%s" alt="%s" width="%d" height="%d" loading="lazy" onerror="this.remove()">', esc_url( $url ), esc_attr( $name ), (int) $size / 2, (int) $size / 2 ) : ''
	);
}

function lieusoft_schema_organization() {
	return array(
		'@type'  => 'Organization',
		'@id'    => untrailingslashit( get_option( 'home' ) ) . '/#organization',
		'name'   => 'Lieusoft',
		'url'    => trailingslashit( get_option( 'home' ) ),
		'logo'   => array(
			'@type' => 'ImageObject',
			'url'   => get_theme_file_uri( '/assets/images/logo.png' ),
		),
		'sameAs' => array( 'https://www.facebook.com/Lieusoft' ),
	);
}

/**
 * Question/answer pairs from a post's FAQ section: an <h2 id="faq"> followed
 * by <h3> questions, each answered by the paragraphs/lists under it.
 */
function lieusoft_post_faq( $content ) {
	if ( ! preg_match( '#<h2[^>]*id="faq"[^>]*>.*?</h2>(.*?)(?=<h2|$)#s', $content, $section ) ) {
		return array();
	}
	preg_match_all( '#<h3[^>]*>(.*?)</h3>(.*?)(?=<h3|$)#s', $section[1], $pairs, PREG_SET_ORDER );
	$faq = array();
	foreach ( $pairs as $pair ) {
		$question = trim( wp_strip_all_tags( $pair[1] ) );
		$answer   = trim( preg_replace( '/\s+/', ' ', wp_strip_all_tags( $pair[2] ) ) );
		if ( $question && $answer ) {
			$faq[] = array(
				'@type'          => 'Question',
				'name'           => $question,
				'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $answer ),
			);
		}
	}
	return $faq;
}

function lieusoft_schema_graph() {
	$org   = lieusoft_schema_organization();
	$graph = array();

	if ( is_front_page() ) {
		$graph[] = $org;
		$graph[] = array(
			'@type'      => 'WebSite',
			'@id'        => trailingslashit( home_url( '/' ) ) . '#website',
			'url'        => home_url( '/' ),
			'name'       => 'Lieusoft',
			'inLanguage' => lieusoft_lang_tag( lieusoft_lang() ),
			'publisher'  => array( '@id' => $org['@id'] ),
		);
	}

	if ( is_singular( 'post' ) ) {
		$post      = get_queried_object();
		$url       = get_permalink( $post );
		$lang      = lieusoft_post_lang( $post );
		$content   = apply_filters( 'the_content', $post->post_content ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals
		$author    = get_the_author_meta( 'display_name', $post->post_author );
		$tags      = wp_get_post_tags( $post->ID, array( 'fields' => 'names' ) );
		$category  = null;
		foreach ( get_the_category( $post->ID ) as $term ) {
			if ( (int) get_option( 'default_category' ) !== $term->term_id ) {
				$category = $term;
				break;
			}
		}

		$article = array(
			'@type'            => 'BlogPosting',
			'@id'              => $url . '#article',
			'headline'         => get_the_title( $post ),
			'description'      => wp_strip_all_tags( get_the_excerpt( $post ) ),
			'url'              => $url,
			'mainEntityOfPage' => $url,
			'datePublished'    => get_post_time( 'c', true, $post ),
			'dateModified'     => get_post_modified_time( 'c', true, $post ),
			'inLanguage'       => lieusoft_lang_tag( $lang ),
			'wordCount'        => count( preg_split( '/\s+/u', trim( wp_strip_all_tags( $content ) ) ) ),
			'author'           => ( $author && 'admin' !== strtolower( $author ) )
				? array_filter( array(
					'@type'       => 'Person',
					'name'        => $author,
					'url'         => get_author_posts_url( $post->post_author ),
					'jobTitle'    => lieusoft_author_field( $post->post_author, 'lieusoft_role', $lang ),
					'description' => lieusoft_author_field( $post->post_author, 'description', $lang ),
					'worksFor'    => array( '@id' => $org['@id'] ),
					'image'       => get_avatar_url( $post->post_author, array( 'size' => 256 ) ),
					'sameAs'      => array_values( array_filter( array( get_the_author_meta( 'user_url', $post->post_author ) ), function ( $link ) {
						return 0 !== strpos( untrailingslashit( $link ), untrailingslashit( get_option( 'home' ) ) ); // Profiles elsewhere, not this site.
					} ) ),
				) )
				: array( '@id' => $org['@id'] ),
			'publisher'        => array( '@id' => $org['@id'] ),
		);
		if ( has_post_thumbnail( $post ) ) {
			$article['image'] = get_the_post_thumbnail_url( $post, 'full' );
		}
		if ( $category ) {
			$article['articleSection'] = $category->name;
		}
		if ( $tags ) {
			$article['keywords'] = implode( ', ', $tags );
		}
		$translations = lieusoft_post_translations( $post->ID );
		unset( $translations[ $lang ] );
		foreach ( $translations as $code => $id ) {
			$article['workTranslation'][] = array( '@type' => 'BlogPosting', 'url' => get_permalink( $id ), 'inLanguage' => lieusoft_lang_tag( $code ) );
		}

		$crumbs = array(
			array( __( 'Home', 'lieusoft' ), home_url( '/' ) ),
			array( __( 'Blog', 'lieusoft' ), lieusoft_blog_url() ),
		);
		if ( $category ) {
			$crumbs[] = array( $category->name, get_category_link( $category ) );
		}
		$crumbs[] = array( get_the_title( $post ), $url );

		$graph[] = $org;
		$graph[] = $article;
		$graph[] = array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array_map(
				function ( $crumb, $i ) {
					return array( '@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb[0], 'item' => $crumb[1] );
				},
				$crumbs,
				array_keys( $crumbs )
			),
		);

		$faq = lieusoft_post_faq( $content );
		if ( $faq ) {
			$graph[] = array( '@type' => 'FAQPage', '@id' => $url . '#faq', 'inLanguage' => lieusoft_lang_tag( $lang ), 'mainEntity' => $faq );
		}
	}

	return $graph;
}

function lieusoft_output_schema() {
	$graph = lieusoft_schema_graph();
	if ( $graph ) {
		echo '<script type="application/ld+json">' . wp_json_encode( array( '@context' => 'https://schema.org', '@graph' => $graph ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>\n";
	}
}
add_action( 'wp_head', 'lieusoft_output_schema', 30 );

/**
 * Rank Math falls back to en_US for bn_BD (not a Facebook locale).
 */
function lieusoft_og_locale( $locale ) {
	$map = array( 'en' => 'en_US', 'bn' => 'bn_IN', 'ar' => 'ar_AR' );
	return $map[ lieusoft_lang() ] ?? $locale;
}
add_filter( 'rank_math/opengraph/facebook/og_locale', 'lieusoft_og_locale' );

/**
 * /llms.txt — what Lieusoft offers and every article in each language, as
 * Markdown, so AI assistants can cite the right page.
 */
function lieusoft_serve_llms_txt() {
	if ( '/llms.txt' !== lieusoft_request_path() || 'en' !== lieusoft_lang() ) {
		return;
	}

	$lines   = array();
	$lines[] = '# Lieusoft';
	$lines[] = '';
	$lines[] = '> Lieusoft builds WordPress business solutions: ready-made websites with booking, appointment and shop-management systems, premium WordPress plugins, and custom web development, hosting and maintenance. The site is available in English, Bangla (/bn/) and Arabic (/ar/).';
	$lines[] = '';

	$lines[] = '## Solutions';
	foreach ( lieusoft_get_solutions() as $item ) {
		$lines[] = sprintf( '- [%s](%s): %s', $item['title'], $item['url'], $item['desc'] );
	}
	$lines[] = '';

	$lines[] = '## WordPress plugins';
	foreach ( lieusoft_get_plugins() as $item ) {
		$lines[] = sprintf( '- [%s](%s): %s', $item['title'], $item['url'], $item['desc'] );
	}
	$lines[] = '';

	$lines[] = '## Company';
	$lines[] = sprintf( '- [Services](%s): Custom web development, WordPress, hosting, domains, email and maintenance.', home_url( '/services/' ) );
	$lines[] = sprintf( '- [Pricing](%s): Solution plans, plugin licenses and quote-based services.', home_url( '/pricing/' ) );
	$lines[] = sprintf( '- [Blog](%s): Guides on automation, booking systems and running a small business online.', lieusoft_blog_url() );
	$lines[] = '';

	$lines[] = '## Articles';
	$posts = get_posts( array( 'post_type' => 'post', 'posts_per_page' => 100, 'suppress_filters' => true ) );
	$seen  = array();
	foreach ( $posts as $post ) {
		$group = lieusoft_post_group( $post->ID );
		if ( isset( $seen[ $group ] ) ) {
			continue;
		}
		$seen[ $group ] = true;
		$versions       = lieusoft_post_translations( $post->ID );
		$main           = $versions['en'] ?? $post->ID;
		$line           = sprintf( '- [%s](%s): %s', get_the_title( $main ), get_permalink( $main ), wp_strip_all_tags( get_the_excerpt( $main ) ) );
		$others         = array();
		foreach ( $versions as $code => $id ) {
			if ( $id !== $main ) {
				$others[] = sprintf( '[%s](%s)', lieusoft_languages()[ $code ]['name'], get_permalink( $id ) );
			}
		}
		$lines[] = $line . ( $others ? ' Also in: ' . implode( ', ', $others ) . '.' : '' );
	}

	status_header( 200 );
	header( 'Content-Type: text/plain; charset=utf-8' );
	header( 'X-Robots-Tag: noindex' );
	echo implode( "\n", $lines ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- plain text.
	exit;
}
add_action( 'parse_request', 'lieusoft_serve_llms_txt', 1 );
