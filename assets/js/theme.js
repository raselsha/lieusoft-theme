( function () {
	'use strict';

	var toggle = document.querySelector( '.site-nav__toggle' );
	var nav = document.querySelector( '.site-nav' );
	var closeBtn = document.querySelector( '.site-nav__close' );
	var backdrop = document.querySelector( '.site-nav__backdrop' );

	if ( ! toggle || ! nav ) {
		return;
	}

	function setOpen( open ) {
		toggle.setAttribute( 'aria-expanded', String( open ) );
		nav.classList.toggle( 'is-open', open );
		if ( backdrop ) {
			backdrop.classList.toggle( 'is-open', open );
		}
		document.body.classList.toggle( 'nav-open', open );
	}

	toggle.addEventListener( 'click', function () {
		setOpen( toggle.getAttribute( 'aria-expanded' ) !== 'true' );
	} );

	if ( closeBtn ) {
		closeBtn.addEventListener( 'click', function () {
			setOpen( false );
		} );
	}

	if ( backdrop ) {
		backdrop.addEventListener( 'click', function () {
			setOpen( false );
		} );
	}

	document.addEventListener( 'keydown', function ( e ) {
		if ( 'Escape' === e.key ) {
			setOpen( false );
		}
	} );
} )();

( function () {
	'use strict';

	var slider = document.querySelector( '.hero-slider' );
	if ( ! slider ) {
		return;
	}

	var slidesWrap = slider.querySelector( '.hero-slider__slides' );
	var slides = slider.querySelectorAll( '.hero-slider__slide' );
	var dots = slider.querySelectorAll( '.hero-slider__dot' );
	var current = 0;
	var timer = null;
	var delay = parseInt( slider.getAttribute( 'data-autoplay' ), 10 ) || 4500;

	function resize() {
		if ( slidesWrap && slides[ current ] ) {
			slidesWrap.style.height = slides[ current ].getBoundingClientRect().height + 'px';
		}
	}

	// A plain scrollHeight read right after toggling classes can race the
	// image's own layout (e.g. before its aspect ratio is resolved), so a
	// ResizeObserver on the active slide corrects the height the moment its
	// real box size is known — immune to load/timing order.
	var resizeObserver = window.ResizeObserver ? new ResizeObserver( resize ) : null;

	function observeCurrent() {
		if ( ! resizeObserver ) {
			return;
		}
		resizeObserver.disconnect();
		if ( slides[ current ] ) {
			resizeObserver.observe( slides[ current ] );
		}
	}

	function show( index ) {
		current = ( index + slides.length ) % slides.length;
		slides.forEach( function ( slide, i ) {
			slide.classList.toggle( 'is-active', i === current );
		} );
		dots.forEach( function ( dot, i ) {
			dot.classList.toggle( 'is-active', i === current );
		} );
		observeCurrent();
		resize();
	}

	function start() {
		stop();
		timer = window.setInterval( function () {
			show( current + 1 );
		}, delay );
	}

	function stop() {
		if ( timer ) {
			window.clearInterval( timer );
			timer = null;
		}
	}

	dots.forEach( function ( dot ) {
		dot.addEventListener( 'click', function () {
			show( parseInt( dot.getAttribute( 'data-slide' ), 10 ) || 0 );
			start();
		} );
	} );

	slider.addEventListener( 'mouseenter', stop );
	slider.addEventListener( 'mouseleave', start );

	if ( ! resizeObserver ) {
		// Fallback for browsers without ResizeObserver: re-measure on load
		// and on viewport resize instead of reacting to real box-size changes.
		var resizeTimer = null;
		window.addEventListener( 'resize', function () {
			window.clearTimeout( resizeTimer );
			resizeTimer = window.setTimeout( resize, 150 );
		} );

		slider.querySelectorAll( '.hero-slider__image' ).forEach( function ( img ) {
			if ( img.complete ) {
				resize();
			} else {
				img.addEventListener( 'load', resize );
			}
		} );
	}

	observeCurrent();
	resize();

	if ( slides.length > 1 ) {
		start();
	}
} )();

// Solution-page hero — one Mac-style window that plays a single booking
// step at a time, on a loop: pick a doctor -> pick date/time -> fill in
// patient details -> confirmed -> lands in the admin dashboard's queue ->
// resets and repeats. The window stays one fixed size throughout — only
// the scene content crossfades.
( function () {
	var sim = document.querySelector( '[data-hero-sim]' );
	if ( ! sim ) {
		return;
	}

	var scenes = sim.querySelectorAll( '.hero-sim__scene' );
	if ( ! scenes.length ) {
		return;
	}

	var titleEl = sim.querySelector( '[data-sim-title]' );
	var newRow = document.querySelector( '[data-sim-new-row]' );
	var progressFills = document.querySelectorAll( '[data-hero-sim-progress] .hero-sim-progress__fill' );
	var dashboardIndex = scenes.length - 1;
	var dwellTimes = [ 2600, 2800, 2400, 2200, 3200 ];
	var index = 0;

	function updateProgress( i ) {
		progressFills.forEach( function ( fill, j ) {
			fill.style.transition = 'none';
			fill.style.width = j < i ? '100%' : '0%';
			if ( j === i ) {
				// Force a reflow so the width:0% above actually paints
				// before the transition below starts — otherwise the
				// browser can coalesce both changes and the bar never
				// visibly fills on repeat loops.
				void fill.offsetWidth;
				fill.style.transition = 'width ' + ( dwellTimes[ i ] || 2600 ) + 'ms linear';
				fill.style.width = '100%';
			}
		} );
	}

	function show( i ) {
		scenes.forEach( function ( scene, j ) {
			scene.classList.toggle( 'is-active', j === i );
		} );

		updateProgress( i );

		if ( titleEl ) {
			var title = scenes[ i ].getAttribute( 'data-title' );
			if ( title ) {
				titleEl.textContent = title;
			}
		}

		if ( newRow ) {
			if ( i === dashboardIndex ) {
				newRow.classList.add( 'is-visible', 'is-flash' );
				window.setTimeout( function () {
					newRow.classList.remove( 'is-flash' );
				}, 900 );
			} else if ( 0 === i ) {
				newRow.classList.remove( 'is-visible' );
			}
		}
	}

	function scheduleNext() {
		window.setTimeout( advance, dwellTimes[ index ] || 2600 );
	}

	function advance() {
		index = ( index + 1 ) % scenes.length;
		show( index );
		scheduleNext();
	}

	show( 0 );
	scheduleNext();
} )();


// "Why Choose Lieusoft" tabs — on desktop the section pins (CSS sticky)
// and the active tab follows how far you've scrolled through it; tabs are
// clickable everywhere (on desktop a click scrolls to that tab's spot so
// scroll and selection never disagree).
( function () {
	var root = document.querySelector( '[data-why-tabs]' );
	if ( ! root ) {
		return;
	}

	var tabs = root.querySelectorAll( '[data-why-tab]' );
	var panels = root.querySelectorAll( '[data-why-panel]' );
	var sticky = root.querySelector( '.why-tabs__sticky' );
	var count = tabs.length;
	var current = 0;

	function activate( i ) {
		if ( i === current ) {
			return;
		}
		current = i;
		tabs.forEach( function ( tab, j ) {
			tab.classList.toggle( 'is-active', j === i );
			tab.setAttribute( 'aria-selected', j === i ? 'true' : 'false' );
		} );
		panels.forEach( function ( panel, j ) {
			panel.classList.toggle( 'is-active', j === i );
		} );
	}

	function isPinned() {
		return window.getComputedStyle( sticky ).position === 'sticky';
	}

	function scrollRange() {
		var top = root.getBoundingClientRect().top + window.pageYOffset;
		return { start: top, length: root.offsetHeight - sticky.offsetHeight };
	}

	function onScroll() {
		if ( ! isPinned() ) {
			return;
		}
		var range = scrollRange();
		var progress = ( window.pageYOffset - range.start ) / Math.max( range.length, 1 );
		progress = Math.min( Math.max( progress, 0 ), 0.9999 );
		activate( Math.floor( progress * count ) );
	}

	tabs.forEach( function ( tab, i ) {
		tab.addEventListener( 'click', function () {
			if ( isPinned() ) {
				var range = scrollRange();
				window.scrollTo( { top: range.start + ( ( i + 0.5 ) / count ) * range.length, behavior: 'smooth' } );
			}
			activate( i );
		} );
	} );

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	window.addEventListener( 'resize', onScroll );
	onScroll();
} )();

// Testimonials marquee — each track holds its cards twice; scroll the row
// a few px per frame and wrap by exactly one copy's width so it never runs
// out. Uses the row's own scroll position rather than a transform:
// Firefox stops painting an element shifted thousands of px by a transform,
// which left whole rows blank. Second row runs the other way; hover pauses.
( function () {
	var rows = document.querySelectorAll( '.testimonials__row, [data-marquee]' );
	if ( ! rows.length || window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
		return;
	}

	var speed = 40; // px per second
	var strips = Array.prototype.map.call( rows, function ( row, i ) {
		var strip = { row: row, track: row.querySelector( '.testimonials__track, .marquee__track' ), dir: i % 2 ? -1 : 1, pos: 0, paused: false, loop: 0 };
		row.addEventListener( 'mouseenter', function () { strip.paused = true; } );
		row.addEventListener( 'mouseleave', function () { strip.paused = false; } );
		return strip;
	} );

	function measure() {
		strips.forEach( function ( s ) {
			var gap = parseFloat( window.getComputedStyle( s.track ).columnGap ) || 0;
			s.loop = ( s.track.scrollWidth + gap ) / 2;
			s.pos = s.dir < 0 ? s.loop : 0;
		} );
	}

	var last = null;
	function frame( now ) {
		var dt = last === null ? 0 : Math.min( ( now - last ) / 1000, 0.1 );
		last = now;
		strips.forEach( function ( s ) {
			if ( ! s.loop ) {
				return;
			}
			if ( ! s.paused ) {
				s.pos += s.dir * speed * dt;
				if ( s.pos >= s.loop ) {
					s.pos -= s.loop;
				} else if ( s.pos < 0 ) {
					s.pos += s.loop;
				}
			}
			s.row.scrollLeft = s.pos;
		} );
		window.requestAnimationFrame( frame );
	}

	measure();
	window.addEventListener( 'resize', measure );
	window.addEventListener( 'load', measure );
	window.requestAnimationFrame( frame );
} )();

// Header language switcher — click to open, click outside or Escape to close.
( function () {
	var root = document.querySelector( '[data-lang-switch]' );
	if ( ! root ) {
		return;
	}

	var btn = root.querySelector( '.lang-switch__btn' );

	function setOpen( open ) {
		root.classList.toggle( 'is-open', open );
		btn.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
	}

	btn.addEventListener( 'click', function ( e ) {
		e.stopPropagation();
		setOpen( ! root.classList.contains( 'is-open' ) );
	} );

	document.addEventListener( 'click', function ( e ) {
		if ( ! root.contains( e.target ) ) {
			setOpen( false );
		}
	} );

	document.addEventListener( 'keydown', function ( e ) {
		if ( 'Escape' === e.key ) {
			setOpen( false );
		}
	} );
} )();
