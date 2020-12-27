jQuery( document ).ready( function( $ ) {
	//* Background parallax effect
	function setParallaxBackgroundPosition( initialSetup ){
		$('.background--parallax, .background--parallax-original').each(function(){
		    var distance = $(this).offset().top;
		    var height = $(this).outerHeight();
		    var scrollPosition = $(window).scrollTop();
		    var windowHeight = $(window).outerHeight();

		    if ( initialSetup == true ) {
		    	$(this).css('background-position', 'center ' + parseInt( -windowHeight/4 ) + 'px');
		    } else {
			    if ( ( scrollPosition + windowHeight/0.25 ) >= distance ) {
			        $(this).css('background-position', 'center ' + parseInt( (scrollPosition - distance) / 2 ) + 'px');
			    }		    	
		    }
	    });
	}
	setParallaxBackgroundPosition(true);
	$(window).on('scroll', function() {
		setParallaxBackgroundPosition();
	});


	//* Toggle Search Form
	$('.header__primary-menu .btn--search').on('click', function(){
		var container = $('.header__primary-menu .lg--flex');
		var formInput = $('.header__primary-menu .form--search .input--text');

		if ( formInput.val() === '' ) {
			if ( !container.hasClass('js-showSearchForm') ) {
				container.addClass('js-showSearchForm');
			} else {
				formInput.addClass('input--error');
			}
			formInput.focus();
			return false;
		} else {
			$(this).closest('form').submit();
		}
	});

	$('body').on('click', function(e){
		if ( $(e.target).closest('.header__primary-menu').length == 0 ) {
			$('.header__primary-menu .lg--flex').removeClass('js-showSearchForm');
			$('.header__primary-menu .form--search .input--text').val('').removeClass('input--error');
		}
	});

	//* Fixed header
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 300) {
	       $('.header__primary-menu').addClass('header--fixed');
	    } else {
	       $('.header__primary-menu').removeClass('header--fixed');
	    }
	});

	//* Mobile menu accordion menu
	$('.menu--mobile .menu__item--has-children').on('click',function(){
		$(this).children('.sub-menu').slideToggle();
	});




});

