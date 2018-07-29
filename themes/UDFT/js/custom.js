(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.menu-button').on( 'click', function( e ) {
            $('.menu-button').toggleClass( 'active' );
			$('.top-menu').toggleClass( 'active' );
        });

		$('.to-top-link').on( 'click', function( e ) {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
		});
		
	});
	
})(jQuery, this);
