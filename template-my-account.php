<?php
/**
 * Template Name: My Account
 *
 * Logged out: a split card — what the account gives you on the left, log in
 * / create account tabs on the right. Logged in: a dashboard with a side
 * menu (overview, orders, downloads, license keys, profile); the panels
 * switch in place (theme.js, [data-lsac-tabs]) and each has its own #hash.
 */

nocache_headers();
if ( ! defined( 'DONOTCACHEPAGE' ) ) {
	define( 'DONOTCACHEPAGE', true );
}

get_header();

$lieusoft_user    = wp_get_current_user();
$lieusoft_account = home_url( '/my-account/' );
?>

<main class="section lsac">
	<div class="container">

		<?php if ( ! is_user_logged_in() ) : ?>
			<div class="lsac-split" data-lsac-tabs>
				<div class="lsac-split__aside">
					<span class="lsac-split__logo"><?php echo lieusoft_icon( 'user' ); ?></span>
					<h1><?php esc_html_e( 'Your Lieusoft account', 'lieusoft' ); ?></h1>
					<p><?php esc_html_e( 'Everything you bought, in one place.', 'lieusoft' ); ?></p>
					<ul class="lsac-benefits">
						<li><?php echo lieusoft_icon( 'file-text' ); ?><span><strong><?php esc_html_e( 'Orders & receipts', 'lieusoft' ); ?></strong><?php esc_html_e( 'Every purchase with its receipt.', 'lieusoft' ); ?></span></li>
						<li><?php echo lieusoft_icon( 'download' ); ?><span><strong><?php esc_html_e( 'Downloads', 'lieusoft' ); ?></strong><?php esc_html_e( 'Get the latest plugin files any time.', 'lieusoft' ); ?></span></li>
						<li><?php echo lieusoft_icon( 'lock' ); ?><span><strong><?php esc_html_e( 'License keys', 'lieusoft' ); ?></strong><?php esc_html_e( 'Your keys, expiry dates and active sites.', 'lieusoft' ); ?></span></li>
					</ul>
					<p class="lsac-split__note"><?php esc_html_e( 'Bought as a guest? Create an account with the same email and your past orders appear here.', 'lieusoft' ); ?></p>
				</div>

				<div class="lsac-split__main">
					<div class="lsac-seg" role="tablist" aria-label="<?php esc_attr_e( 'Account', 'lieusoft' ); ?>">
						<button type="button" role="tab" id="lsac-tab-login" aria-controls="login" aria-selected="true" data-tab="login"><?php esc_html_e( 'Log in', 'lieusoft' ); ?></button>
						<button type="button" role="tab" id="lsac-tab-register" aria-controls="register" aria-selected="false" data-tab="register"><?php esc_html_e( 'Create account', 'lieusoft' ); ?></button>
					</div>

					<div class="lsac-panel lsac-form" id="login" role="tabpanel" aria-labelledby="lsac-tab-login">
						<h2><?php esc_html_e( 'Welcome back', 'lieusoft' ); ?></h2>
						<p class="lsac-muted"><?php esc_html_e( 'Log in with your username or email.', 'lieusoft' ); ?></p>
						<?php echo do_blocks( '<!-- wp:edd/login {"redirect":"' . esc_url( $lieusoft_account ) . '"} /-->' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</div>

					<div class="lsac-panel lsac-form" id="register" role="tabpanel" aria-labelledby="lsac-tab-register" hidden>
						<h2><?php esc_html_e( 'Create your account', 'lieusoft' ); ?></h2>
						<p class="lsac-muted"><?php esc_html_e( 'Use the email you bought with to see your orders and keys.', 'lieusoft' ); ?></p>
						<?php echo do_blocks( '<!-- wp:edd/register {"redirect":"' . esc_url( $lieusoft_account ) . '"} /-->' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</div>
				</div>
			</div>

		<?php else : ?>
			<?php
			$lieusoft_orders = function_exists( 'edd_get_orders' )
				? edd_get_orders( array( 'user_id' => $lieusoft_user->ID, 'type' => 'sale', 'status__in' => array( 'complete', 'partially_refunded' ), 'number' => 999, 'fields' => 'ids' ) )
				: array();

			$lieusoft_licenses = array();
			if ( post_type_exists( 'lsl_license' ) ) {
				$lieusoft_licenses = get_posts( array(
					'post_type'      => 'lsl_license',
					'posts_per_page' => 200,
					'fields'         => 'ids',
					'meta_key'       => '_lsl_customer_email', // phpcs:ignore WordPress.DB.SlowDBQuery
					'meta_value'     => $lieusoft_user->user_email, // phpcs:ignore WordPress.DB.SlowDBQuery
				) );
			}
			$lieusoft_active = array_filter( $lieusoft_licenses, function ( $id ) {
				$expires = get_post_meta( $id, '_lsl_expires', true );
				return 'revoked' !== get_post_meta( $id, '_lsl_status', true ) && ( ! $expires || strtotime( $expires ) >= current_time( 'timestamp' ) );
			} );
			$lieusoft_name = $lieusoft_user->first_name ? $lieusoft_user->first_name : $lieusoft_user->display_name;
			$lieusoft_tabs = array(
				'overview'  => array( 'grid', __( 'Overview', 'lieusoft' ) ),
				'orders'    => array( 'file-text', __( 'Orders', 'lieusoft' ) ),
				'downloads' => array( 'download', __( 'Downloads', 'lieusoft' ) ),
				'licenses'  => array( 'lock', __( 'License keys', 'lieusoft' ) ),
				'profile'   => array( 'user', __( 'Profile', 'lieusoft' ) ),
			);
			?>
			<div class="lsac-dash" data-lsac-tabs>
				<aside class="lsac-side">
					<div class="lsac-side__user">
						<span class="lsac-avatar" aria-hidden="true"><?php echo esc_html( strtoupper( mb_substr( $lieusoft_name, 0, 1 ) ) ); ?></span>
						<span>
							<strong><?php echo esc_html( $lieusoft_name ); ?></strong>
							<small><?php echo esc_html( $lieusoft_user->user_email ); ?></small>
						</span>
					</div>
					<nav class="lsac-side__nav" role="tablist" aria-label="<?php esc_attr_e( 'Account sections', 'lieusoft' ); ?>" aria-orientation="vertical">
						<?php foreach ( $lieusoft_tabs as $key => $tab ) : ?>
							<button type="button" role="tab" id="lsac-tab-<?php echo esc_attr( $key ); ?>" aria-controls="<?php echo esc_attr( $key ); ?>" aria-selected="<?php echo 'overview' === $key ? 'true' : 'false'; ?>" data-tab="<?php echo esc_attr( $key ); ?>"><?php echo lieusoft_icon( $tab[0] ); ?><?php echo esc_html( $tab[1] ); ?></button>
						<?php endforeach; ?>
					</nav>
					<a class="lsac-side__logout" href="<?php echo esc_url( wp_logout_url( $lieusoft_account ) ); ?>"><?php echo lieusoft_icon( 'arrow-right' ); ?><?php esc_html_e( 'Log out', 'lieusoft' ); ?></a>
				</aside>

				<div class="lsac-content">
					<section class="lsac-panel" id="overview" role="tabpanel" aria-labelledby="lsac-tab-overview">
						<h1 class="lsac-hello"><?php echo esc_html( sprintf( __( 'Hi, %s', 'lieusoft' ), $lieusoft_name ) ); ?></h1>
						<p class="lsac-muted"><?php esc_html_e( 'Here is everything on your account.', 'lieusoft' ); ?></p>
						<div class="lsac-stats">
							<button type="button" class="lsac-stat" data-tab="orders"><?php echo lieusoft_icon( 'file-text' ); ?><strong><?php echo esc_html( number_format_i18n( count( $lieusoft_orders ) ) ); ?></strong><span><?php esc_html_e( 'Orders', 'lieusoft' ); ?></span></button>
							<button type="button" class="lsac-stat" data-tab="licenses"><?php echo lieusoft_icon( 'lock' ); ?><strong><?php echo esc_html( number_format_i18n( count( $lieusoft_active ) ) ); ?></strong><span><?php esc_html_e( 'Active licenses', 'lieusoft' ); ?></span></button>
							<button type="button" class="lsac-stat" data-tab="downloads"><?php echo lieusoft_icon( 'download' ); ?><strong><?php echo esc_html( number_format_i18n( count( $lieusoft_licenses ) ) ); ?></strong><span><?php esc_html_e( 'Products', 'lieusoft' ); ?></span></button>
						</div>
						<div class="lsac-help">
							<span><?php echo lieusoft_icon( 'headset' ); ?></span>
							<div>
								<strong><?php esc_html_e( 'Need help with a license or download?', 'lieusoft' ); ?></strong>
								<p><?php esc_html_e( 'Write to us and we usually reply within a day.', 'lieusoft' ); ?></p>
							</div>
							<a class="btn btn--outline" href="mailto:hello@lieusoft.com"><?php esc_html_e( 'Contact support', 'lieusoft' ); ?></a>
						</div>
					</section>

					<section class="lsac-panel lsac-card" id="orders" role="tabpanel" aria-labelledby="lsac-tab-orders" hidden>
						<h2><?php esc_html_e( 'Orders', 'lieusoft' ); ?></h2>
						<?php echo do_blocks( '<!-- wp:edd/order-history /-->' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</section>
					<section class="lsac-panel lsac-card" id="downloads" role="tabpanel" aria-labelledby="lsac-tab-downloads" hidden>
						<h2><?php esc_html_e( 'Downloads', 'lieusoft' ); ?></h2>
						<?php echo do_blocks( '<!-- wp:edd/user-downloads /-->' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</section>
					<section class="lsac-panel lsac-card" id="licenses" role="tabpanel" aria-labelledby="lsac-tab-licenses" hidden>
						<h2><?php esc_html_e( 'License keys', 'lieusoft' ); ?></h2>
						<?php echo do_shortcode( '[lsl_my_licenses]' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</section>
					<section class="lsac-panel lsac-card lsac-form" id="profile" role="tabpanel" aria-labelledby="lsac-tab-profile" hidden>
						<h2><?php esc_html_e( 'Profile', 'lieusoft' ); ?></h2>
						<?php echo do_blocks( '<!-- wp:edd/profile-editor /-->' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
					</section>
				</div>
			</div>
		<?php endif; ?>

	</div>
</main>

<?php
get_footer();
