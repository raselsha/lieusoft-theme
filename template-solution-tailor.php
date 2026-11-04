<?php
/**
 * Template Name: Solution — Tailor Shop Management
 *
 * Product landing page for the Tailor Shop solution — same section layout
 * as the Doctor Appointment page, with tailor-shop content.
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Tailor Shop Management Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero-tailor' );

get_template_part( 'template-parts/solution', 'feature-steps', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'See How It Works', 'lieusoft' ),
	'desc'    => __( 'From taking the order to handing over the finished garment — your whole shop runs in one connected system.', 'lieusoft' ),
	'steps'   => array(
		array(
			'num'    => '01',
			'title'  => __( 'Every Customer in One Place', 'lieusoft' ),
			'desc'   => __( 'Search by name or phone and see the customer\'s full profile, order history and any due amount instantly.', 'lieusoft' ),
			'widget' => 'tailor-customer',
		),
		array(
			'num'    => '02',
			'title'  => __( 'Saved Body Measurements', 'lieusoft' ),
			'desc'   => __( 'Measurements are stored per customer and per item, so repeat orders start pre-filled — no paper book to search.', 'lieusoft' ),
			'widget' => 'tailor-measure',
		),
		array(
			'num'    => '03',
			'title'  => __( 'Create the Order in Seconds', 'lieusoft' ),
			'desc'   => __( 'Pick the item, quantity and fabric, set trial and delivery dates, and add design notes for the workshop.', 'lieusoft' ),
			'widget' => 'tailor-order',
		),
		array(
			'num'    => '04',
			'title'  => __( 'Invoice & Advance Payment', 'lieusoft' ),
			'desc'   => __( 'The invoice builds itself with advance and due amounts, ready to print as a receipt for the customer.', 'lieusoft' ),
			'widget' => 'tailor-invoice',
		),
		array(
			'num'    => '05',
			'title'  => __( 'Track Every Order\'s Progress', 'lieusoft' ),
			'desc'   => __( 'Cutting, stitching, trial, ready — see exactly where each order is and who is working on it.', 'lieusoft' ),
			'widget' => 'tailor-status',
		),
		array(
			'num'    => '06',
			'title'  => __( 'SMS Updates & Delivery Reminders', 'lieusoft' ),
			'desc'   => __( 'Customers get an SMS when the order is placed and when it\'s ready, and you get reminded of today\'s deliveries.', 'lieusoft' ),
			'widget' => 'tailor-notify',
		),
		array(
			'num'    => '07',
			'title'  => __( 'Sales, Due & Item Reports', 'lieusoft' ),
			'desc'   => __( 'See this month\'s orders, sales and total due, plus which items sell best — without adding up a single page.', 'lieusoft' ),
			'widget' => 'tailor-report',
		),
	),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Who Can Use This', 'lieusoft' ),
	'title'   => __( 'Perfect for Every Kind of Tailor Shop', 'lieusoft' ),
	'desc'    => __( 'Whether you run a single counter or a busy workshop with cutters and tailors, the system fits how you work.', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Gents Tailor', 'lieusoft' ), 'desc' => __( 'Shirts, pants, panjabis and suits with every customer\'s measurements on file.', 'lieusoft' ), 'icon' => 'shirt' ),
		array( 'title' => __( 'Ladies Tailor & Boutique', 'lieusoft' ), 'desc' => __( 'Salwar kameez, blouses and gowns with design notes for each order.', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'title' => __( 'Bridal & Sherwani House', 'lieusoft' ), 'desc' => __( 'High-value orders with trials, advances and firm delivery dates.', 'lieusoft' ), 'icon' => 'star' ),
		array( 'title' => __( 'Uniform Maker', 'lieusoft' ), 'desc' => __( 'Bulk orders for schools and offices, with sizes tracked per person.', 'lieusoft' ), 'icon' => 'users' ),
		array( 'title' => __( 'Fashion Design Studio', 'lieusoft' ), 'desc' => __( 'Custom pieces from design to delivery, with clients kept up to date.', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Alteration Shop', 'lieusoft' ), 'desc' => __( 'Many small, quick jobs tracked so nothing gets lost on the counter.', 'lieusoft' ), 'icon' => 'ruler' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'variant' => 'light',
	'cta'     => true,
	'title'   => __( 'Everything Your Shop Needs, In One Package', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Website', 'lieusoft' ), 'desc' => __( "Your shop's own website", 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Order System', 'lieusoft' ), 'desc' => __( 'Orders, measurements & invoices', 'lieusoft' ), 'icon' => 'clipboard' ),
		array( 'title' => __( 'Hosting', 'lieusoft' ), 'desc' => __( 'Fast, managed server', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Domain', 'lieusoft' ), 'desc' => __( 'Your own .com or .com.bd', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'SSL', 'lieusoft' ), 'desc' => __( 'Secure https padlock', 'lieusoft' ), 'icon' => 'shield-check' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'desc' => __( 'Email on your own domain', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Training', 'lieusoft' ), 'desc' => __( 'Onboarding for your staff', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( '1 Year Support', 'lieusoft' ), 'desc' => __( 'Fixes & updates included', 'lieusoft' ), 'icon' => 'headset' ),
	),
	'desc'    => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'variant' => 'dark',
	'title'   => __( 'How You Get Your Solution', 'lieusoft' ),
	'desc'    => __( 'From the first call to a live shop system, in four simple steps.', 'lieusoft' ),
	'steps'   => array(
		array( 'title' => __( 'Contact & Appointment', 'lieusoft' ), 'desc' => __( 'Book a consultation and tell us how your shop takes and tracks orders.', 'lieusoft' ), 'icon' => 'headset' ),
		array( 'title' => __( 'Select Your Domain', 'lieusoft' ), 'desc' => __( "Pick your shop's website address — or use one you already own.", 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Deploy Solution', 'lieusoft' ), 'desc' => __( 'We set up the website and order system with your items and prices.', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Payment', 'lieusoft' ), 'desc' => __( "Choose a 1, 2, 3 or 5 year plan, and pay once your shop's system is live.", 'lieusoft' ), 'icon' => 'credit-card' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-tabs', array(
	'title' => __( 'Why Choose Lieusoft', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Built for Tailor Shops', 'lieusoft' ), 'icon' => 'shirt', 'desc' => __( 'Measurements per item, trial and delivery dates, advance and due, cutting and stitching stages — the system follows how a real tailor shop works, so your counter staff and workshop pick it up quickly.', 'lieusoft' ) ),
		array( 'title' => __( 'Live in 7 Days', 'lieusoft' ), 'icon' => 'clock', 'desc' => __( 'From the day we start to a working system your counter can take orders on, in about a week. We set up the domain and hosting and add your items and prices — you review it and start using it.', 'lieusoft' ) ),
		array( 'title' => __( 'We Move Your Old Records', 'lieusoft' ), 'icon' => 'refresh', 'desc' => __( 'Already have customers and orders in a spreadsheet or old software? We can bring them across, so your history and measurements are there from day one — we have migrated thousands of customer records before.', 'lieusoft' ) ),
		array( 'title' => __( 'No More Lost Measurements', 'lieusoft' ), 'icon' => 'ruler', 'desc' => __( 'Every measurement is saved to the customer and searchable by phone number. No more flipping through a torn measurement book or calling the customer back to measure again.', 'lieusoft' ) ),
		array( 'title' => __( 'Always Know Who Owes What', 'lieusoft' ), 'icon' => 'credit-card', 'desc' => __( 'Advance, due and paid are tracked on every order, and the dashboard shows your total due at a glance. Receipts print straight from the invoice.', 'lieusoft' ) ),
		array( 'title' => __( 'Support That Answers', 'lieusoft' ), 'icon' => 'headset', 'desc' => __( 'Reach us directly on WhatsApp or email — in Bangla or English. Fixes, small changes and updates are covered for the first year, and you talk to the people who built your system.', 'lieusoft' ) ),
		array( 'title' => __( 'Your Data Stays Yours', 'lieusoft' ), 'icon' => 'shield-check', 'desc' => __( 'Customer records, measurements and order history belong to your shop. The system runs on secure HTTPS with managed hosting, and we only access it to set up, maintain and support it.', 'lieusoft' ) ),
		array( 'title' => __( 'Grows With Your Shop', 'lieusoft' ), 'icon' => 'trending-up', 'desc' => __( "Add new items, more staff or a second branch whenever you're ready. The same system handles a one-counter shop today and a busy workshop tomorrow.", 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'pricing-plans', array(
	'title'    => __( 'Simple, Honest Pricing', 'lieusoft' ),
	'desc'     => __( 'One price covers everything. Pick how many years — the longer the plan, the less you pay per year.', 'lieusoft' ),
	'plans'    => array(
		array( 'name' => __( '1 Year', 'lieusoft' ), 'tagline' => __( 'Get started', 'lieusoft' ), 'price' => '12,000', 'period' => '', 'note' => __( '৳12,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '2 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳2,000', 'lieusoft' ), 'price' => '22,000', 'period' => '', 'note' => __( '৳11,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '3 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳6,000', 'lieusoft' ), 'price' => '30,000', 'period' => '', 'note' => __( '৳10,000 per year', 'lieusoft' ) ),
		array( 'name' => __( '5 Years', 'lieusoft' ), 'tagline' => __( 'Save ৳15,000', 'lieusoft' ), 'price' => '45,000', 'period' => '', 'note' => __( '৳9,000 per year', 'lieusoft' ), 'featured' => true, 'badge' => __( 'Best Value', 'lieusoft' ) ),
	),
	'includes' => array(
		__( 'Tailor shop website', 'lieusoft' ),
		__( 'Order, measurement & invoice system', 'lieusoft' ),
		__( 'Hosting & domain for the full plan', 'lieusoft' ),
		__( 'SSL certificate', 'lieusoft' ),
		__( 'Business email', 'lieusoft' ),
		__( 'Staff training', 'lieusoft' ),
		__( 'Support & updates for the full plan', 'lieusoft' ),
		__( 'Renew anytime at the end of your plan', 'lieusoft' ),
	),
	'footnote' => __( 'A one-time installation fee of ৳10,000 applies to every plan. Savings are compared with paying ৳12,000 every year. Not sure which plan fits? Book a free consultation.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'projects' );

get_template_part( 'template-parts/solution', 'faq', array(
	'faqs' => array(
		array( 'q' => __( 'Can I use my own domain?', 'lieusoft' ), 'a' => __( 'Yes, you can use a domain you already own or we can register one for you.', 'lieusoft' ) ),
		array( 'q' => __( 'Can you move my old customer records?', 'lieusoft' ), 'a' => __( 'Yes, we can import customers, measurements and orders from a spreadsheet or your old software during setup.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I set my own measurement fields?', 'lieusoft' ), 'a' => __( 'Yes, each item (shirt, pant, panjabi and so on) can have its own list of measurement fields.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I track advance and due payments?', 'lieusoft' ), 'a' => __( 'Yes, every order records the total, advance and due amount, and receipts can be printed from the invoice.', 'lieusoft' ) ),
		array( 'q' => __( 'Can more than one staff member use it?', 'lieusoft' ), 'a' => __( 'Yes, give your counter staff and workshop their own logins, so everyone sees the same up-to-date orders.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting and training?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting and onboarding training for your staff are included in every plan.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Digitize Your Tailor Shop?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your shop's requirements.", 'lieusoft' ),
) );

get_footer();
