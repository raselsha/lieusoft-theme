<?php
/**
 * Heading for the page buyers land on right after paying (the page that
 * holds the edd/confirmation block): a clear "payment successful" message
 * and where to find the key and download.
 */
?>
<div class="lsco-success">
	<span class="lsco-success__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
	<div class="lsco-success__text">
		<h1 class="lsco-head__title"><?php esc_html_e( 'Payment successful', 'lieusoft' ); ?></h1>
		<p><?php esc_html_e( 'Thank you for your purchase! Your license key is below, and we have emailed it to you together with the download link.', 'lieusoft' ); ?></p>
	</div>
	<div class="lsco-success__actions">
		<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/my-account/#licenses' ) ); ?>"><?php esc_html_e( 'Go to my account', 'lieusoft' ); ?></a>
		<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/pdf-embed-viewer/' ) ); ?>"><?php esc_html_e( 'Flipbook Pro guide', 'lieusoft' ); ?></a>
	</div>
</div>
