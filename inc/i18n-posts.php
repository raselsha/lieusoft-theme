<?php
/**
 * Blog posts in several languages, without a plugin or extra tables.
 *
 * Each post is written in one language (post meta `_lieusoft_lang`; none
 * means English). Translations of the same article share a group id
 * (`_lieusoft_tr_group`, the id of the article's first post). A post always
 * lives under its own language's prefix — a Bangla post at /bn/slug/ — and
 * blog listings only show posts in the visitor's language.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const LIEUSOFT_LANG_META  = '_lieusoft_lang';
const LIEUSOFT_GROUP_META = '_lieusoft_tr_group';

/**
 * A post's language code ('en' when unset).
 */
function lieusoft_post_lang( $post = null ) {
	$post = get_post( $post );
	$lang = $post ? get_post_meta( $post->ID, LIEUSOFT_LANG_META, true ) : '';
	return isset( lieusoft_languages()[ $lang ] ) ? $lang : 'en';
}

/**
 * The translation group a post belongs to (its own id when it has none).
 */
function lieusoft_post_group( $post_id ) {
	$group = (int) get_post_meta( $post_id, LIEUSOFT_GROUP_META, true );
	return $group ? $group : (int) $post_id;
}

/**
 * Published versions of a post, keyed by language: array( 'en' => 12, 'bn' => 40 ).
 */
function lieusoft_post_translations( $post_id ) {
	$group = lieusoft_post_group( $post_id );
	$ids   = get_posts( array(
		'post_type'        => 'post',
		'post_status'      => 'publish',
		'posts_per_page'   => 20,
		'fields'           => 'ids',
		'orderby'          => 'ID',
		'order'            => 'ASC',
		'suppress_filters' => true,
		'meta_key'         => LIEUSOFT_GROUP_META, // phpcs:ignore WordPress.DB.SlowDBQuery
		'meta_value'       => $group, // phpcs:ignore WordPress.DB.SlowDBQuery
	) );
	$ids[] = $group; // The group's first post may never have been given the meta.

	$translations = array();
	foreach ( array_unique( array_map( 'intval', $ids ) ) as $id ) {
		if ( 'publish' !== get_post_status( $id ) || 'post' !== get_post_type( $id ) || lieusoft_post_group( $id ) !== $group ) {
			continue;
		}
		$lang = lieusoft_post_lang( $id );
		if ( ! isset( $translations[ $lang ] ) ) {
			$translations[ $lang ] = $id;
		}
	}
	// The post being viewed always represents its own language.
	if ( 'publish' === get_post_status( $post_id ) ) {
		$translations[ lieusoft_post_lang( $post_id ) ] = (int) $post_id;
	}
	return $translations;
}

/**
 * Meta query matching posts in one language (English also matches posts
 * that were never given a language).
 */
function lieusoft_lang_meta_query( $lang ) {
	if ( 'en' === $lang ) {
		return array(
			'relation' => 'OR',
			array( 'key' => LIEUSOFT_LANG_META, 'compare' => 'NOT EXISTS' ),
			array( 'key' => LIEUSOFT_LANG_META, 'value' => array( '', 'en' ), 'compare' => 'IN' ),
		);
	}
	return array( array( 'key' => LIEUSOFT_LANG_META, 'value' => $lang ) );
}

/**
 * Remove a language prefix from a site URL: "https://site/bn/x/" → "https://site/x/".
 */
function lieusoft_delocalize_url( $url ) {
	$home = untrailingslashit( get_option( 'home' ) );
	if ( 0 !== strpos( $url, $home ) ) {
		return $url;
	}
	$rest  = substr( $url, strlen( $home ) );
	$codes = implode( '|', array_diff( array_keys( lieusoft_languages() ), array( 'en' ) ) );
	return $home . preg_replace( '#^/(' . $codes . ')(?=/|\?|\#|$)#', '', $rest );
}

/**
 * Post permalinks carry the post's own language, wherever they are printed.
 */
function lieusoft_post_permalink( $url, $post ) {
	if ( 'post' !== get_post_type( $post ) ) {
		return $url;
	}
	return lieusoft_localize_url( lieusoft_delocalize_url( $url ), lieusoft_post_lang( $post ) );
}
add_filter( 'post_link', 'lieusoft_post_permalink', 10, 2 );

/**
 * Blog listings (index, categories, tags, authors, dates, search) only list
 * posts in the visitor's language.
 */
function lieusoft_filter_posts_by_language( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( $query->is_home() || $query->is_category() || $query->is_tag() || $query->is_author() || $query->is_date() || $query->is_search() ) {
		$meta_query = (array) $query->get( 'meta_query' );
		$meta_query[] = lieusoft_lang_meta_query( lieusoft_lang() );
		$query->set( 'meta_query', $meta_query );
	}
}
add_action( 'pre_get_posts', 'lieusoft_filter_posts_by_language' );

/* -------------------------------------------------------------------------
 * Shared slugs: translations may use the same slug (/blog/x/, /bn/blog/x/,
 * /ar/blog/x/) — the language prefix tells them apart.
 * ---------------------------------------------------------------------- */

/**
 * The language a post is being saved in (the editor box's choice wins over
 * the stored value, which isn't updated yet when the slug is worked out).
 */
function lieusoft_saving_post_lang( $post_id ) {
	// phpcs:ignore WordPress.Security.NonceVerification.Missing -- read-only; the nonce is checked when the value is saved.
	$lang = isset( $_POST['lieusoft_post_lang'] ) ? sanitize_key( wp_unslash( $_POST['lieusoft_post_lang'] ) ) : '';
	return isset( lieusoft_languages()[ $lang ] ) ? $lang : lieusoft_post_lang( $post_id );
}

/**
 * Whether a published/draft post in $lang (other than $post_id) already uses $slug.
 */
function lieusoft_slug_taken_in_lang( $slug, $lang, $post_id ) {
	$ids = get_posts( array(
		'post_type'        => 'post',
		'post_status'      => array( 'publish', 'draft', 'pending', 'future', 'private' ),
		'name'             => $slug,
		'post__not_in'     => array( (int) $post_id ),
		'posts_per_page'   => 10,
		'fields'           => 'ids',
		'suppress_filters' => true,
	) );
	foreach ( $ids as $id ) {
		if ( lieusoft_post_lang( $id ) === $lang ) {
			return true;
		}
	}
	return false;
}

function lieusoft_unique_post_slug( $slug, $post_id, $post_status, $post_type, $post_parent, $original_slug ) {
	if ( 'post' !== $post_type || $slug === $original_slug ) {
		return $slug;
	}
	return lieusoft_slug_taken_in_lang( $original_slug, lieusoft_saving_post_lang( $post_id ), $post_id ) ? $slug : $original_slug;
}
add_filter( 'wp_unique_post_slug', 'lieusoft_unique_post_slug', 10, 6 );

/**
 * A single-post URL resolves to the post in the URL's language.
 */
function lieusoft_resolve_shared_slug( $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! $query->is_single() || '' === (string) $query->get( 'name' ) || $query->is_preview() ) {
		return;
	}
	$meta_query   = (array) $query->get( 'meta_query' );
	$meta_query[] = lieusoft_lang_meta_query( lieusoft_lang() );
	$query->set( 'meta_query', $meta_query );
}
add_action( 'pre_get_posts', 'lieusoft_resolve_shared_slug' );

/**
 * A post opened under another language's prefix (/ar/bangla-post/) moves to
 * its own URL, so the page chrome always matches the article's language.
 * Unknown post URLs — older date-based permalinks, renamed slugs, or a slug
 * that only exists in another language — are sent to the post they meant.
 */
function lieusoft_redirect_post_language() {
	if ( is_singular( 'post' ) && ! is_preview() && lieusoft_post_lang() !== lieusoft_lang() ) {
		wp_safe_redirect( get_permalink(), 301 );
		exit;
	}

	if ( ! is_404() || ! preg_match( '#^/(?:blog/|\d{4}/\d{2}/(?:\d{2}/)?)?([^/]+)/?$#', lieusoft_request_path(), $m ) ) {
		return;
	}
	$slug = sanitize_title( rawurldecode( $m[1] ) );
	$ids  = get_posts( array( 'post_type' => 'post', 'name' => $slug, 'posts_per_page' => 10, 'fields' => 'ids', 'suppress_filters' => true ) );
	if ( ! $ids ) {
		$ids = get_posts( array(
			'post_type'        => 'post',
			'posts_per_page'   => 10,
			'fields'           => 'ids',
			'suppress_filters' => true,
			'meta_key'         => '_wp_old_slug', // phpcs:ignore WordPress.DB.SlowDBQuery
			'meta_value'       => $slug, // phpcs:ignore WordPress.DB.SlowDBQuery
		) );
	}
	if ( ! $ids ) {
		return;
	}
	$target = $ids[0];
	foreach ( $ids as $id ) {
		if ( lieusoft_post_lang( $id ) === lieusoft_lang() ) {
			$target = $id;
			break;
		}
	}
	wp_safe_redirect( get_permalink( $target ), 301 );
	exit;
}
add_action( 'template_redirect', 'lieusoft_redirect_post_language', 9 );

/* -------------------------------------------------------------------------
 * Editor: language + "translation of" box, and a Language column.
 * ---------------------------------------------------------------------- */

function lieusoft_add_language_box() {
	add_meta_box( 'lieusoft-language', __( 'Language', 'lieusoft' ), 'lieusoft_render_language_box', 'post', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'lieusoft_add_language_box' );

function lieusoft_render_language_box( $post ) {
	$lang      = lieusoft_post_lang( $post );
	$group     = lieusoft_post_group( $post->ID );
	$linked_to = $group !== $post->ID ? $group : 0;
	$others    = get_posts( array(
		'post_type'      => 'post',
		'post_status'    => array( 'publish', 'draft', 'pending', 'future', 'private' ),
		'posts_per_page' => 200,
		'post__not_in'   => array( $post->ID ),
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	wp_nonce_field( 'lieusoft_language_box', 'lieusoft_language_nonce' );
	?>
	<p>
		<label for="lieusoft-post-lang"><strong><?php esc_html_e( 'This post is written in', 'lieusoft' ); ?></strong></label><br>
		<select id="lieusoft-post-lang" name="lieusoft_post_lang" style="width:100%">
			<?php foreach ( lieusoft_languages() as $code => $language ) : ?>
				<option value="<?php echo esc_attr( $code ); ?>" <?php selected( $lang, $code ); ?>><?php echo esc_html( $language['name'] ); ?></option>
			<?php endforeach; ?>
		</select>
	</p>
	<p>
		<label for="lieusoft-translation-of"><strong><?php esc_html_e( 'Translation of', 'lieusoft' ); ?></strong></label><br>
		<select id="lieusoft-translation-of" name="lieusoft_translation_of" style="width:100%">
			<option value="0"><?php esc_html_e( '— None (original article) —', 'lieusoft' ); ?></option>
			<?php foreach ( $others as $other ) : ?>
				<option value="<?php echo esc_attr( $other->ID ); ?>" <?php selected( $linked_to, $other->ID ); ?>>
					<?php echo esc_html( '[' . lieusoft_languages()[ lieusoft_post_lang( $other ) ]['short'] . '] ' . ( $other->post_title ? $other->post_title : __( '(no title)', 'lieusoft' ) ) ); ?>
				</option>
			<?php endforeach; ?>
		</select>
		<span class="description"><?php esc_html_e( 'Pick the post this one translates so visitors can switch between them.', 'lieusoft' ); ?></span>
	</p>
	<?php
	$translations = lieusoft_post_translations( $post->ID );
	unset( $translations[ $lang ] );
	if ( $translations ) :
		?>
		<p><strong><?php esc_html_e( 'Linked translations', 'lieusoft' ); ?></strong></p>
		<ul style="margin:0">
			<?php foreach ( $translations as $code => $id ) : ?>
				<li><?php echo esc_html( lieusoft_languages()[ $code ]['name'] ); ?>: <a href="<?php echo esc_url( get_edit_post_link( $id ) ); ?>"><?php echo esc_html( get_the_title( $id ) ); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php
	endif;
}

function lieusoft_save_language_box( $post_id ) {
	if ( ! isset( $_POST['lieusoft_language_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['lieusoft_language_nonce'] ), 'lieusoft_language_box' ) ) {
		return;
	}
	if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || wp_is_post_revision( $post_id ) || ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$lang = isset( $_POST['lieusoft_post_lang'] ) ? sanitize_key( $_POST['lieusoft_post_lang'] ) : 'en';
	update_post_meta( $post_id, LIEUSOFT_LANG_META, isset( lieusoft_languages()[ $lang ] ) ? $lang : 'en' );

	$source = isset( $_POST['lieusoft_translation_of'] ) ? absint( $_POST['lieusoft_translation_of'] ) : 0;
	if ( $source && $source !== $post_id && 'post' === get_post_type( $source ) ) {
		$group = lieusoft_post_group( $source );
		update_post_meta( $source, LIEUSOFT_GROUP_META, $group );
		update_post_meta( $post_id, LIEUSOFT_GROUP_META, $group );
	} elseif ( lieusoft_post_group( $post_id ) !== $post_id && ! $source ) {
		update_post_meta( $post_id, LIEUSOFT_GROUP_META, $post_id ); // Unlinked.
	}

	// The block editor saves the post (and its slug) before this box, so a
	// translation reusing its original's slug got a "-2" suffix — drop it.
	$name = (string) get_post_field( 'post_name', $post_id );
	if ( preg_match( '/^(.+)-\d+$/', $name, $m ) && ! lieusoft_slug_taken_in_lang( $m[1], lieusoft_post_lang( $post_id ), $post_id )
		&& get_posts( array( 'post_type' => 'post', 'post_status' => 'any', 'name' => $m[1], 'post__not_in' => array( $post_id ), 'fields' => 'ids', 'posts_per_page' => 1 ) ) ) {
		remove_action( 'save_post_post', 'lieusoft_save_language_box' );
		wp_update_post( array( 'ID' => $post_id, 'post_name' => $m[1] ) );
		add_action( 'save_post_post', 'lieusoft_save_language_box' );
	}
}
add_action( 'save_post_post', 'lieusoft_save_language_box' );

function lieusoft_language_column( $columns ) {
	$columns['lieusoft_lang'] = __( 'Language', 'lieusoft' );
	return $columns;
}
add_filter( 'manage_post_posts_columns', 'lieusoft_language_column' );

function lieusoft_language_column_value( $column, $post_id ) {
	if ( 'lieusoft_lang' !== $column ) {
		return;
	}
	$lang = lieusoft_post_lang( $post_id );
	echo esc_html( lieusoft_languages()[ $lang ]['name'] );
	$translations = lieusoft_post_translations( $post_id );
	unset( $translations[ $lang ] );
	if ( $translations ) {
		echo '<br><small>+ ' . esc_html( implode( ', ', array_map( function ( $code ) {
			return lieusoft_languages()[ $code ]['short'];
		}, array_keys( $translations ) ) ) ) . '</small>';
	}
}
add_action( 'manage_post_posts_custom_column', 'lieusoft_language_column_value', 10, 2 );
