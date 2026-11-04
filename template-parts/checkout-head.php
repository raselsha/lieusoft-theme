<?php
/**
 * Checkout page heading: title, one-line explainer and trust chips.
 */
?>
<div class="lsco-head">
	<div class="lsco-head__text">
		<h1 class="lsco-head__title"><?php the_title(); ?></h1>
		<p><?php esc_html_e( 'Add your details and pay securely by card. Your license key and download arrive by email right after payment.', 'lieusoft' ); ?></p>
	</div>
	<ul class="lsco-chips">
		<li><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V8a4 4 0 0 1 8 0v3"/></svg><?php esc_html_e( 'Secure payment by Stripe', 'lieusoft' ); ?></li>
		<li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="8" cy="15" r="4"/><path d="m11 12 9-9M17 6l3 3M14 9l2 2"/></svg><?php esc_html_e( 'License key emailed instantly', 'lieusoft' ); ?></li>
	</ul>
</div>
