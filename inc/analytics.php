<?php
/**
 * GA4 ecommerce events for the EDD store, sent through the gtag() that
 * Site Kit already prints (so they land in the same GA4 property):
 *  - view_item      on a product page;
 *  - add_to_cart    when a Buy link (…?edd_action=add_to_cart) is clicked —
 *                   Site Kit's own EDD tracking only sees AJAX cart buttons;
 *  - begin_checkout on the checkout page with items in the cart;
 *  - purchase       on the receipt page, once per order.
 * When gtag isn't on the page (Site Kit skips it for some logged-in users,
 * ad blockers) nothing is sent and nothing breaks.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Page templates that sell one download: template => download ID. */
function lieusoft_ga4_product_pages() {
	return array(
		'template-product-pdf.php'     => 390,
		'template-product-booking.php' => 388,
	);
}

/** Pages with Buy links whose clicks we report as add_to_cart. */
function lieusoft_ga4_has_buy_links() {
	return is_page_template( array_merge( array_keys( lieusoft_ga4_product_pages() ), array( 'template-pricing.php' ) ) );
}

/**
 * GA4 item for a download (and price option).
 *
 * @param int      $download_id Download ID.
 * @param int|null $price_id    Variable price ID.
 * @return array
 */
function lieusoft_ga4_item( $download_id, $price_id = null ) {
	$item = array(
		'item_id'   => (string) $download_id,
		'item_name' => html_entity_decode( get_the_title( $download_id ), ENT_QUOTES, 'UTF-8' ),
		'quantity'  => 1,
	);
	$prices = function_exists( 'edd_get_variable_prices' ) ? edd_get_variable_prices( $download_id ) : array();
	if ( null !== $price_id && isset( $prices[ $price_id ] ) ) {
		$item['item_variant'] = $prices[ $price_id ]['name'];
		$item['price']        = (float) $prices[ $price_id ]['amount'];
	} elseif ( function_exists( 'edd_get_download_price' ) ) {
		$item['price'] = (float) edd_get_download_price( $download_id );
	}
	return $item;
}

/**
 * GA4 purchase parameters for an EDD order.
 *
 * @param EDD\Orders\Order $order Order.
 * @return array
 */
function lieusoft_ga4_purchase_params( $order ) {
	$items = array();
	foreach ( $order->get_items() as $order_item ) {
		$qty  = max( 1, (int) $order_item->quantity );
		$item = lieusoft_ga4_item( (int) $order_item->product_id, null === $order_item->price_id ? null : (int) $order_item->price_id );

		$item['price']    = round( ( (float) $order_item->subtotal - (float) $order_item->discount ) / $qty, 2 );
		$item['quantity'] = $qty;
		if ( (float) $order_item->discount > 0 ) {
			$item['discount'] = round( (float) $order_item->discount / $qty, 2 );
		}
		$items[] = $item;
	}
	$params = array(
		'transaction_id' => (string) $order->get_number(),
		'currency'       => $order->currency ? $order->currency : edd_get_currency(),
		'value'          => round( (float) $order->subtotal - (float) $order->discount, 2 ),
		'tax'            => (float) $order->tax,
		'items'          => $items,
	);
	$codes = array();
	foreach ( (array) $order->get_discounts() as $adjustment ) {
		if ( ! empty( $adjustment->description ) ) {
			$codes[] = strtoupper( $adjustment->description );
		}
	}
	if ( $codes ) {
		$params['coupon'] = implode( ',', $codes );
	}
	return $params;
}

/**
 * The events for the current request.
 *
 * @return array { events: [ [ name, params, onceKey ] ], catalog: { id: { name, prices: { priceId: [ variant, amount ] } } } }
 */
function lieusoft_ga4_payload() {
	$currency = edd_get_currency();
	$out      = array(
		'events'  => array(),
		'catalog' => new stdClass(),
	);

	// view_item: the product's cheapest-first plans as one item each.
	foreach ( lieusoft_ga4_product_pages() as $template => $download_id ) {
		if ( is_page_template( $template ) ) {
			$items = array();
			foreach ( array_keys( (array) edd_get_variable_prices( $download_id ) ) as $price_id ) {
				$items[] = lieusoft_ga4_item( $download_id, $price_id );
			}
			$items = $items ? $items : array( lieusoft_ga4_item( $download_id ) );
			$out['events'][] = array(
				'view_item',
				array(
					'currency' => $currency,
					'value'    => min( wp_list_pluck( $items, 'price' ) ),
					'items'    => $items,
				),
				'',
			);
		}
	}

	// Data for add_to_cart clicks.
	if ( lieusoft_ga4_has_buy_links() ) {
		$catalog = array();
		foreach ( array_unique( lieusoft_ga4_product_pages() ) as $download_id ) {
			$entry = array(
				'name'   => html_entity_decode( get_the_title( $download_id ), ENT_QUOTES, 'UTF-8' ),
				'prices' => array(),
			);
			foreach ( (array) edd_get_variable_prices( $download_id ) as $price_id => $price ) {
				$entry['prices'][ (string) $price_id ] = array( $price['name'], (float) $price['amount'] );
			}
			$catalog[ (string) $download_id ] = $entry;
		}
		$out['catalog'] = $catalog;
	}

	// begin_checkout: once per cart (the browser remembers the cart it reported).
	if ( edd_is_checkout() && edd_get_cart_contents() ) {
		$items = array();
		foreach ( edd_get_cart_contents() as $cart_item ) {
			$options  = isset( $cart_item['options'] ) ? $cart_item['options'] : array();
			$price_id = isset( $options['price_id'] ) ? absint( $options['price_id'] ) : null;
			$item     = lieusoft_ga4_item( absint( $cart_item['id'] ), $price_id );

			$item['price']    = (float) edd_get_cart_item_price( $cart_item['id'], $options );
			$item['quantity'] = isset( $cart_item['quantity'] ) ? max( 1, absint( $cart_item['quantity'] ) ) : 1;
			$items[]          = $item;
		}
		$params = array(
			'currency' => $currency,
			'value'    => (float) edd_get_cart_total(),
			'items'    => $items,
		);
		$coupons = edd_get_cart_discounts();
		if ( $coupons ) {
			$params['coupon'] = strtoupper( implode( ',', (array) $coupons ) );
		}
		$out['events'][] = array( 'begin_checkout', $params, 'ls_ga4_bc_' . md5( wp_json_encode( $params ) ) );
	}

	// purchase: once per order, remembered on the order itself.
	if ( edd_is_success_page() && function_exists( 'edd_get_order_by' ) ) {
		$session = edd_get_purchase_session();
		$order   = ! empty( $session['purchase_key'] ) ? edd_get_order_by( 'payment_key', $session['purchase_key'] ) : false;
		if ( $order && in_array( $order->status, array( 'complete', 'completed', 'publish' ), true ) && ! edd_get_order_meta( $order->id, '_lieusoft_ga4_purchase', true ) ) {
			$out['events'][] = array( 'purchase', lieusoft_ga4_purchase_params( $order ), '' );
			edd_update_order_meta( $order->id, '_lieusoft_ga4_purchase', time() );
		}
	}

	return $out;
}

function lieusoft_ga4_print() {
	if ( is_admin() || ! function_exists( 'edd_get_currency' ) ) {
		return;
	}
	try {
		$data = lieusoft_ga4_payload();
	} catch ( \Throwable $e ) {
		return; // Analytics must never break a page (least of all the receipt).
	}
	if ( ! $data['events'] && ! (array) $data['catalog'] ) {
		return;
	}
	$data['currency'] = edd_get_currency();
	$json             = wp_json_encode( $data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE );
	$js               = <<<JS
(function (d) {
	function send(name, params) {
		if (typeof window.gtag === 'function') { window.gtag('event', name, params); }
	}
	d.events.forEach(function (e) {
		if (e[2]) {
			try { if (sessionStorage.getItem(e[2])) { return; } sessionStorage.setItem(e[2], '1'); } catch (err) {}
		}
		send(e[0], e[1]);
	});
	document.addEventListener('click', function (ev) {
		var a = ev.target.closest ? ev.target.closest('a[href*="edd_action=add_to_cart"]') : null;
		if (!a) { return; }
		var u, id, pid, p, item;
		try { u = new URL(a.href, location.href); } catch (err) { return; }
		id = u.searchParams.get('download_id');
		pid = u.searchParams.get('edd_options[price_id]');
		p = d.catalog[id];
		if (!p) { return; }
		item = { item_id: id, item_name: p.name, quantity: 1 };
		if (pid && p.prices[pid]) { item.item_variant = p.prices[pid][0]; item.price = p.prices[pid][1]; }
		var params = { currency: d.currency, value: item.price || 0, items: [item], transport_type: 'beacon' };
		if (u.searchParams.get('discount')) { params.coupon = u.searchParams.get('discount').toUpperCase(); }
		send('add_to_cart', params);
	}, true);
})({$json});
JS;
	wp_print_inline_script_tag( $js, array( 'id' => 'lieusoft-ga4' ) );
}
add_action( 'wp_footer', 'lieusoft_ga4_print', 100 );
