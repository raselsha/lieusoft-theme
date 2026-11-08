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
			'description' => lieusoft_seo_entry( 'description' ),
			'inLanguage' => lieusoft_lang_tag( lieusoft_lang() ),
			'publisher'  => array( '@id' => $org['@id'] ),
		);
	}

	if ( is_page() && ! is_front_page() ) {
		$page_nodes = lieusoft_schema_page_nodes( $org );
		if ( $page_nodes ) {
			$graph[] = $org;
			$graph   = array_merge( $graph, $page_nodes );
		}
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

/* --------------------------------------------------------------------------
 * Page titles & descriptions
 *
 * Pages are one post shown in three languages (/, /bn/, /ar/), so Rank
 * Math's single per-post title can't carry them. Each key page gets a
 * search-focused title and description here, run through __() so the .po
 * files translate them; Rank Math still prints the tags (and reuses them
 * for Open Graph / Twitter).
 * ------------------------------------------------------------------------ */

/**
 * Which SEO entry the current request uses ('' = leave Rank Math alone).
 */
function lieusoft_seo_key() {
	if ( is_front_page() ) {
		return 'front';
	}
	if ( is_home() ) {
		return 'blog';
	}
	if ( ! is_page() ) {
		return '';
	}
	$templates = array(
		'template-products-index.php'   => 'products',
		'template-solutions-index.php'  => 'solutions',
		'template-services.php'         => 'services',
		'template-pricing.php'          => 'pricing',
		'template-case-studies.php'     => 'case-studies',
		'template-product-pdf.php'      => 'product-pdf',
		'template-product-booking.php'  => 'product-booking',
		'template-product-doctor.php'   => 'product-doctor',
		'template-product-tailor.php'   => 'product-tailor',
		'template-solution-doctor.php'  => 'solution-doctor',
		'template-solution-tailor.php'  => 'solution-tailor',
		'template-solution-service.php' => 'solution-service',
	);
	$template = get_page_template_slug( get_queried_object_id() );
	if ( isset( $templates[ $template ] ) ) {
		return $templates[ $template ];
	}
	$slug = get_post_field( 'post_name', get_queried_object_id() );
	return in_array( $slug, array( 'case-studies', 'privacy-policy' ), true ) ? $slug : '';
}

/**
 * Title (≈60 chars) and description (≈155 chars) per key.
 */
function lieusoft_seo_entries() {
	return array(
		'front'            => array(
			__( 'Lieusoft: Business Websites, Booking Systems & WordPress Plugins', 'lieusoft' ),
			__( 'Lieusoft builds complete business websites with online booking, appointment and order systems, plus hosting and support, and sells premium WordPress plugins.', 'lieusoft' ),
		),
		'products'         => array(
			__( 'WordPress Plugins for Booking, Clinics, Tailors & PDFs - Lieusoft', 'lieusoft' ),
			__( 'Premium WordPress plugins by Lieusoft: service booking, doctor appointment, tailor order management and a 3D flipbook PDF viewer. Install them yourself or let us set them up.', 'lieusoft' ),
		),
		'solutions'        => array(
			__( 'Business Solutions for Clinics, Salons & Tailor Shops - Lieusoft', 'lieusoft' ),
			__( 'Complete websites with online booking, appointments or order tracking, set up, hosted and supported by Lieusoft. From ৳12,000 a year plus a one-time installation.', 'lieusoft' ),
		),
		'services'         => array(
			__( 'Website Development, Hosting & WordPress Support - Lieusoft', 'lieusoft' ),
			__( 'Website development, plugin customization, maintenance, migration, business email and automation, built on WordPress and backed by a team that stays with you.', 'lieusoft' ),
		),
		'pricing'          => array(
			__( 'Pricing: Business Solutions & WordPress Plugins - Lieusoft', 'lieusoft' ),
			__( 'Clear prices for Lieusoft business solutions (from ৳12,000/year plus ৳10,000 setup) and WordPress plugins like Flipbook (free, Pro from $29/year), plus fixed quotes for custom work.', 'lieusoft' ),
		),
		'case-studies'     => array(
			__( "Case Studies: Websites & Systems We've Built - Lieusoft", 'lieusoft' ),
			__( "Real projects by Lieusoft: clinic appointment systems, online booking websites and business sites we've designed, built and support for clients around the world.", 'lieusoft' ),
		),
		'blog'             => array(
			__( 'Blog: WordPress, Automation & Business Website Guides - Lieusoft', 'lieusoft' ),
			__( 'Step-by-step guides on WordPress, n8n automation, Facebook and Gmail workflows, online booking and running your business online, from the Lieusoft team.', 'lieusoft' ),
		),
		'product-pdf'      => array(
			__( '3D Flipbook PDF Viewer for WordPress: Free & Pro - Lieusoft', 'lieusoft' ),
			__( 'Turn PDFs into realistic 3D flipbooks on any WordPress site. Free plugin, plus Pro with brand toolbar skins, protected PDF links and download control from $29/year.', 'lieusoft' ),
		),
		'product-booking'  => array(
			__( 'Service Booking & Appointment Plugin for WordPress - Lieusoft', 'lieusoft' ),
			__( 'Online booking plugin for service businesses: staff and schedules, secure payments, email and SMS notifications, custom fields and reports. One-time license from ৳4,999.', 'lieusoft' ),
		),
		'product-doctor'   => array(
			__( 'Doctor Appointment Booking Plugin for WordPress - Lieusoft', 'lieusoft' ),
			__( 'Appointment booking for doctors, clinics and hospitals: doctor schedules, patient management, secure payments, email and SMS notifications and reports. From ৳4,999.', 'lieusoft' ),
		),
		'product-tailor'   => array(
			__( 'Tailor Order & Measurement Management Plugin - Lieusoft', 'lieusoft' ),
			__( 'Manage tailor shop orders, customers, measurements, fabrics, payments and deliveries in WordPress, with reports and an order status board. One-time license from ৳4,999.', 'lieusoft' ),
		),
		'solution-doctor'  => array(
			__( 'Clinic Website & Doctor Appointment System - Lieusoft', 'lieusoft' ),
			__( 'A complete clinic website with online appointment booking, doctor management and patient records, set up, hosted and supported by Lieusoft.', 'lieusoft' ),
		),
		'solution-tailor'  => array(
			__( 'Tailor Shop Website & Order Management System - Lieusoft', 'lieusoft' ),
			__( 'A complete tailor shop website with order tracking, measurement records and delivery management, set up, hosted and supported by Lieusoft.', 'lieusoft' ),
		),
		'solution-service' => array(
			__( 'Booking Website for Salons, Spas & Service Businesses - Lieusoft', 'lieusoft' ),
			__( 'A complete booking website for salons, spas, cleaning, repair and beauty businesses, with online booking and staff management, hosted and supported by Lieusoft.', 'lieusoft' ),
		),
		'privacy-policy'   => array(
			'',
			__( 'How Lieusoft collects, uses and protects your personal information when you use our website, products and services.', 'lieusoft' ),
		),
	);
}

function lieusoft_seo_entry( $part ) {
	$key     = lieusoft_seo_key();
	$entries = $key ? lieusoft_seo_entries() : array();
	return isset( $entries[ $key ] ) ? $entries[ $key ][ 'title' === $part ? 0 : 1 ] : '';
}

function lieusoft_seo_title( $title ) {
	$custom = lieusoft_seo_entry( 'title' );
	return $custom ? $custom : $title;
}
add_filter( 'rank_math/frontend/title', 'lieusoft_seo_title' );

function lieusoft_seo_description( $description ) {
	$custom = lieusoft_seo_entry( 'description' );
	return $custom ? $custom : $description;
}
add_filter( 'rank_math/frontend/description', 'lieusoft_seo_description' );

/**
 * Cart, checkout (and its receipt/history pages) and My Account: never in
 * search results. The page meta also sets this in Rank Math so they drop
 * out of the sitemap; this covers any future checkout sub-page too.
 */
function lieusoft_seo_is_private_page() {
	if ( ! is_page() ) {
		return false;
	}
	if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() ) {
		return true;
	}
	$id       = get_queried_object_id();
	$checkout = function_exists( 'edd_get_option' ) ? (int) edd_get_option( 'purchase_page' ) : 0;
	if ( $checkout && in_array( $checkout, array_map( 'intval', get_post_ancestors( $id ) ), true ) ) {
		return true; // Receipt, confirmation, order history, failed transaction.
	}
	return in_array( get_page_template_slug( $id ), array( 'template-cart.php', 'template-my-account.php' ), true );
}

function lieusoft_seo_noindex_shop_pages( $robots ) {
	if ( lieusoft_seo_is_private_page() ) {
		$robots['index']  = 'noindex';
		$robots['follow'] = 'follow';
	}
	return $robots;
}
add_filter( 'rank_math/frontend/robots', 'lieusoft_seo_noindex_shop_pages' );

/**
 * Structured data for pages: the page itself, its breadcrumb trail and, on
 * plugin pages, the plugin as a SoftwareApplication with its real prices.
 */
function lieusoft_schema_page_nodes( $org ) {
	$key = lieusoft_seo_key();
	if ( ! $key || 'front' === $key || 'blog' === $key ) {
		return array();
	}
	$post = get_queried_object();
	$url  = home_url( '/' . get_page_uri( $post ) . '/' );
	$lang = lieusoft_lang_tag( lieusoft_lang() );

	$parents = array(
		'product'  => array( __( 'Products', 'lieusoft' ), home_url( '/products/' ) ),
		'solution' => array( __( 'Solutions', 'lieusoft' ), home_url( '/solutions/' ) ),
	);
	$crumbs = array( array( __( 'Home', 'lieusoft' ), home_url( '/' ) ) );
	$group  = strtok( $key, '-' );
	if ( isset( $parents[ $group ] ) && false !== strpos( $key, '-' ) ) {
		$crumbs[] = $parents[ $group ];
	}
	$crumbs[] = array( get_the_title( $post ), $url );

	$nodes = array(
		array_filter( array(
			'@type'       => 'WebPage',
			'@id'         => $url . '#webpage',
			'url'         => $url,
			'name'        => lieusoft_seo_title( get_the_title( $post ) ),
			'description' => lieusoft_seo_entry( 'description' ),
			'inLanguage'  => $lang,
			'isPartOf'    => array( '@id' => trailingslashit( home_url( '/' ) ) . '#website' ),
			'publisher'   => array( '@id' => $org['@id'] ),
		) ),
		array(
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array_map(
				function ( $crumb, $i ) {
					return array( '@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb[0], 'item' => $crumb[1] );
				},
				$crumbs,
				array_keys( $crumbs )
			),
		),
	);

	$software = array(
		'product-pdf'     => array( 'Flipbook PDF Viewer & Embedder', 'USD', array( 'Free' => '0', 'Pro Single' => '29', 'Lifetime' => '79', 'Pro 10' => '99' ) ),
		'product-booking' => array( 'Service Booking', 'BDT', array( 'Regular License' => '4999', 'Extended License' => '8999' ) ),
		'product-doctor'  => array( 'Doctor Appointment', 'BDT', array( 'Regular License' => '4999', 'Extended License' => '8999' ) ),
		'product-tailor'  => array( 'Tailor Order Management', 'BDT', array( 'Regular License' => '4999', 'Extended License' => '8999' ) ),
	);
	if ( isset( $software[ $key ] ) ) {
		list( $name, $currency, $plans ) = $software[ $key ];
		$offers = array();
		foreach ( $plans as $plan => $price ) {
			$offers[] = array(
				'@type'         => 'Offer',
				'name'          => $plan,
				'price'         => $price,
				'priceCurrency' => $currency,
				'availability'  => 'https://schema.org/InStock',
				'url'           => $url . '#pricing',
			);
		}
		$nodes[] = array(
			'@type'               => 'SoftwareApplication',
			'@id'                 => $url . '#software',
			'name'                => $name,
			'description'         => lieusoft_seo_entry( 'description' ),
			'url'                 => $url,
			'applicationCategory' => 'BusinessApplication',
			'operatingSystem'     => 'WordPress',
			'inLanguage'          => $lang,
			'publisher'           => array( '@id' => $org['@id'] ),
			'offers'              => $offers,
		);
	}
	return $nodes;
}

function lieusoft_output_schema() {
	$graph = lieusoft_schema_graph();
	if ( $graph ) {
		echo '<script type="application/ld+json">' . wp_json_encode( array( '@context' => 'https://schema.org', '@graph' => $graph ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>\n";
	}
}
add_action( 'wp_head', 'lieusoft_output_schema', 30 );

/**
 * Share images: WhatsApp drops link-preview images much over 300 KB, so
 * when an og:image attachment is heavier, Rank Math is pointed at the
 * largest generated size of the same image that stays under the limit.
 */
function lieusoft_og_remember_attachment( $attachment_id ) {
	$GLOBALS['lieusoft_og_attachment'] = (int) $attachment_id;
}
add_action( 'rank_math/opengraph/pre_attachment_image_check', 'lieusoft_og_remember_attachment' );

function lieusoft_og_image_sizes( $sizes ) {
	$id   = $GLOBALS['lieusoft_og_attachment'] ?? 0;
	$file = $id ? get_attached_file( $id ) : '';
	$meta = $id ? wp_get_attachment_metadata( $id ) : array();
	$max  = 300 * KB_IN_BYTES;
	if ( ! $file || ! file_exists( $file ) || filesize( $file ) <= $max || empty( $meta['sizes'] ) ) {
		return $sizes;
	}

	$light = array();
	foreach ( $meta['sizes'] as $name => $size ) {
		$path = path_join( dirname( $file ), $size['file'] );
		if ( min( $size['width'], $size['height'] ) >= 200 && file_exists( $path ) && filesize( $path ) <= $max ) {
			$light[ $name ] = $size['width'] * $size['height'];
		}
	}
	arsort( $light );
	return $light ? array_keys( $light ) : $sizes;
}
add_filter( 'rank_math/opengraph/image_sizes', 'lieusoft_og_image_sizes' );

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

/* --------------------------------------------------------------------------
 * Sitemap & duplicate URLs (Rank Math sitemap module)
 * ------------------------------------------------------------------------ */

/**
 * Pages are served in Bangla and Arabic under /bn/ and /ar/ but exist once
 * in the database, so Rank Math only lists the English URL. Add the other
 * two for every indexable page (blog posts are separate posts per language
 * and are listed already).
 */
function lieusoft_sitemap_language_pages( $xml ) {
	$pages = get_posts( array(
		'post_type'        => 'page',
		'post_status'      => 'publish',
		'posts_per_page'   => 200,
		'orderby'          => 'menu_order ID',
		'order'            => 'ASC',
		'suppress_filters' => true,
	) );
	$checkout = function_exists( 'edd_get_option' ) ? (int) edd_get_option( 'purchase_page' ) : 0;
	foreach ( $pages as $page ) {
		$robots = (array) get_post_meta( $page->ID, 'rank_math_robots', true );
		if ( in_array( 'noindex', $robots, true )
			|| ( $checkout && ( $checkout === $page->ID || in_array( $checkout, array_map( 'intval', get_post_ancestors( $page ) ), true ) ) )
			|| in_array( get_page_template_slug( $page ), array( 'template-cart.php', 'template-my-account.php' ), true ) ) {
			continue;
		}
		$url = get_permalink( $page );
		foreach ( array_keys( lieusoft_languages() ) as $code ) {
			if ( 'en' === $code ) {
				continue;
			}
			$xml .= "\t<url>\n\t\t<loc>" . esc_url( lieusoft_localize_url( $url, $code ) ) . "</loc>\n\t\t<lastmod>" . esc_html( get_post_modified_time( 'c', true, $page ) ) . "</lastmod>\n\t</url>\n";
		}
	}
	return $xml;
}
add_filter( 'rank_math/sitemap/page_content', 'lieusoft_sitemap_language_pages' );

/**
 * EDD's own product pages (/downloads/…) duplicate the designed product
 * pages: keep them out of the sitemap and send visitors and search engines
 * to the real page with a permanent redirect.
 */
function lieusoft_sitemap_exclude_downloads( $exclude, $post_type ) {
	return 'download' === $post_type ? true : $exclude;
}
add_filter( 'rank_math/sitemap/exclude_post_type', 'lieusoft_sitemap_exclude_downloads', 10, 2 );

function lieusoft_redirect_edd_product_pages() {
	if ( is_admin() || ! ( is_singular( 'download' ) || is_post_type_archive( 'download' ) ) ) {
		return;
	}
	$pages  = array( 390 => '/pdf-embed-viewer/' ); // EDD download ID => designed product page.
	$target = is_singular( 'download' ) && isset( $pages[ get_queried_object_id() ] ) ? $pages[ get_queried_object_id() ] : '/products/';
	wp_safe_redirect( home_url( $target ), 301 );
	exit;
}
add_action( 'template_redirect', 'lieusoft_redirect_edd_product_pages', 1 );
