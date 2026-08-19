<section class="experience">
	<div class="container experience__grid">
		<div class="experience__media">
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/solution-doctor-bg.png' ) ); ?>" alt="<?php esc_attr_e( 'Doctor reviewing appointments on a tablet', 'lieusoft' ); ?>">

			<div class="floating-card floating-card--stat">
				<span class="floating-card__label"><?php esc_html_e( "Today's Appointments", 'lieusoft' ); ?></span>
				<span class="floating-card__number">24</span>
				<span class="floating-card__delta">+12% <?php esc_html_e( 'from yesterday', 'lieusoft' ); ?></span>
			</div>

			<div class="floating-card floating-card--list">
				<span class="floating-card__title"><?php esc_html_e( 'Upcoming Appointments', 'lieusoft' ); ?></span>
				<ul>
					<li><span><?php esc_html_e( 'James Smith', 'lieusoft' ); ?></span><small><?php esc_html_e( 'General Checkup', 'lieusoft' ); ?></small><em>10:00 AM</em></li>
					<li><span><?php esc_html_e( 'Maria Garcia', 'lieusoft' ); ?></span><small><?php esc_html_e( 'Dental Consultation', 'lieusoft' ); ?></small><em>11:30 AM</em></li>
					<li><span><?php esc_html_e( 'Robert Brown', 'lieusoft' ); ?></span><small><?php esc_html_e( 'Follow-up', 'lieusoft' ); ?></small><em>02:00 PM</em></li>
				</ul>
				<a href="#" class="link-arrow link-arrow--sm"><?php esc_html_e( 'View All', 'lieusoft' ); ?></a>
			</div>
		</div>

		<div class="experience__content">
			<span class="eyebrow"><?php esc_html_e( 'Better Experience', 'lieusoft' ); ?></span>
			<h2><?php esc_html_e( 'A Better Experience for Doctors and Patients', 'lieusoft' ); ?></h2>
			<p><?php esc_html_e( 'Give your patients a smooth booking experience and empower your doctors with the tools they need.', 'lieusoft' ); ?></p>

			<ul class="check-list check-list--stacked">
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Reduce no-shows with automated reminders', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Save time with smart scheduling', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Access patient history in one click', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Mobile friendly for doctors and patients', 'lieusoft' ); ?></li>
				<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Secure and reliable system', 'lieusoft' ); ?></li>
			</ul>
		</div>
	</div>
</section>
