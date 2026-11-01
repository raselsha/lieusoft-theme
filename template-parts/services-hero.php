<?php
/**
 * Services page hero — business-support pitch + "fully supported" checklist card.
 */
$lieusoft_support_rows = array(
	array( 'icon' => 'home', 'accent' => 'blue', 'title' => __( 'Website & Hosting', 'lieusoft' ), 'desc' => __( 'Built, hosted and monitored', 'lieusoft' ) ),
	array( 'icon' => 'lock', 'accent' => 'purple', 'title' => __( 'Security & Backups', 'lieusoft' ), 'desc' => __( 'SSL, backups, monitoring', 'lieusoft' ) ),
	array( 'icon' => 'infinity', 'accent' => 'orange', 'title' => __( 'Automation', 'lieusoft' ), 'desc' => __( 'Custom n8n workflows', 'lieusoft' ) ),
	array( 'icon' => 'headset', 'accent' => 'green', 'title' => __( 'Ongoing Support', 'lieusoft' ), 'desc' => __( 'Reachable after you launch', 'lieusoft' ) ),
);
?>
<section class="hero services-hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php esc_html_e( 'Complete Business Support', 'lieusoft' ); ?></span>
			<h1 class="hero__title"><?php esc_html_e( "We handle your business, so you don't have to", 'lieusoft' ); ?></h1>
			<p class="hero__lead"><?php esc_html_e( 'From your first website to everyday support — development, hosting, email, maintenance and automation, built on WordPress and backed by a team that stays with you.', 'lieusoft' ); ?></p>

			<ul class="check-list">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'One team, start to finish', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Support after launch', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'No add-on surprises', 'lieusoft' ); ?></li>
			</ul>

			<div class="hero__actions">
				<a class="btn btn--primary btn--lg" href="#book-consultation">
					<?php esc_html_e( 'Book Consultation', 'lieusoft' ); ?>
					<?php echo lieusoft_icon( 'arrow-right' ); ?>
				</a>
				<a class="btn btn--outline btn--lg" href="#services"><?php esc_html_e( 'See Our Services', 'lieusoft' ); ?></a>
			</div>
		</div>

		<div class="hero__media">
			<div class="services-checklist-card">
				<div class="services-checklist-card__head">
					<span class="services-checklist-card__dot services-checklist-card__dot--red"></span>
					<span class="services-checklist-card__dot services-checklist-card__dot--yellow"></span>
					<span class="services-checklist-card__dot services-checklist-card__dot--green"></span>
					<span class="services-checklist-card__label"><?php esc_html_e( 'Your business, fully supported', 'lieusoft' ); ?></span>
				</div>
				<div class="services-checklist-card__body">
					<?php foreach ( $lieusoft_support_rows as $row ) : ?>
						<div class="services-checklist-card__row">
							<span class="services-checklist-card__icon services-checklist-card__icon--<?php echo esc_attr( $row['accent'] ); ?>"><?php echo lieusoft_icon( $row['icon'] ); ?></span>
							<div class="services-checklist-card__text">
								<strong><?php echo esc_html( $row['title'] ); ?></strong>
								<span><?php echo esc_html( $row['desc'] ); ?></span>
							</div>
							<?php echo lieusoft_icon( 'check-circle' ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
