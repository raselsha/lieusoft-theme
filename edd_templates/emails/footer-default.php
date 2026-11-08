<?php
/**
 * EDD email footer — Lieusoft contact block (overrides easy-digital-downloads/templates/emails/footer-default.php).
 */

defined( 'ABSPATH' ) || exit;

$lieusoft_font = "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif";
$lieusoft_link = 'color:#2454F5;text-decoration:none;';
?>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td align="center" style="padding:24px 12px 0;font-family:<?php echo esc_attr( $lieusoft_font ); ?>;font-size:12px;line-height:1.7;color:#6B6A7B;">
								<strong style="color:#0E0C1A;font-size:13px;">Lieusoft</strong> &middot; <?php esc_html_e( 'Turning Ideas into Business Solutions.', 'lieusoft' ); ?><br />
								<a href="mailto:info@lieusoft.com" style="<?php echo esc_attr( $lieusoft_link ); ?>">info@lieusoft.com</a>
								&nbsp;&middot;&nbsp; <a href="https://wa.me/8801521255463" style="<?php echo esc_attr( $lieusoft_link ); ?>">WhatsApp +880 1521-255463</a>
								&nbsp;&middot;&nbsp; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="<?php echo esc_attr( $lieusoft_link ); ?>">lieusoft.com</a><br />
								<?php esc_html_e( 'Remote-first · Serving clients worldwide', 'lieusoft' ); ?><br />
								<a href="<?php echo esc_url( home_url( '/my-account/' ) ); ?>" style="<?php echo esc_attr( $lieusoft_link ); ?>"><?php esc_html_e( 'My account', 'lieusoft' ); ?></a>
								&nbsp;&middot;&nbsp; <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="<?php echo esc_attr( $lieusoft_link ); ?>"><?php esc_html_e( 'Privacy Policy', 'lieusoft' ); ?></a>
								<br /><span style="color:#9A99A8;">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Lieusoft. <?php esc_html_e( 'All rights reserved.', 'lieusoft' ); ?></span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
