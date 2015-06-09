$(function() {
	$('a').smoothScroll();
	
	$(document).on("scroll", function(){
		var $height = $(window).height();
		console.log($(this).scrollTop())
		// if you're past the first div
		if( $(this).scrollTop() >= $height ) {
			$('.sidebar').addClass('sidebarShrink').removeClass('sidebarFull');
			$('.content').addClass('contentFull');
			// if sidebar has class of srhink, do nothing
			// else, do all the things
		// if you're
		} else if( $(this).scrollTop() <= $height ){
			$('.sidebar').addClass('sidebarFull').removeClass('sidebarShrink');
			$('.contentFull').removeClass('contentFull');

		}
	});
	
});