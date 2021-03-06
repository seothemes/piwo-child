var default_confirmation_val = '', confimation_message = '';
jQuery( document ).ready( function() {
	var i = [];
	jQuery( document ).find( '#gform_1 #gform_fields_1 input[type=hidden]' ).each( function() {
		var e = jQuery( this ).attr( 'id' ), t = jQuery( this ).val();
		i.push( { id: e, def_value: t } );
	} ), jQuery( '.grid' ).isotope( {
		itemSelector: '.grid-item',
		layoutMode: 'fitRows'
	} ), jQuery( document ).on( 'click', '.filter-button-group a', function() {
		var e = jQuery( this ).attr( 'data-filter' );
		jQuery( '.grid' ).isotope( { filter: e } ), jQuery( '.filter-button-group a' ).removeClass( 'active' ), jQuery( this ).addClass( 'active' );
	} ), jQuery( '.trying_btn:not(.solution_result) a' ).click( function() {jQuery( this ).parent().fadeOut( 800 ), jQuery( '.trying_solve_content.step_1' ).fadeOut( 800 ), setTimeout( function() {jQuery( '.trying_solve_content.step_2' ).fadeIn( 800 );}, 800 );} ), jQuery( '.arrow_icon i' ).click( function() {jQuery( '.trying_solve-sec' ).toggleClass( 'left' );} ), jQuery( '.filter-button-group' ).before( '<label>View All</label>' ), jQuery( '.select-filter-box label' ).on( 'click', function() {jQuery( this ).next( '.filter-button-group' ).slideToggle( 200 ), jQuery( this ).toggleClass( 'filter-active' );} ), jQuery( '.select-filter-box .filter-button-group button' ).on( 'click', function() {jQuery( this ).parents( '.filter-button-group' ).slideUp( 200 ), jQuery( '.select-filter-box label' ).removeClass( 'filter-active' ), jQuery( this ).parents( '.select-filter-box' ).find( 'label' ).text( jQuery( this ).text() );} ), equalheight( '.kickstart-section .cont-post_all .info-cont .text-cont' ), equalheight( '.kickstart-section .cont-post_all .info-cont .title-cont h4' ), jQuery( '.dropdown_kickstart' ).click( function() {jQuery( this ).attr( 'tabindex', 1 ).focus(), jQuery( this ).toggleClass( 'active' ), jQuery( this ).find( '.dropdown-menu' ).slideToggle( 300 );} ), jQuery( '.dropdown_kickstart' ).focusout( function() {jQuery( this ).removeClass( 'active' ), jQuery( this ).find( '.dropdown-menu' ).slideUp( 300 );} ), jQuery( '.dropdown_kickstart .dropdown-menu li' ).click( function() {
		jQuery( this ).parents( '.dropdown_kickstart' ).find( 'span' ).text( jQuery( this ).text() );
		var e = jQuery( this ).attr( 'url' ), t = jQuery( this ).attr( 'child_number' );
		null == t ? ( setTimeout( function() {jQuery( document ).find( '.solution_result' ).fadeIn( 1500 );}, 500 ), jQuery( document ).find( '.solution_result a' ).attr( 'href', e ) ) : ( jQuery( document ).find( '.trying_solve_content.step_2' ).fadeOut( 800 ), jQuery( document ).find( '.solution_result' ).fadeOut( 800 ), setTimeout( function() {jQuery( document ).find( '.child_options_content[child_number="' + t + '"]' ).fadeIn( 800 );}, 800 ) );
	} ), jQuery( document ).on( 'click', '.adventure_first_cta', function() {jQuery( document ).find( '.section1' ).fadeOut( 800 ), setTimeout( function() {jQuery( document ).find( '.section2' ).fadeIn( 800 ), jQuery( document ).find( '.question_number_1' ).fadeIn( 800 ), jQuery( '.progress_bar' ).fadeIn( 1500 );}, 900 ), setTimeout( function() {jQuery( '.progress_bar li' ).css( 'width', '15%' );}, 1700 );} ), jQuery( document ).on( 'click', '.option_result', function() {jQuery( this ).addClass( 'selected_value' );} ), jQuery( document ).on( 'click', '.go_back_link a', function() {
		var t = jQuery( '.qusn-ans-palette' ).find( '.selected_value:last' ).parents( '.qusn-ans-wrap' ).attr( 'question_number' );
		if ( t ) {
			var n = 15 * t;
			jQuery( document ).find( '.qusn-ans-wrap' ).fadeOut( 800 ), setTimeout( function() {
				jQuery( document ).find( '.question_number_' + t ).fadeIn( 800 ), jQuery( document ).find( '.question_number_' + t ).find( 'a' ).removeClass( 'selected_value' );
				var e = jQuery.trim( jQuery( document ).find( '.question_number_' + t ).find( 'h4' ).html() );
				e = e.replace( /&nbsp;/g, '' ).replace( /\<br\s*[\/]?>/gi, '' ).replace( '\n', ' ' ), jQuery( '.progress_bar li' ).css( 'width', n + '%' );
			}, 900 );
		}
	} ), jQuery( document ).on( 'click', '.route_to_que', function() {
		var e = jQuery( this ).attr( 'outcome' ), t = 15 * e;
		jQuery( document ).find( '.qusn-ans-wrap' ).fadeOut( 800 ), setTimeout( function() {jQuery( document ).find( '.question_number_' + e ).fadeIn( 800 ), jQuery( '.progress_bar li' ).css( 'width', t + '%' );}, 900 );
	} ), jQuery( document ).on( 'click', '#gform_submit_button_1', function() {
		var t = [];
		jQuery( document ).find( '#gform_1 #gform_fields_1 input[type=hidden]' ).each( function() {
			t.push( {
				ans: jQuery( this ).val(),
				que: jQuery( this ).attr( 'id' )
			} );
		} );
		var n = 0, r = setInterval( function() {
			jQuery.each( t, function( e, t ) {jQuery( '#gform_1' ).find( 'input[id=\'' + t.que + '\']' ).val( t.ans );} );
			var e = jQuery( '.outcome_wrapper:visible' );
			confimation_message = jQuery( e ).find( '.outcome_confirmation' ).html(), 5 == ++ n && window.clearInterval( r );
		}, 1e3 );
	} ), jQuery( '.route_to_outcome' ).fancybox( {
		beforeShow: function() {
			if ( jQuery( '.progress_bar li' ).css( 'width', '100%' ), 0 < jQuery( document ).find( '.outcome_form_display' ).length ) {
				var e = jQuery( this )[ 0 ].src, t = jQuery( '.outcome_form_display' ).html();
				jQuery( '.outcome_form_display' ).html( '' ), jQuery( e ).find( '.outcome_form' ).html( t );
			}
		}, afterShow: function() {
			var r = [], o = jQuery( this )[ 0 ].src;
			setTimeout( function() {
				jQuery( document ).find( 'a.selected_value' ).each( function() {
					var e = jQuery( this ).html(),
						t = jQuery.trim( jQuery( this ).parents( '.qusn-ans-wrap' ).find( 'h4' ).html() );
					t = t.replace( /&nbsp;/g, '' ).replace( /\<br\s*[\/]?>/gi, '' ).replace( '\n', ' ' ).replace( /\r?\n|\r/, ' ' ), r.push( {
						ans: e,
						que: t
					} );
				} );
				var e = jQuery( '.outcome_wrapper:visible .outcome_text span' ).html();
				e     = e.replace( /&nbsp;/g, '' ).replace( /\<br\s*[\/]?>/gi, '' ).replace( '\n', ' ' );
				var t = jQuery( '#input_1_13' ).val();
				r.push( {
					ans: e,
					que: t
				} ), jQuery.each( r, function( e, t ) {jQuery( '#gform_1' ).find( 'input[value=\'' + t.que + '\']' ).addClass( 'selected_value' ), jQuery( '#gform_1' ).find( 'input[value=\'' + t.que + '\']' ).val( t.ans );} );
				var n = [];
				jQuery( document ).find( '#gform_1 #gform_fields_1 input[type=hidden]' ).each( function() {jQuery( this ).hasClass( 'selected_value' ) || jQuery( this ).val( '' ), n.push( jQuery( this ).val() );} ), confimation_message = jQuery( o ).find( '.outcome_confirmation' ).html();
			}, 100 );
		}, afterClose: function() {
			var e = location.href.split( '#' )[ 0 ];
			if ( window.history.pushState( 'object', document.title, e ), 0 < jQuery( document ).find( '.outcome_form_display' ).length ) {
				var t = jQuery( this )[ 0 ].src, n = jQuery( t ).find( '.outcome_form' ).html();
				jQuery( t ).find( '.outcome_form' ).html( '' ), jQuery( document ).find( '.outcome_form_display' ).html( n );
			}
			if ( jQuery.each( i, function( e, t ) {jQuery( '#gform_1' ).find( 'input[id=\'' + t.id + '\']' ).val( t.def_value ), jQuery( '#gform_1' ).find( 'input[id=\'' + t.id + '\']' ).removeClass( 'selected_value' );} ), 0 < jQuery( document ).find( '#gform_confirmation_wrapper_1' ).length ) location.reload(); else {
				var r = jQuery( '.qusn-ans-wrap:visible' ).attr( 'question_number' );
				jQuery( document ).find( '.question_number_' + r ).find( 'a' ).removeClass( 'selected_value' );
				var o = 15 * r;
				jQuery( '.progress_bar li' ).css( 'width', o + '%' );
			}
		}
	} ), jQuery( document ).on( 'gform_confirmation_loaded', function( e, t ) {1 == t && jQuery( document ).find( '#gform_confirmation_message_1' ).html( confimation_message );} );
} ), jQuery( window ).scroll( function() {10 < jQuery( window ).scrollTop() ? jQuery( '.trying_solve-sec' ).addClass( 'show' ) : jQuery( '.trying_solve-sec' ).removeClass( 'show' );} ), jQuery( window ).resize( function() {equalheight( '.kickstart-section .cont-post_all .info-cont .text-cont' ), equalheight( '.kickstart-section .cont-post_all .info-cont .title-cont h4' ), equalheight( '.filter-button-group a' );} ), jQuery( window ).load( function() {equalheight( '.kickstart-section .cont-post_all .info-cont .text-cont' ), equalheight( '.kickstart-section .cont-post_all .info-cont .title-cont h4' ), equalheight( '.filter-button-group a' );} ), equalheight = function( e ) {
	var t, n = 0, r = 0, o = new Array;
	jQuery( e ).each( function() {
		if ( t = jQuery( this ), jQuery( t ).height( 'auto' ), topPostion = t.position().top, r != topPostion ) {
			for ( currentDiv = 0; currentDiv < o.length; currentDiv ++ ) o[ currentDiv ].height( n );
			o.length = 0, r = topPostion, n = t.height(), o.push( t );
		} else o.push( t ), n = n < t.height() ? t.height() : n;
		for ( currentDiv = 0; currentDiv < o.length; currentDiv ++ ) o[ currentDiv ].height( n );
	} ), jQuery( '.grid' ).isotope( 'layout' );
};
