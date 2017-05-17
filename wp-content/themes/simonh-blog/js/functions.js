/**
 * Theme functions file
 *
 * 
 */

( function( $ ) {
	$('.mobile-menu-button').on('click', function() {
		$(this).toggleClass('active');
	});

	$( document ).ready( function() {

		$('html').removeClass('no-js').addClass('js');
		setTimeout(function(){
			$('html').addClass('fade-in');
		}, 1000);
		
	} );

} )( jQuery );
