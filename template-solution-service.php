<?php
/**
 * Template Name: Solution — Service Booking
 *
 * Product landing page for the Service Booking solution — same section
 * layout as the Doctor Appointment page, with salon/spa/service content.
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Service Booking Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero-service' );

get_template_part( 'template-parts/solution', 'feature-steps', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'See How It Works', 'lieusoft' ),
	'desc'    => __( 'From the first click to a finished appointment — bookings, staff and payments run through one connected system.', 'lieusoft' ),
	'steps'   => array(
		array(
			'num'    => '01',
			'title'  => __( 'Browse Services & Prices', 'lieusoft' ),
			'desc'   => __( 'Customers see every service with its duration and price, grouped by category, before they book.', 'lieusoft' ),
			'widget' => 'service-list',
		),
		array(
			'num'    => '02',
			'title'  => __( 'Pick Staff, Date & Time', 'lieusoft' ),
			'desc'   => __( 'They choose a favourite staff member — or anyone free — and only real open slots are shown.', 'lieusoft' ),
			'widget' => 'service-datetime',
		),
		array(
			'num'    => '03',
			'title'  => __( 'Customers Add Their Details', 'lieusoft' ),
			'desc'   => __( 'Name, phone and an optional note for the staff. No account or app download needed.', 'lieusoft' ),
			'widget' => 'service-form',
		),
		array(
			'num'    => '04',
			'title'  => __( 'Instant Booking Confirmation', 'lieusoft' ),
			'desc'   => __( 'The booking is confirmed on the spot with every detail — service, staff, time and total.', 'lieusoft' ),
			'widget' => 'service-confirm',
		),
		array(
			'num'    => '05',
			'title'  => __( 'SMS & Email Confirmation', 'lieusoft' ),
			'desc'   => __( 'Customers get the booking in writing and a reminder before their visit, so fewer people forget to show up.', 'lieusoft' ),
			'widget' => 'service-notify',
		),
		array(
			'num'    => '06',
			'title'  => __( 'Bookings Appear in the Admin Panel', 'lieusoft' ),
			'desc'   => __( 'Every new booking shows up instantly in your admin panel — no WhatsApp scrolling, no notebook.', 'lieusoft' ),
			'widget' => 'service-admin',
		),
		array(
			'num'    => '07',
			'title'  => __( 'Staff Schedule at a Glance', 'lieusoft' ),
			'desc'   => __( "See each staff member's day, breaks and free time in one view — double bookings simply can't happen.", 'lieusoft' ),
			'widget' => 'service-schedule',
		),
	),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Who Can Use This', 'lieusoft' ),
	'title'   => __( 'Perfect for Every Appointment-Based Business', 'lieusoft' ),
	'desc'    => __( 'If your customers book a time with you, the system fits — one staff member or twenty.', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Spa & Massage Center', 'lieusoft' ), 'desc' => __( 'Treatments, therapists and rooms booked without phone calls.', 'lieusoft' ), 'icon' => 'smile' ),
		array( 'title' => __( 'Beauty Salon & Parlour', 'lieusoft' ), 'desc' => __( 'Hair, makeup, facial and bridal packages, each with its own price and time.', 'lieusoft' ), 'icon' => 'star' ),
		array( 'title' => __( 'Barber Shop', 'lieusoft' ), 'desc' => __( 'Customers pick their barber and slot instead of waiting in line.', 'lieusoft' ), 'icon' => 'scissors' ),
		array( 'title' => __( 'Cleaning Service', 'lieusoft' ), 'desc' => __( 'Home and office cleaning booked by date, with the address and notes attached.', 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Repair & Maintenance', 'lieusoft' ), 'desc' => __( 'AC, appliance or device repair visits scheduled and assigned to technicians.', 'lieusoft' ), 'icon' => 'sliders' ),
		array( 'title' => __( 'Fitness & Yoga Studio', 'lieusoft' ), 'desc' => __( "Personal training and class sessions booked against each trainer's schedule.", 'lieusoft' ), 'icon' => 'trending-up' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'variant' => 'light',
	'cta'     => true,
	'title'   => __( 'Everything Your Business Needs, In One Package', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Website', 'lieusoft' ), 'desc' => __( "Your business's own website", 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Booking System', 'lieusoft' ), 'desc' => __( 'Online booking & staff schedule', 'lieusoft' ), 'icon' => 'calendar' ),
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
	'desc'    => __( 'From the first call to a live booking website, in four simple steps.', 'lieusoft' ),
	'steps'   => array(
		array( 'title' => __( 'Contact & Appointment', 'lieusoft' ), 'desc' => __( 'Book a consultation and tell us about your services and staff.', 'lieusoft' ), 'icon' => 'headset' ),
		array( 'title' => __( 'Select Your Domain', 'lieusoft' ), 'desc' => __( "Pick your business's website address — or use one you already own.", 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Deploy Solution', 'lieusoft' ), 'desc' => __( 'We set up the website and booking system with your services and staff.', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Payment', 'lieusoft' ), 'desc' => __( 'Choose a 1, 2, 3 or 5 year plan, and pay once your booking system is live.', 'lieusoft' ), 'icon' => 'credit-card' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-tabs', array(
	'title' => __( 'Why Choose Lieusoft', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Built for Bookings', 'lieusoft' ), 'icon' => 'calendar', 'desc' => __( 'Services with their own price and duration, staff with their own working hours, breaks and days off — the system is designed around how an appointment business actually runs, not a contact form someone has to answer by hand.', 'lieusoft' ) ),
		array( 'title' => __( 'Live in 7 Days', 'lieusoft' ), 'icon' => 'clock', 'desc' => __( 'From the day we start to a website your customers can book on, in about a week. We set up the domain and hosting, add your services, prices and staff — you review it and start taking bookings.', 'lieusoft' ) ),
		array( 'title' => __( 'Everything in One Package', 'lieusoft' ), 'icon' => 'grid', 'desc' => __( 'Website, booking system, hosting, domain, SSL and business email come together. No separate developer, hosting company and booking app subscription to juggle — one team is responsible for all of it.', 'lieusoft' ) ),
		array( 'title' => __( 'Customers Book Anytime', 'lieusoft' ), 'icon' => 'smartphone', 'desc' => __( 'Customers book from their phone at midnight just as easily as at noon, and get an instant SMS confirmation. You stop losing bookings to missed calls and unanswered messages.', 'lieusoft' ) ),
		array( 'title' => __( 'No More Double Bookings', 'lieusoft' ), 'icon' => 'check-circle', 'desc' => __( "Every booking blocks that staff member's time automatically, so two customers can never land in the same slot. Reminders before each visit cut down on no-shows too.", 'lieusoft' ) ),
		array( 'title' => __( 'Support That Answers', 'lieusoft' ), 'icon' => 'headset', 'desc' => __( 'Reach us directly on WhatsApp or email — in Bangla or English. Fixes, small changes and updates are covered for the first year, and you talk to the people who built your system.', 'lieusoft' ) ),
		array( 'title' => __( 'Your Data Stays Yours', 'lieusoft' ), 'icon' => 'shield-check', 'desc' => __( 'Your customer list and booking history belong to your business. The site runs on secure HTTPS with managed hosting, and we only access your data to set up, maintain and support it.', 'lieusoft' ) ),
		array( 'title' => __( 'Grows With Your Business', 'lieusoft' ), 'icon' => 'trending-up', 'desc' => __( "Add new services, new staff or a second branch whenever you're ready. The same system works for a one-chair salon today and a busy multi-staff spa tomorrow.", 'lieusoft' ) ),
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
		__( 'Booking website', 'lieusoft' ),
		__( 'Booking & staff schedule system', 'lieusoft' ),
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
		array( 'q' => __( 'Can I manage multiple staff?', 'lieusoft' ), 'a' => __( 'Yes, add as many staff as you need, each with their own services, working hours and days off.', 'lieusoft' ) ),
		array( 'q' => __( 'Can customers pay online?', 'lieusoft' ), 'a' => __( 'Yes, online payments can be enabled through supported payment gateways, or customers can pay at your venue.', 'lieusoft' ) ),
		array( 'q' => __( 'Do customers get reminders?', 'lieusoft' ), 'a' => __( 'Yes, customers get a confirmation by SMS and email when they book, and a reminder before their appointment.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I block days off or holidays?', 'lieusoft' ), 'a' => __( 'Yes, you can close the whole business or a single staff member for any day, and those slots disappear from booking.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting and training?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting and onboarding training for your staff are included in every plan.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Launch Your Booking Website?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your business requirements.", 'lieusoft' ),
) );

get_footer();
