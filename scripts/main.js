$(function($) {
	var $scroll_position;
	// var $header_height = $('.header').outerHeight();
	var $window = $(window);
	var $windowHeight = $(window).innerHeight();
	$window.scroll(function() {
		$scroll_position = $window.scrollTop();
		if ($scroll_position >= $windowHeight - 64) { // if body is scrolled down by 300 pixels
			$('.header.home').addClass('sticky');
			// $('body').css('padding-top' , $header_height);
		} else {
			// $('body').css('padding-top' , '0');
			$('.header.home').removeClass('sticky');
		}
	});
});
