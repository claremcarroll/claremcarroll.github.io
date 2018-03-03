(function($) {
	"use strict";
	$(document).ready(function(){

		// Menu
		$( 'ul.dropdown-menu li' ).hover(function(){
			$(this).children( 'ul' ).stop(true,true).fadeIn(300);
		},function(){
			$(this).children( 'ul' ).stop(true,true).fadeOut(300);
		});

		// Comment scrolling
		$( '.comment-scroll a' ).click( function( event ) {		
			event.preventDefault();
			$( 'html,body' ).animate({
				scrollTop	: $( this.hash ).offset( ).top
			}, 'normal' );
		});

		// Response videos
		if ( $.fn.fitVids != undefined ) {
			$( ".fitvids" ).fitVids();
		}

		// Mobile select menu
		$( "<select />" ).appendTo( "#navigation" );
		$( "<option />", {
		   "selected"	: "selected",
		   "value"		: "",
		   "text"		: wpexParams.responsiveMenu
		}).appendTo( "#navigation select" );

		$( "#navigation a" ).each(function() {
			var el = $(this);
			if (el.parents( '.sub-menu' ).length >= 1) {
				$( '<option />', {
				 'value'	: el.attr( "href" ),
				 'text'		: '- ' + el.text()
				}).appendTo( "#navigation select" );
			}
			else if (el.parents( '.sub-menu .sub-menu' ).length >= 1) {
				$( '<option />', {
				 'value'	: el.attr( 'href' ),
				 'text'		: '-- ' + el.text()
				}).appendTo( "#navigation select" );
			}
			else {
				$( '<option />', {
				 'value'	: el.attr( 'href' ),
				 'text'		: el.text()
				}).appendTo( "#navigation select" );
			}
		});
		$( "#navigation select" ).change(function() {
		  window.location = $(this).find( "option:selected" ).val();
		});

		// Lightbox
		$('.wpex-lightbox').magnificPopup( {
			type	: 'image'
		} );
		$('.wpex-gallery-lightbox').each( function() {
			$(this).magnificPopup({
				delegate	: 'a',
				type		: 'image',
				gallery: {
					enabled: true
				}
			});
		});
		
	
	});
		
	$(window).load(function() {
		// Homepage slider
		if ( $.fn.flexslider != undefined ) {
			$( 'div#home-slider' ).removeClass( 'loading' );
			$( 'div#home-slider.flexslider' ).flexslider({
				animation		: 'slide',
				smoothHeight	: true,
				controlNav		: false,
				prevText		: '<i class="fa fa-chevron-left"></i>',
				nextText		: '<i class="fa fa-chevron-right"></i>'
			});
			// Portfolio
			$( 'div#single-portfolio-media .flexslider' ).flexslider({
				animation		: 'slide',
				slideshow		: false,
				smoothHeight	: true,
				directionNav	: false,
				controlNav		: true,
				prevText		: '<i class="fa fa-chevron-left"></i>',
				nextText		: '<i class="fa fa-chevron-right"></i>'
			});
		}
	});
	
})(jQuery);