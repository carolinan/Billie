/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */

( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );

			jQuery(document).ready(function($) {
				$('.site-branding').css('display','block');
			} ); 

		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );

			jQuery(document).ready(function($) {
				$('.site-branding').css('display','none');
			} ); 

		}
	};

	/* Close meny with Esc key*/

	jQuery(document).ready(function($) {
	$( document ).keyup( function( e ) { 
	    if ( e.keyCode === 27 ) { 
	    	if ( -1 !== container.className.indexOf( 'toggled' ) ) {
				container.className = container.className.replace( ' toggled', '' );
				button.setAttribute( 'aria-expanded', 'false' );
				menu.setAttribute( 'aria-expanded', 'false' );
			}
	     } 
	} ); 

});	

} )();

	/* Thanks to: Keyboard Accessible Dropdown Menus
	Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)
	License:      MIT
	Plugin URI:   https://github.com/sabreuse/accessible-menus
	*/

jQuery(document).ready(function($){	$('.main-navigation li').hover(
		function(){$(this).addClass("keyboard-dropdown");},
		function(){$(this).delay('250').removeClass("keyboard-dropdown");}
	);

	$('.main-navigation li a').on('focus blur',
		function(){$(this).parents().toggleClass("keyboard-dropdown");}
	);

});	

