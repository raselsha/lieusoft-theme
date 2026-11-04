<?php
/**
 * Homepage "Success Stories" — real delivered projects in a card row,
 * plus a track-record sidebar. Replaces the single-project case-study
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
	<div class="container success-stories__grid">

		<div class="success-stories__cards">
			<?php foreach ( $lieusoft_success_stories as $story ) : ?>
				<article class="card project-card story-card">
					<div class="project-card__media">
						<span class="story-card__badge"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Completed', 'lieusoft' ); ?></span>
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $story['image'] ) ); ?>" alt="" loading="lazy" decoding="async">
					</div>
					<div class="project-card__body">
						<span class="eyebrow" style="font-size:0.7rem;"><?php echo esc_html( $story['industry'] ); ?></span>
						<h3 class="card__title"><?php echo esc_html( $story['title'] ); ?></h3>
						<ul class="story-card__tags">
							<?php foreach ( $story['tags'] as $tag ) : ?>
								<li><?php echo esc_html( $tag ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="link-arrow story-card__link" href="<?php echo esc_url( $story['url'] ); ?>"<?php echo $story['external'] ? ' target="_blank" rel="noopener"' : ''; ?>>
							<?php esc_html_e( 'View Case Study', 'lieusoft' ); ?>
							<?php echo lieusoft_icon( 'arrow-right' ); ?>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="success-stories__side">
			<span class="eyebrow"><?php esc_html_e( 'Real Client Work', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'Successfully Delivered', 'lieusoft' ); ?> <span class="text-primary"><?php esc_html_e( 'Business Websites', 'lieusoft' ); ?></span></h2>
			<p><?php esc_html_e( 'Every project we take on is scoped carefully, built to the agreed plan, and handed over complete — hosting, domain, SSL and support included from day one.', 'lieusoft' ); ?></p>
			<a class="link-arrow" href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
				<?php esc_html_e( 'View All Case Studies', 'lieusoft' ); ?>
				<?php echo lieusoft_icon( 'arrow-right' ); ?>
			</a>

			<div class="success-stories__banner">
				<span class="success-stories__banner-label"><?php esc_html_e( 'Our Track Record', 'lieusoft' ); ?></span>
				<h3><?php esc_html_e( '100% Delivered, Fully Supported', 'lieusoft' ); ?></h3>
				<p><?php esc_html_e( "Every project we've completed ships with hosting, SSL and ongoing support already in place.", 'lieusoft' ); ?></p>
				<a class="btn btn--light" href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">
					<?php esc_html_e( 'Browse All Case Studies', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<div class="success-stories__banner-trust">
					<span><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Delivered to the agreed scope', 'lieusoft' ); ?></span>
					<span><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Transparent process, real support', 'lieusoft' ); ?></span>
				</div>
			</div>
		</div>

	</div>
</section>
