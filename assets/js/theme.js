( function () {
	'use strict';

	var toggle = document.querySelector( '.site-nav__toggle' );
	var nav = document.querySelector( '.site-nav' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			var expanded = toggle.getAttribute( 'aria-expanded' ) === 'true';
			toggle.setAttribute( 'aria-expanded', String( ! expanded ) );
			nav.classList.toggle( 'is-open' );
		} );
	}
} )();
