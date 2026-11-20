<?php
/**
 * Size-based plan pricing (e.g. the Doctor Appointment solution, priced by
 * the number of doctors). One card per tier; a term switch (1/2/3/5 years)
 * swaps the price shown on every card. The switch is plain radio inputs and
 * CSS :has() (theme.css, "Size-based plan pricing"), so it needs no
 * JavaScript; the 1-year price shows by default. The CSS knows the term keys
 * 1, 2, 3 and 5 — add a rule there if you add another term.
 *
 * Expects $args: id (section anchor, also prefixes the radio ids), title,
 * desc, links[] (label, url), terms[] (key, label, period, tag), tiers[]
 * (name, range, tagline, setup, prices[ term key => array( total, yearly,
 * save ) ], extra, extra_icon, featured, badge), includes[], details[] (title, desc,
 * icon), footnote.
 */
$a = wp_parse_args( $args ?? array(), array(
	'id'       => 'pricing',
	'title'    => __( 'Simple, Honest Pricing', 'lieusoft' ),
	'desc'     => '',
	'links'    => array(),
	'terms'    => array(),
	'tiers'    => array(),
	'includes' => array(),
	'details'  => array(),
	'footnote' => '',
) );

if ( ! $a['tiers'] || ! $a['terms'] ) {
	return;
}

$lieusoft_pt_id = sanitize_html_class( $a['id'] );
?>
<section class="section pricing-plans pricing-tiers" id="<?php echo esc_attr( $lieusoft_pt_id ); ?>">
	<div class="container">
		<div class="section-head">
			<h2><?php echo esc_html( $a['title'] ); ?></h2>
			<?php if ( $a['desc'] ) : ?><p><?php echo esc_html( $a['desc'] ); ?></p><?php endif; ?>
			<?php if ( $a['links'] ) : ?>
				<div class="pricing-plans__links">
					<?php foreach ( $a['links'] as $link ) : ?>
						<a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['label'] ); ?><?php echo lieusoft_icon( 'arrow-right' ); ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="pricing-tiers__body">
			<fieldset class="pricing-tiers__terms">
				<legend><?php esc_html_e( 'Plan length', 'lieusoft' ); ?></legend>
				<div class="pricing-tiers__terms-options">
					<?php foreach ( $a['terms'] as $i => $term ) : ?>
						<label>
							<input type="radio" name="<?php echo esc_attr( $lieusoft_pt_id ); ?>-term" value="<?php echo esc_attr( $term['key'] ); ?>"<?php checked( 0, $i ); ?>>
							<span><?php echo esc_html( $term['label'] ); ?><?php if ( ! empty( $term['tag'] ) ) : ?><small><?php echo esc_html( $term['tag'] ); ?></small><?php endif; ?></span>
						</label>
					<?php endforeach; ?>
				</div>
			</fieldset>

			<div class="pricing-plans__grid pricing-tiers__grid">
				<?php foreach ( $a['tiers'] as $tier ) : ?>
					<div class="plan<?php echo ! empty( $tier['featured'] ) ? ' plan--featured' : ''; ?>">
						<?php if ( ! empty( $tier['badge'] ) ) : ?>
							<span class="plan__badge"><?php echo esc_html( $tier['badge'] ); ?></span>
						<?php endif; ?>
						<h3 class="plan__name"><?php echo esc_html( $tier['name'] ); ?></h3>
						<p class="plan__range"><?php echo lieusoft_icon( 'stethoscope' ); ?><?php echo esc_html( $tier['range'] ); ?></p>
						<p class="plan__tagline"><?php echo esc_html( $tier['tagline'] ); ?></p>

						<?php foreach ( $a['terms'] as $term ) : ?>
							<?php
							$lieusoft_p = $tier['prices'][ $term['key'] ] ?? null;
							if ( ! $lieusoft_p ) {
								continue;
							}
							?>
							<div class="pricing-tiers__price" data-term="<?php echo esc_attr( $term['key'] ); ?>">
								<p class="plan__price"><span class="plan__currency">৳</span><?php echo esc_html( $lieusoft_p['total'] ); ?><span class="plan__period"><?php echo esc_html( $term['period'] ); ?></span></p>
								<p class="pricing-tiers__yearly">
									<?php
									/* translators: %s: price per year, e.g. ৳11,000. */
									echo esc_html( sprintf( __( '%s per year', 'lieusoft' ), '৳' . $lieusoft_p['yearly'] ) );
									?>
									<?php if ( ! empty( $lieusoft_p['save'] ) ) : ?>
										<span class="pricing-tiers__save">
											<?php
											/* translators: %s: amount saved, e.g. ৳2,000. */
											echo esc_html( sprintf( __( 'Save %s', 'lieusoft' ), '৳' . $lieusoft_p['save'] ) );
											?>
										</span>
									<?php endif; ?>
								</p>
							</div>
						<?php endforeach; ?>

						<p class="plan__setup plan__note">
							<?php
							/* translators: %s: one-time installation fee, e.g. ৳15,000. */
							echo esc_html( sprintf( __( '+ %s one-time installation', 'lieusoft' ), '৳' . $tier['setup'] ) );
							?>
						</p>
						<?php if ( ! empty( $tier['extra'] ) ) : ?>
							<p class="pricing-tiers__extra"><?php echo lieusoft_icon( $tier['extra_icon'] ?? 'users' ); ?><?php echo esc_html( $tier['extra'] ); ?></p>
						<?php endif; ?>
						<a class="btn <?php echo ! empty( $tier['featured'] ) ? 'btn--primary' : 'btn--outline'; ?> btn--block plan__cta" href="#book-consultation"><?php esc_html_e( 'Choose Plan', 'lieusoft' ); ?></a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<?php if ( $a['includes'] ) : ?>
			<div class="pricing-plans__includes">
				<h3><?php esc_html_e( 'Every plan includes', 'lieusoft' ); ?></h3>
				<ul>
					<?php foreach ( $a['includes'] as $item ) : ?>
						<li><?php echo lieusoft_icon( 'check-circle' ); ?><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ( $a['details'] ) : ?>
			<div class="pricing-tiers__details">
				<h3><?php esc_html_e( 'Good to know', 'lieusoft' ); ?></h3>
				<ul>
					<?php foreach ( $a['details'] as $detail ) : ?>
						<li>
							<span class="pricing-tiers__details-icon"><?php echo lieusoft_icon( $detail['icon'] ); ?></span>
							<span><strong><?php echo esc_html( $detail['title'] ); ?></strong><?php echo esc_html( $detail['desc'] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ( $a['footnote'] ) : ?>
			<p class="pricing-plans__footnote"><?php echo esc_html( $a['footnote'] ); ?></p>
		<?php endif; ?>
	</div>
</section>
