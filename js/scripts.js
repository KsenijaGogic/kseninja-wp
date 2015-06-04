$(function() {

			$(document).on("scroll", function(){
				var $height = $(window).height();
				console.log($(this).scrollTop())
				if( $(this).scrollTop() >= $height ) {
					$('.sidebar').addClass('sidebarShrink');
					$('.content').addClass('contentFull')
					// if sidebar has class of srhink, do nothing
					// else, do all the things
				} else if( $(this).scrollTop() <= $height ){
					$('.sidebarShrink').removeClass('sidebarShrink');
					$('.contentFull').removeClass('contentFull');
				}
			});
			
		})