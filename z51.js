/* Ryan Fung's HTML Template v5.1 JavaScript */
window.onload = function () {
	$('#navbar-title').text( $('#subtitle').text() );
	$('nav#nav > ul > li > a').after("<span class='toggle'><span class='toggle-arrow'></span></span>").parent().addClass('nav-ul-hide');
	var a = $('nav#nav a');
	for ( i = 0; i < a.length; i++ ) {
		if( a[i].text == $('#subtitle').text() ) {
			var href = $(a[i]).attr('href')
			  , as = $(a[i]).parent().find('a');
			$(a[i]).addClass('nav-this').removeAttr('href').parent().addClass('intra').removeClass('nav-ul-hide');
			for ( j = 1; j < as.length; j++ ) {
				$(as[j]).attr( 'href', $(as[j]).attr('href').replace(href,'') );
			}
		}
	}
	document.title = $('#subtitle').text() + ' | ' + $('#title').text();
	if( window.location.hash !== '' ) {
		window.setTimeout(
			function () {
				if ( $('#navbar').height() == 0 ) {
					$.scrollTo($(window.location.hash).offset().top - $('header').height() - 1*$('header').css('paddingTop').split('px')[0] + 'px', 500);
				} else {
					$.scrollTo($(window.location.hash).offset().top - $('#navbar').height() + 'px', 500);
				}
			},
			1000
		);
	}
	$('.toggle').click( function () {
		$(this.parentNode).toggleClass('nav-ul-hide');
	});
	$('#navbar-button').click( function () {
		$('body').toggleClass('nav-active');
	});
	$('nav#nav > ul > li a').click( function () {
		$('body').toggleClass('nav-active');
	});
	$('nav#nav .intra a').click( function () {
		if ( $('#navbar').height() == 0 ) {
			$.scrollTo($('#'+this.href.split('#')[1]).offset().top - $('header').height() - 1*$('header').css('paddingTop').split('px')[0] + 'px', 500);
		} else {
			$.scrollTo($('#'+this.href.split('#')[1]).offset().top - $('#navbar').height() + 'px', 500);
		}
	});
	$('#content-wrapper').click ( function () {
		if( $('body').hasClass('nav-active') ) {
			$('body').toggleClass('nav-active');
		}
	});
}
$(window).scroll( function () {
	if( $('body').scrollTop() > $('#header-wrapper').css('paddingTop').split('px')[0] ) { 
		$('body').addClass('obscured');
	} else {
		$('body').removeClass('obscured');
	}
});