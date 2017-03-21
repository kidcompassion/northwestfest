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
                $('.actionBtn').css('margin-top','-15px').css('background-color','#8d3894').css('border','none').css('transition','opacity .15s ease-in-out;');
                
			}else{ 
				$('header').removeClass('header_fixed');
				$('.primary').removeClass('primary_fixed');
				$('.navbar-default .navbar-nav>li>a').css('color', '#8d3894');
                $('#actionText').css('display', '');
                $('.actionBtn').css('margin-top','').css('color','white').css('background-color','#FFB41F').css('boder','1px solid #FFB41F');
			}
			
		});
	

	});


	//open ticket window
	var film;
	$('#all-tickets').on('change', function(){
		film = $(this).val();
		
var url;

switch(film) {
    case 'cabaret':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'time':
        url = "http://www.ticketfly.com/event/1164987";
        break;
    case 'passion':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'river':
        url = "http://www.ticketfly.com/event/1168723";
        break;
    case 'holiday':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'epic':
        url = "http://www.ticketfly.com/event/1168363";
        break;
    case 'love':
        url = "http://www.ticketfly.com/event/1168871"
        break;
    case 'prank':
        url = "http://www.ticketfly.com/event/1168913";
        break;
     case 'blair':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'slenderman':
        url = "http://www.ticketfly.com/event/1168349";
        break;
    case 'bugs':
        url = "http://www.ticketfly.com/event/1168387";
        break;
    case 'malcolm':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'danny':
        url = "http://www.ticketfly.com/event/1168947"
        break;
    case 'change':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'distant':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'blink':
        url = "http://www.ticketfly.com/event/1168407";
        break;
     case 'elder':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'fallen':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'frame':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'wondercat':
        url = "http://www.ticketfly.com/event/1165289";
        break;
     case 'forward':
        url = "http://www.ticketfly.com/event/1168699";
        break;
    case 'android':
        url = "http://www.ticketfly.com/event/1168341";
        break;
    case 'gayby':
        url = "http://www.ticketfly.com/event/1088197";
        break;
    case 'henny':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'freex':
        url = "http://www.ticketfly.com/event/1168931";
        break;
    case 'hell':
        url = "http://www.ticketfly.com/event/1168883";
        break;
    case 'sparrow':
        url = "http://www.ticketfly.com/event/1168337";
        break;
    case 'now':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'hunt':
        url = "http://www.ticketfly.com/event/1168897";
        break;
    case 'blues':
        url = "http://www.ticketfly.com/event/1166827-i-am-blues-edmonton/";
        break;
    case 'play':
        url = "http://www.ticketfly.com/event/1168411";
        break;
    case 'landfill':
        url = "http://www.ticketfly.com/event/1168131";
        break;
    case 'exotique':
        url = "http://www.ticketfly.com/event/1165305";
        break;
    case 'animated':
        url = "http://www.ticketfly.com/event/1168361";
        break;
    case 'behold':
        url = "http://www.ticketfly.com/event/1166821-lo-behold-edmonton/";
        break;
    case 'road':
        url = "http://www.ticketfly.com/event/1088197";
        break;
    case 'migrant':
        url = "http://www.ticketfly.com/event/1168891";
        break;
    case 'sharon':
        url = "http://www.ticketfly.com/event/1158973-miss-sharon-jones-edmonton/";
        break;
    case 'nice':
        url = "http://www.ticketfly.com/event/1168715";
        break;
    case 'stone':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'stranger':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'omnia':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'pervert':
        url = "http://www.ticketfly.com/event/1168415";
        break;
    case 'racing':
        url = "http://www.ticketfly.com/event/1168323";
        break;
    case 'raiders':
        url = "http://www.ticketfly.com/event/1168307";
        break;
    case 'rodeo':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'santa':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'sonita':
        url = "http://www.ticketfly.com/event/1168359";
        break;
     case 'earth':
        url = "http://www.ticketfly.com/event/1088197";
        break;
    case 'step':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'street':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'sugar':
        url = "http://www.ticketfly.com/event/1168783";
        break;
     case 'suited':
        url = "http://www.ticketfly.com/event/1168351";
        break;
    case 'art':
        url = "http://www.ticketfly.com/event/1168913";
        break;
    case 'kids':
        url = "http://www.ticketfly.com/event/1168389";
        break;
    case 'caravan':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'works':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'dwarvenaut':
        url = "http://www.ticketfly.com/event/1166835";
        break;
    case 'festival':
        url = "http://www.ticketfly.com/event/1168399"
        break;
    case 'fight':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'mariner':
        url = "http://www.ticketfly.com/event/1168399"
        break;
    case 'network':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'pass':
        url = "http://www.ticketfly.com/event/1162041";
        break;
    case 'smalls':
        url  = "http://www.ticketfly.com/event/1162041";
        break;
    case 'tickled':
        url = "http://www.ticketfly.com/event/1168123";
        break;
    case 'man':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    case 'tony':
        url = "http://www.ticketfly.com/event/1168373";
        break;
    case 'adnan':
        url ="http://www.ticketfly.com/event/1162041";
        break;
     case 'men':
        url ="http://www.ticketfly.com/event/1162041";
        break;
    case 'mina':
        url ="http://www.ticketfly.com/event/1162041";
        break;
    case 'syrian':
        url ="http://www.ticketfly.com/event/1162041";
        break;
    case 'cage':
        url = "http://www.ticketfly.com/event/1168343";
        break;
    case 'visiting':
        url = "http://www.ticketfly.com/event/1168399";
        break;
    default:
        alert('error');
        console.log('error');
        break;
}

window.open(url);



	});


	//traile popup
	$('#show-trailer').click(function(){
		
		$('#myModal').modal('show');
	});



})(jQuery);