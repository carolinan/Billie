/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );

	wp.customize( 'billie_hide_title', function( value ) {
		value.bind( function( newval ) {
			if( true === newval ){
				$( '.toptitle' ).css( 'display', 'none' );
			}else{
				$( '.toptitle' ).css( 'display', 'initial' );
			}

		});

	} );

	wp.customize( 'billie_featured_headline', function( value ) {
		value.bind( function( to ) {
			$( '.featured-headline' ).text( to );
		} );
	} );


} )( jQuery );
