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

/**
 * Lightbox for images in blog posts: click a linked image to see it full
 * size; close with the button, the backdrop or Esc; arrows step through the
 * post's other images.
 */
( function () {
	'use strict';

	var links = Array.prototype.slice.call( document.querySelectorAll( '.prose a' ) ).filter( function ( a ) {
		return a.querySelector( 'img' ) && /\.(png|jpe?g|gif|webp|avif)(\?.*)?$/i.test( a.getAttribute( 'href' ) || '' );
	} );
	if ( ! links.length ) {
		return;
	}

	var l10n = window.lieusoftL10n || {};
	var box = document.createElement( 'div' );
	box.className = 'lightbox';
	box.setAttribute( 'role', 'dialog' );
	box.setAttribute( 'aria-modal', 'true' );
	box.hidden = true;
	box.innerHTML =
		'<button type="button" class="lightbox__close" aria-label="' + ( l10n.close || 'Close' ) + '"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg></button>' +
		'<button type="button" class="lightbox__nav lightbox__nav--prev" aria-label="' + ( l10n.previous || 'Previous image' ) + '"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 5l-7 7 7 7"/></svg></button>' +
		'<figure class="lightbox__figure"><img alt=""><figcaption></figcaption></figure>' +
		'<button type="button" class="lightbox__nav lightbox__nav--next" aria-label="' + ( l10n.next || 'Next image' ) + '"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5l7 7-7 7"/></svg></button>';
	document.body.appendChild( box );

	var img = box.querySelector( 'img' );
	var caption = box.querySelector( 'figcaption' );
	var closeBtn = box.querySelector( '.lightbox__close' );
	var current = 0;
	var opener = null;

	if ( links.length < 2 ) {
		box.classList.add( 'lightbox--single' );
	}

	function show( index ) {
		current = ( index + links.length ) % links.length;
		var link = links[ current ];
		var thumb = link.querySelector( 'img' );
		var figure = link.closest( 'figure' );
		var text = figure && figure.querySelector( 'figcaption' ) ? figure.querySelector( 'figcaption' ).textContent : '';
		img.src = link.getAttribute( 'href' );
		img.alt = thumb.getAttribute( 'alt' ) || '';
		caption.textContent = text;
		caption.hidden = ! text;
	}

	function open( index ) {
		opener = document.activeElement;
		show( index );
		box.hidden = false;
		document.body.classList.add( 'lightbox-open' );
		requestAnimationFrame( function () {
			box.classList.add( 'is-open' );
		} );
		closeBtn.focus();
	}

	function close() {
		box.classList.remove( 'is-open' );
		document.body.classList.remove( 'lightbox-open' );
		box.hidden = true;
		img.removeAttribute( 'src' );
		if ( opener ) {
			opener.focus();
		}
	}

	links.forEach( function ( link, i ) {
		link.classList.add( 'has-lightbox' );
		link.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			open( i );
		} );
	} );

	closeBtn.addEventListener( 'click', close );
	box.querySelector( '.lightbox__nav--prev' ).addEventListener( 'click', function () {
		show( current - 1 );
	} );
	box.querySelector( '.lightbox__nav--next' ).addEventListener( 'click', function () {
		show( current + 1 );
	} );
	box.addEventListener( 'click', function ( e ) {
		if ( e.target === box ) {
			close();
		}
	} );

	document.addEventListener( 'keydown', function ( e ) {
		if ( box.hidden ) {
			return;
		}
		var rtl = 'rtl' === document.documentElement.dir;
		if ( 'Escape' === e.key ) {
			close();
		} else if ( 'ArrowRight' === e.key ) {
			show( current + ( rtl ? -1 : 1 ) );
		} else if ( 'ArrowLeft' === e.key ) {
			show( current + ( rtl ? 1 : -1 ) );
		} else if ( 'Tab' === e.key ) {
			// Keep focus inside the dialog.
			var focusable = Array.prototype.filter.call( box.querySelectorAll( 'button' ), function ( b ) {
				return b.offsetParent !== null;
			} );
			var first = focusable[ 0 ];
			var last = focusable[ focusable.length - 1 ];
			if ( e.shiftKey && document.activeElement === first ) {
				e.preventDefault();
				last.focus();
			} else if ( ! e.shiftKey && document.activeElement === last ) {
				e.preventDefault();
				first.focus();
			}
		}
	} );
} )();

// My Account: tabbed panels ([data-lsac-tabs]). Any [data-tab] button
// shows the panel with that id; the #hash keeps the choice on reload and
// lets links point straight at a panel (e.g. /my-account/#licenses).
( function () {
	'use strict';

	var root = document.querySelector( '[data-lsac-tabs]' );
	if ( ! root ) {
		return;
	}
	var panels = Array.prototype.slice.call( root.querySelectorAll( '.lsac-panel' ) );
	var tabs = Array.prototype.slice.call( root.querySelectorAll( '[role="tab"]' ) );

	function show( id, focus ) {
		if ( ! panels.some( function ( p ) { return p.id === id; } ) ) {
			return;
		}
		panels.forEach( function ( p ) {
			p.hidden = p.id !== id;
		} );
		tabs.forEach( function ( t ) {
			t.setAttribute( 'aria-selected', String( t.getAttribute( 'data-tab' ) === id ) );
			t.tabIndex = t.getAttribute( 'data-tab' ) === id ? 0 : -1;
		} );
		if ( window.history && window.history.replaceState ) {
			window.history.replaceState( null, '', '#' + id );
		}
		if ( focus ) {
			var active = tabs.filter( function ( t ) { return t.getAttribute( 'data-tab' ) === id; } )[ 0 ];
			if ( active ) {
				active.focus();
			}
		}
	}

	root.addEventListener( 'click', function ( e ) {
		var btn = e.target.closest( '[data-tab]' );
		if ( btn && root.contains( btn ) ) {
			show( btn.getAttribute( 'data-tab' ) );
		}
	} );

	root.addEventListener( 'keydown', function ( e ) {
		var i = tabs.indexOf( document.activeElement );
		if ( i < 0 ) {
			return;
		}
		var step = { ArrowRight: 1, ArrowDown: 1, ArrowLeft: -1, ArrowUp: -1 }[ e.key ];
		if ( step ) {
			e.preventDefault();
			show( tabs[ ( i + step + tabs.length ) % tabs.length ].getAttribute( 'data-tab' ), true );
		}
	} );

	// EDD's register/login error notices land in the matching panel — open it.
	var start = window.location.hash.slice( 1 );
	if ( ! start ) {
		var withError = panels.filter( function ( p ) { return p.querySelector( '.edd-alert-error, .edd_errors' ); } )[ 0 ];
		start = withError ? withError.id : '';
	}
	if ( start ) {
		show( start );
	}
	tabs.forEach( function ( t ) {
		t.tabIndex = t.getAttribute( 'aria-selected' ) === 'true' ? 0 : -1;
	} );
} )();
