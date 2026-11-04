<?php
/**
 * Template Name: Solution — Doctor Appointment
 *
 * Product landing page for the Doctor Appointment solution.
 * Hero device mockup is built in CSS/SVG (no real screenshot exists yet for
 * this not-yet-live page) — swap `template-parts/solution-hero.php`'s
 * `.device-mock` markup for a real image whenever one is ready.
 */

get_header();
?>

<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'lieusoft' ); ?>">
	<div class="container breadcrumb__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo lieusoft_icon( 'home' ); ?><?php esc_html_e( 'Home', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Solutions', 'lieusoft' ); ?></a>
		<span aria-hidden="true">/</span>
		<span aria-current="page"><?php esc_html_e( 'Doctor Appointment Solution', 'lieusoft' ); ?></span>
	</div>
</nav>

<?php
get_template_part( 'template-parts/solution', 'hero' );

get_template_part( 'template-parts/solution', 'feature-steps', array(
	'eyebrow' => __( 'Key Features', 'lieusoft' ),
	'title'   => __( 'See How It Works', 'lieusoft' ),
	'desc'    => __( 'From booking to running your clinic day-to-day — everything happens in one connected system.', 'lieusoft' ),
	'steps'   => array(
		array(
			'num'    => '01',
			'title'  => __( 'Browse Doctor Profiles', 'lieusoft' ),
			'desc'   => __( "Patients see each doctor's specialty, credentials and weekly availability before they ever book.", 'lieusoft' ),
			'widget' => 'profile',
		),
		array(
			'num'    => '02',
			'title'  => __( 'Pick a Date & Time', 'lieusoft' ),
			'desc'   => __( 'An interactive calendar shows real open slots, so patients only ever pick a time that actually works.', 'lieusoft' ),
			'widget' => 'datetime',
		),
		array(
			'num'    => '03',
			'title'  => __( 'Patients Fill in Their Details', 'lieusoft' ),
			'desc'   => __( 'A short form collects name, contact and basic details — no account or app download needed.', 'lieusoft' ),
			'widget' => 'patient-form',
		),
		array(
			'num'    => '04',
			'title'  => __( 'Instant Booking Confirmation', 'lieusoft' ),
			'desc'   => __( 'Patients get an instant confirmation with a QR code they can show at check-in.', 'lieusoft' ),
			'widget' => 'confirmation',
		),
		array(
			'num'    => '05',
			'title'  => __( 'Instant SMS & Email Confirmation', 'lieusoft' ),
			'desc'   => __( "The moment a booking is confirmed, patients get it in writing too — straight to their phone and inbox.", 'lieusoft' ),
			'widget' => 'notify',
		),
		array(
			'num'    => '06',
			'title'  => __( 'Booking Appears in the Admin Panel', 'lieusoft' ),
			'desc'   => __( "The new booking shows up instantly in the clinic's admin panel — no manual entry, no phone calls.", 'lieusoft' ),
			'widget' => 'admin-booking',
		),
		array(
			'num'    => '07',
			'title'  => __( 'Live Queue Management', 'lieusoft' ),
			'desc'   => __( 'Staff manage the queue in real time, and patients always know exactly where they stand.', 'lieusoft' ),
			'widget' => 'live-queue',
		),
	),
) );

get_template_part( 'template-parts/solution', 'features', array(
	'eyebrow' => __( 'Who Can Use This', 'lieusoft' ),
	'title'   => __( 'Perfect for Every Kind of Clinic', 'lieusoft' ),
	'desc'    => __( 'Whether you run a solo practice or a multi-doctor clinic, the system adapts to how you actually work.', 'lieusoft' ),
	'columns' => 3,
	'items'   => array(
		array( 'title' => __( 'Private Chamber', 'lieusoft' ), 'desc' => __( 'Built for solo doctors managing their own patients and schedule.', 'lieusoft' ), 'image' => 'who-private-chamber.jpg' ),
		array( 'title' => __( 'Dental Clinic', 'lieusoft' ), 'desc' => __( 'Organize patient visits, follow-ups and treatment appointments.', 'lieusoft' ), 'image' => 'who-dental-clinic.jpg' ),
		array( 'title' => __( 'Gynecology & Obstetrics', 'lieusoft' ), 'desc' => __( 'Private, organized scheduling for sensitive patient care.', 'lieusoft' ), 'image' => 'who-gynecology.jpg' ),
		array( 'title' => __( 'Diagnostic Center', 'lieusoft' ), 'desc' => __( 'Coordinate test bookings and keep patient records in one place.', 'lieusoft' ), 'image' => 'who-diagnostic-center.jpg' ),
		array( 'title' => __( 'Multi-Specialty Clinic', 'lieusoft' ), 'desc' => __( 'Add multiple doctors, each with their own schedule and patients.', 'lieusoft' ), 'image' => 'who-multi-specialty.jpg' ),
		array( 'title' => __( 'Physiotherapy Center', 'lieusoft' ), 'desc' => __( 'Track recurring sessions and patient progress over time.', 'lieusoft' ), 'image' => 'who-physiotherapy.jpg' ),
	),
) );

get_template_part( 'template-parts/solution', 'included', array(
	'variant' => 'light',
	'cta'     => true,
	'title'   => __( 'Everything Your Clinic Needs, In One Package', 'lieusoft' ),
	'items'   => array(
		array( 'title' => __( 'Website', 'lieusoft' ), 'desc' => __( 'Your clinic\'s own website', 'lieusoft' ), 'icon' => 'home' ),
		array( 'title' => __( 'Appointment System', 'lieusoft' ), 'desc' => __( 'Online booking & live queue', 'lieusoft' ), 'icon' => 'calendar' ),
		array( 'title' => __( 'Hosting', 'lieusoft' ), 'desc' => __( 'Fast, managed server', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Domain', 'lieusoft' ), 'desc' => __( 'Your own .com or .com.bd', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'SSL', 'lieusoft' ), 'desc' => __( 'Secure https padlock', 'lieusoft' ), 'icon' => 'shield-check' ),
		array( 'title' => __( 'Business Email', 'lieusoft' ), 'desc' => __( 'Email on your own domain', 'lieusoft' ), 'icon' => 'envelope' ),
		array( 'title' => __( 'Training', 'lieusoft' ), 'desc' => __( 'Onboarding for your staff', 'lieusoft' ), 'icon' => 'book-open' ),
		array( 'title' => __( '1 Year Support', 'lieusoft' ), 'desc' => __( 'Fixes & updates included', 'lieusoft' ), 'icon' => 'headset' ),
	),
	'desc' => __( 'No hidden add-ons — every plan ships complete, ready to launch.', 'lieusoft' ),
) );

get_template_part( 'template-parts/solution', 'how-it-works', array(
	'variant' => 'dark',
	'title' => __( 'How You Get Your Solution', 'lieusoft' ),
	'desc'  => __( 'From the first call to a live clinic website, in four simple steps.', 'lieusoft' ),
	'steps' => array(
		array( 'title' => __( 'Contact & Appointment', 'lieusoft' ), 'desc' => __( 'Book a consultation and tell us about your clinic.', 'lieusoft' ), 'icon' => 'headset' ),
		array( 'title' => __( 'Select Your Domain', 'lieusoft' ), 'desc' => __( 'Pick your clinic\'s website address — or use one you already own.', 'lieusoft' ), 'icon' => 'globe' ),
		array( 'title' => __( 'Deploy Solution', 'lieusoft' ), 'desc' => __( 'We set up the website and appointment system, ready to use.', 'lieusoft' ), 'icon' => 'server' ),
		array( 'title' => __( 'Payment', 'lieusoft' ), 'desc' => __( 'Choose a 1, 2, 3 or 5 year plan, and pay once your clinic\'s system is live.', 'lieusoft' ), 'icon' => 'credit-card' ),
	),
) );

get_template_part( 'template-parts/solution', 'why-tabs', array(
	'title' => __( 'Why Choose Lieusoft', 'lieusoft' ),
	'items' => array(
		array( 'title' => __( 'Built for Clinics', 'lieusoft' ), 'icon' => 'stethoscope', 'desc' => __( 'This isn\'t a generic website with a booking form bolted on. Doctor profiles and schedules, a live patient queue, check-in, SMS confirmations and patient records are all designed around how a real chamber or clinic runs day to day — so your staff work the way they already do, just faster.', 'lieusoft' ) ),
		array( 'title' => __( 'Live in 7 Days', 'lieusoft' ), 'icon' => 'clock', 'desc' => __( 'From the day we start to a working website your patients can book on, in about a week. We handle the setup, the domain and the hosting, and add your doctors and schedules — you just review it and start taking bookings.', 'lieusoft' ) ),
		array( 'title' => __( 'Everything in One Package', 'lieusoft' ), 'icon' => 'grid', 'desc' => __( 'Website, appointment system, hosting, domain, SSL and business email come together. No separate developer, hosting company and booking tool to juggle, and no surprise add-ons later — one team is responsible for the whole thing.', 'lieusoft' ) ),
		array( 'title' => __( 'Patients Book Anytime', 'lieusoft' ), 'icon' => 'calendar', 'desc' => __( 'Patients pick a doctor, a date and an open time slot online, any hour of the day, and get an instant confirmation by SMS. Fewer phone calls for your front desk, fewer missed appointments, and a calmer waiting room.', 'lieusoft' ) ),
		array( 'title' => __( 'Training for Your Staff', 'lieusoft' ), 'icon' => 'book-open', 'desc' => __( 'We sit with your receptionist and doctors and walk them through bookings, check-in, the live queue and patient records, so nobody is left guessing how the new system works on day one.', 'lieusoft' ) ),
		array( 'title' => __( 'Support That Answers', 'lieusoft' ), 'icon' => 'headset', 'desc' => __( 'Reach us directly on WhatsApp or email — in Bangla or English. Fixes, small changes and updates are covered for the first year, and you talk to the people who actually built your system.', 'lieusoft' ) ),
		array( 'title' => __( 'Your Data Stays Yours', 'lieusoft' ), 'icon' => 'shield-check', 'desc' => __( 'Patient records and bookings belong to your clinic. The site runs on secure HTTPS with managed hosting, and we only access your data to set up, maintain and support the system.', 'lieusoft' ) ),
		array( 'title' => __( 'Grows With Your Clinic', 'lieusoft' ), 'icon' => 'trending-up', 'desc' => __( 'Start with one doctor and add more whenever you\'re ready — each with their own schedule and availability. The same system handles a private chamber today and a multi-doctor clinic tomorrow.', 'lieusoft' ) ),
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
		__( 'Clinic website', 'lieusoft' ),
		__( 'Appointment system', 'lieusoft' ),
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
		array( 'q' => __( 'Can I take online payment?', 'lieusoft' ), 'a' => __( 'Yes, online payments can be enabled through supported payment gateways.', 'lieusoft' ) ),
		array( 'q' => __( 'Can I add multiple doctors?', 'lieusoft' ), 'a' => __( "Yes, you can add multiple doctors, each with their own schedule and availability.", 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide hosting?', 'lieusoft' ), 'a' => __( 'Yes, managed hosting is included in every plan.', 'lieusoft' ) ),
		array( 'q' => __( 'Do you provide training?', 'lieusoft' ), 'a' => __( 'Yes, every plan includes onboarding training for your staff.', 'lieusoft' ) ),
	),
) );

get_template_part( 'template-parts/solution', 'cta', array(
	'title' => __( 'Ready to Launch Your Clinic Website?', 'lieusoft' ),
	'desc'  => __( "Let's discuss your clinic requirements.", 'lieusoft' ),
) );

get_footer();
