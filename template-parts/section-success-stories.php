<?php
/**
 * Homepage "Success Stories" — heading row, the 3 real delivered projects
 * as full-width cards, then a track-record strip. Replaces the single-project case-study
 * section with all 3 real case studies the site already documents.
 */
$lieusoft_success_stories = array(
	array(
		'title'    => __( 'CozyThai – Thai Massage Booking Website', 'lieusoft' ),
		'industry' => __( 'Massage & Wellness', 'lieusoft' ),
		'image'    => 'case-study-preview.jpg',
		'tags'     => array( __( 'Website', 'lieusoft' ), __( 'Booking System', 'lieusoft' ), __( 'Hosting', 'lieusoft' ), __( 'Support', 'lieusoft' ) ),
		'url'      => 'https://cozythai.pt/',
		'external' => true,
	),
	array(
		'title'    => __( 'Doctor Appointment Website', 'lieusoft' ),
		'industry' => __( 'Healthcare', 'lieusoft' ),
		'image'    => 'solution-doctor-bg.jpg',
		'tags'     => array( __( 'Clinic Website', 'lieusoft' ), __( 'Appointment Booking', 'lieusoft' ), __( 'Patient Management', 'lieusoft' ) ),
		'url'      => home_url( '/doctor-appointment-solution/' ),
		'external' => false,
	),
	array(
		'title'    => __( 'Tailor Management Website', 'lieusoft' ),
		'industry' => __( 'Tailoring & Fashion', 'lieusoft' ),
		'image'    => 'solution-tailor-bg.jpg',
		'tags'     => array( __( 'Order Management', 'lieusoft' ), __( 'Measurements', 'lieusoft' ), __( 'Invoices', 'lieusoft' ) ),
		'url'      => home_url( '/tailor-shop-management-solution/' ),
		'external' => false,
	),
);
?>
<section class="section success-stories">
	<div class="container">

		<div class="success-stories__head">
			<div class="success-stories__intro">
				<span class="eyebrow"><?php esc_html_e( 'Real Client Work', 'lieusoft' ); ?></span>
				<h2><?php esc_html_e( 'Successfully Delivered', 'lieusoft' ); ?> <span class="text-primary"><?php esc_html_e( 'Business Websites', 'lieusoft' ); ?></span></h2>
				<p><?php esc_html_e( 'Every project we take on is scoped carefully, built to the agreed plan, and handed over complete — hosting, domain, SSL and support included from day one.', 'lieusoft' ); ?></p>
			</div>
			<a class="link-arrow success-stories__all" href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				<?php esc_html_e( 'View All Case Studies', 'lieusoft' ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>
		</div>

		<div class="success-stories__cards">
			<?php foreach ( $lieusoft_success_stories as $story ) : ?>
				<?php $lieusoft_target = $story['external'] ? ' target="_blank" rel="noopener"' : ''; ?>
				<article class="story-card">
					<a class="story-card__media" href="<?php echo esc_url( $story['url'] ); ?>"<?php echo $lieusoft_target; // phpcs:ignore WordPress.Security.EscapeOutput ?> tabindex="-1" aria-hidden="true">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $story['image'] ) ); ?>" alt="" loading="lazy" decoding="async">
						<span class="story-card__badge"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Completed', 'lieusoft' ); ?></span>
					</a>
					<div class="story-card__body">
						<span class="story-card__industry"><?php echo esc_html( $story['industry'] ); ?></span>
						<h3 class="story-card__title"><a href="<?php echo esc_url( $story['url'] ); ?>"<?php echo $lieusoft_target; // phpcs:ignore WordPress.Security.EscapeOutput ?>><?php echo esc_html( $story['title'] ); ?></a></h3>
						<ul class="story-card__tags">
							<?php foreach ( $story['tags'] as $tag ) : ?>
								<li><?php echo esc_html( $tag ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="link-arrow story-card__link" href="<?php echo esc_url( $story['url'] ); ?>"<?php echo $lieusoft_target; // phpcs:ignore WordPress.Security.EscapeOutput ?>>
							<?php esc_html_e( 'View Case Study', 'lieusoft' ); ?>
							<?php echo lieusoft_icon( 'arrow-right' ); ?>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="success-stories__banner">
			<div class="success-stories__banner-text">
				<span class="success-stories__banner-label"><?php esc_html_e( 'Our Track Record', 'lieusoft' ); ?></span>
				<h3><?php esc_html_e( '100% Delivered, Fully Supported', 'lieusoft' ); ?></h3>
				<p><?php esc_html_e( "Every project we've completed ships with hosting, SSL and ongoing support already in place.", 'lieusoft' ); ?></p>
			</div>
			<ul class="success-stories__banner-trust">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Delivered to the agreed scope', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Transparent process, real support', 'lieusoft' ); ?></li>
			</ul>
			<a class="btn btn--light success-stories__banner-btn" href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				<?php esc_html_e( 'Browse All Case Studies', 'lieusoft' ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>
		</div>

	</div>
</section>
