jQuery.noConflict();
(function( $ ) {

	$(document).ready(function(){
		var helloBarHeight = $('.hero').height() - 200;
		$(window).bind('scroll', function(){
			if ($(window).scrollTop() > helloBarHeight){
				$('header').addClass('header_fixed');
				$('.primary').addClass('primary_fixed');
				$('.navbar-default .navbar-nav>li>a').css('color', '#edb408');
				$('.primary').css('margin-top', '10px');
        $('#actionText').css('display', 'none');
				$('.callToAction').addClass('callToActionMove');
			}else{
				$('header').removeClass('header_fixed');
				$('.primary').removeClass('primary_fixed');
				$('.navbar-default .navbar-nav>li>a').css('color', '#8d3894');
        $('#actionText').css('display', '');
				$('.callToAction').removeClass('callToActionMove');

			}

		});


	});





	//traile popup
	$('#show-trailer').click(function(){

		$('#myModal').modal('show');
	});



})(jQuery);
