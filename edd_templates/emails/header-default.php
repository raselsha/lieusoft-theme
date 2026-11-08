<?php
/**
 * EDD email header — Lieusoft brand (overrides easy-digital-downloads/templates/emails/header-default.php).
 *
 * Email clients strip <style>, so everything is inline and table-based.
 * {begin_heading}/{heading}/{end_heading} are replaced by EDD when sending.
 */

defined( 'ABSPATH' ) || exit;

$lieusoft_logo = edd_get_option( 'email_logo', '' );
$lieusoft_logo = $lieusoft_logo ? $lieusoft_logo : get_theme_file_uri( '/assets/images/email-logo.png' );
$lieusoft_font = "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Lieusoft</title>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin:0;padding:0;background-color:#F4F6FB;font-family:<?php echo esc_attr( $lieusoft_font ); ?>;">
		<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#F4F6FB;">
			<tr>
				<td align="center" valign="top" style="padding:32px 12px;">
					<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
						<tr>
							<td align="center" style="padding:0 0 22px;">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none;">
									<img src="<?php echo esc_url( $lieusoft_logo ); ?>" width="178" height="48" alt="Lieusoft" style="display:block;border:0;outline:none;width:178px;height:auto;" />
								</a>
							</td>
						</tr>
						<tr>
							<td style="background-color:#FFFFFF;border:1px solid #E1E5F0;border-radius:14px;">
								<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container">
									{begin_heading}
									<tr>
										<td style="padding:32px 36px 0;">
											<h1 style="margin:0;font-family:<?php echo esc_attr( $lieusoft_font ); ?>;font-size:24px;line-height:1.3;font-weight:700;color:#0E0C1A;">{heading}</h1>
										</td>
									</tr>
									{end_heading}
									<tr>
										<td valign="top" style="padding:22px 36px 32px;">
											<div style="font-family:<?php echo esc_attr( $lieusoft_font ); ?>;font-size:15px;line-height:1.6;color:#2B2A3A;text-align:left;">
