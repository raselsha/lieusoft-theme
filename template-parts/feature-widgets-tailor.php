<?php
/**
 * Tailor Shop step widgets for the "See How It Works" walkthrough
 * (solution-feature-steps.php). Expects $args: widget — one of
 * 'tailor-customer', 'tailor-measure', 'tailor-order', 'tailor-invoice',
 * 'tailor-status', 'tailor-notify', 'tailor-report'.
 */
$widget = $args['widget'] ?? '';
?>
<?php if ( 'tailor-customer' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Customer Profile', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-profile">
				<span class="sim-profile__avatar">R</span>
				<span class="sim-profile__text"><strong>Rahim Uddin</strong><small><?php esc_html_e( '01XXXXXXXXX · Mirpur, Dhaka', 'lieusoft' ); ?></small></span>
				<span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Regular', 'lieusoft' ); ?></span>
			</div>
			<div class="sim-mini-stats">
				<div><strong>12</strong><span><?php esc_html_e( 'Total Orders', 'lieusoft' ); ?></span></div>
				<div><strong>&#2547;38,400</strong><span><?php esc_html_e( 'Total Spent', 'lieusoft' ); ?></span></div>
				<div><strong>&#2547;0</strong><span><?php esc_html_e( 'Due', 'lieusoft' ); ?></span></div>
			</div>
			<span class="hiw-modal__label"><?php esc_html_e( 'Order History', 'lieusoft' ); ?></span>
			<div class="hiw-admin-list">
				<div class="hiw-admin-row"><span class="hiw-queue-row__pos"><?php echo lieusoft_icon( 'shirt' ); ?></span><strong><?php esc_html_e( 'Suit', 'lieusoft' ); ?></strong><span class="hiw-admin-row__gender">Aug 12</span><span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Delivered', 'lieusoft' ); ?></span></div>
				<div class="hiw-admin-row"><span class="hiw-queue-row__pos"><?php echo lieusoft_icon( 'shirt' ); ?></span><strong><?php esc_html_e( 'Shirt × 3', 'lieusoft' ); ?></strong><span class="hiw-admin-row__gender">Jun 03</span><span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Delivered', 'lieusoft' ); ?></span></div>
				<div class="hiw-admin-row"><span class="hiw-queue-row__pos"><?php echo lieusoft_icon( 'shirt' ); ?></span><strong><?php esc_html_e( 'Panjabi', 'lieusoft' ); ?></strong><span class="hiw-admin-row__gender">Mar 28</span><span class="hiw-admin__status hiw-admin__status--green"><?php esc_html_e( 'Delivered', 'lieusoft' ); ?></span></div>
			</div>
		</div>
	</div>
<?php elseif ( 'tailor-measure' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Measurements · Panjabi', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-measure">
				<div><span><?php esc_html_e( 'Length', 'lieusoft' ); ?></span><strong>42"</strong></div>
				<div><span><?php esc_html_e( 'Chest', 'lieusoft' ); ?></span><strong>40"</strong></div>
				<div><span><?php esc_html_e( 'Waist', 'lieusoft' ); ?></span><strong>36"</strong></div>
				<div><span><?php esc_html_e( 'Hip', 'lieusoft' ); ?></span><strong>41"</strong></div>
				<div><span><?php esc_html_e( 'Shoulder', 'lieusoft' ); ?></span><strong>18"</strong></div>
				<div class="is-active"><span><?php esc_html_e( 'Sleeve', 'lieusoft' ); ?></span><strong>24.5"</strong></div>
				<div><span><?php esc_html_e( 'Collar', 'lieusoft' ); ?></span><strong>15.5"</strong></div>
				<div><span><?php esc_html_e( 'Cuff', 'lieusoft' ); ?></span><strong>10"</strong></div>
			</div>
			<span class="sim-note"><?php echo lieusoft_icon( 'check-circle' ); ?><?php esc_html_e( 'Saved to Rahim Uddin — ready for his next order.', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php elseif ( 'tailor-order' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'New Order', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<span class="hiw-modal__label"><?php esc_html_e( 'Item', 'lieusoft' ); ?></span>
			<div class="sim-chips">
				<span><?php esc_html_e( 'Shirt', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Pant', 'lieusoft' ); ?></span>
				<span class="is-active"><?php esc_html_e( 'Panjabi', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Suit', 'lieusoft' ); ?></span>
				<span><?php esc_html_e( 'Sherwani', 'lieusoft' ); ?></span>
			</div>
			<div class="hiw-form">
				<div class="hiw-form__row">
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Quantity', 'lieusoft' ); ?></span>
						<span class="hiw-form__value">2</span>
					</div>
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Fabric', 'lieusoft' ); ?></span>
						<span class="hiw-form__value"><?php esc_html_e( 'Cotton · 5 m', 'lieusoft' ); ?></span>
					</div>
				</div>
				<div class="hiw-form__row">
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Trial Date', 'lieusoft' ); ?></span>
						<span class="hiw-form__value">Nov 2, 2026</span>
					</div>
					<div class="hiw-form__field">
						<span class="hiw-form__label"><?php esc_html_e( 'Delivery Date', 'lieusoft' ); ?></span>
						<span class="hiw-form__value">Nov 5, 2026</span>
					</div>
				</div>
				<div class="hiw-form__field">
					<span class="hiw-form__label"><?php esc_html_e( 'Design Note', 'lieusoft' ); ?></span>
					<span class="hiw-form__value"><?php esc_html_e( 'Chinese collar, 2 side pockets', 'lieusoft' ); ?></span>
				</div>
			</div>
			<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Create Order', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php elseif ( 'tailor-invoice' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Invoice', 'lieusoft' ); ?> #ORD-1026</h4>
			<span class="hiw-admin__status hiw-admin__status--orange"><?php esc_html_e( 'Partly Paid', 'lieusoft' ); ?></span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-lines">
				<div><span><?php esc_html_e( 'Panjabi stitching', 'lieusoft' ); ?><small>&times; 2</small></span><strong>&#2547;2,400</strong></div>
				<div><span><?php esc_html_e( 'Cotton fabric', 'lieusoft' ); ?><small>5 m</small></span><strong>&#2547;1,500</strong></div>
				<div><span><?php esc_html_e( 'Collar embroidery', 'lieusoft' ); ?></span><strong>&#2547;600</strong></div>
				<div><span><?php esc_html_e( 'Discount', 'lieusoft' ); ?></span><strong>&minus;&#2547;200</strong></div>
				<div class="sim-lines__total"><span><?php esc_html_e( 'Total', 'lieusoft' ); ?></span><strong>&#2547;4,300</strong></div>
				<div class="sim-lines__paid"><span><?php esc_html_e( 'Advance paid', 'lieusoft' ); ?></span><strong>&#2547;2,000</strong></div>
				<div class="sim-lines__due"><span><?php esc_html_e( 'Due on delivery', 'lieusoft' ); ?></span><strong>&#2547;2,300</strong></div>
			</div>
			<span class="btn btn--primary hiw-form__submit"><?php esc_html_e( 'Print Receipt', 'lieusoft' ); ?></span>
		</div>
	</div>
<?php elseif ( 'tailor-status' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><span class="hiw-live-dot" aria-hidden="true"></span>#ORD-1026 &middot; <?php esc_html_e( 'Panjabi × 2', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="sim-timeline">
				<div class="sim-timeline__step is-done"><span class="sim-timeline__dot"><?php echo lieusoft_icon( 'check-circle' ); ?></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Order Received', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Oct 28 · advance ৳2,000 paid', 'lieusoft' ); ?></small></span></div>
				<div class="sim-timeline__step is-done"><span class="sim-timeline__dot"><?php echo lieusoft_icon( 'check-circle' ); ?></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Fabric Cutting', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Oct 29 · Karim (cutter)', 'lieusoft' ); ?></small></span></div>
				<div class="sim-timeline__step is-current"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Stitching', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'In progress · Jamal (tailor)', 'lieusoft' ); ?></small></span></div>
				<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Trial', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Nov 2', 'lieusoft' ); ?></small></span></div>
				<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Ready for Delivery', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Customer gets an SMS', 'lieusoft' ); ?></small></span></div>
				<div class="sim-timeline__step"><span class="sim-timeline__dot"></span><span class="sim-timeline__text"><strong><?php esc_html_e( 'Delivered & Paid', 'lieusoft' ); ?></strong><small><?php esc_html_e( 'Nov 5 · due ৳2,300', 'lieusoft' ); ?></small></span></div>
			</div>
		</div>
	</div>
<?php elseif ( 'tailor-notify' === $widget ) : ?>
	<div class="hiw-notify-stack">
		<div class="hiw-notify hiw-notify--sms">
			<div class="hiw-notify__head">
				<?php echo lieusoft_icon( 'chat' ); ?>
				<span><?php esc_html_e( 'SMS', 'lieusoft' ); ?></span>
				<span class="hiw-notify__time"><?php esc_html_e( 'Oct 28', 'lieusoft' ); ?></span>
			</div>
			<p class="hiw-notify__text"><?php esc_html_e( 'Al-Modina Tailors: Order #ORD-1026 received. Panjabi × 2, total ৳4,300, advance ৳2,000. Trial Nov 2, delivery Nov 5.', 'lieusoft' ); ?></p>
		</div>
		<div class="hiw-notify hiw-notify--sms">
			<div class="hiw-notify__head">
				<?php echo lieusoft_icon( 'chat' ); ?>
				<span><?php esc_html_e( 'SMS', 'lieusoft' ); ?></span>
				<span class="hiw-notify__time"><?php esc_html_e( 'Just now', 'lieusoft' ); ?></span>
			</div>
			<p class="hiw-notify__text"><?php esc_html_e( 'Al-Modina Tailors: Your order #ORD-1026 is ready for pickup. Due amount: ৳2,300. Thank you!', 'lieusoft' ); ?></p>
		</div>
		<div class="hiw-notify hiw-notify--email">
			<div class="hiw-notify__head">
				<?php echo lieusoft_icon( 'bell' ); ?>
				<span><?php esc_html_e( 'Shop Reminder', 'lieusoft' ); ?></span>
				<span class="hiw-notify__time"><?php esc_html_e( 'Today', 'lieusoft' ); ?></span>
			</div>
			<strong class="hiw-notify__subject"><?php esc_html_e( '6 orders due for delivery today', 'lieusoft' ); ?></strong>
			<p class="hiw-notify__text"><?php esc_html_e( '2 are still in stitching — check with the workshop so nothing is late.', 'lieusoft' ); ?></p>
		</div>
	</div>
<?php elseif ( 'tailor-report' === $widget ) : ?>
	<div class="hiw-modal">
		<div class="hiw-modal__head">
			<h4><?php esc_html_e( 'Reports · This Month', 'lieusoft' ); ?></h4>
			<span class="hiw-modal__close">&times;</span>
		</div>
		<div class="hiw-modal__body">
			<div class="hiw-admin-stats">
				<div><strong>146</strong><span><?php esc_html_e( 'Orders', 'lieusoft' ); ?></span></div>
				<div><strong>&#2547;3,12,800</strong><span><?php esc_html_e( 'Sales', 'lieusoft' ); ?></span></div>
				<div><strong>&#2547;38,500</strong><span><?php esc_html_e( 'Due', 'lieusoft' ); ?></span></div>
			</div>
			<span class="hiw-modal__label"><?php esc_html_e( 'Orders per Week', 'lieusoft' ); ?></span>
			<div class="sim-bars"><span style="height:45%"></span><span style="height:62%"></span><span style="height:54%"></span><span class="is-peak" style="height:92%"></span><span style="height:70%"></span></div>
			<div class="sim-bars__labels"><span>W1</span><span>W2</span><span>W3</span><span>W4</span><span>W5</span></div>
			<span class="hiw-modal__label"><?php esc_html_e( 'Top Items', 'lieusoft' ); ?></span>
			<div class="sim-lines">
				<div><span><?php esc_html_e( 'Panjabi', 'lieusoft' ); ?></span><strong>48</strong></div>
				<div><span><?php esc_html_e( 'Shirt', 'lieusoft' ); ?></span><strong>39</strong></div>
				<div><span><?php esc_html_e( 'Suit', 'lieusoft' ); ?></span><strong>21</strong></div>
			</div>
		</div>
	</div>
<?php endif; ?>
