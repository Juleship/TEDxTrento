/*
*	BOOTSTRAP PANEL FUNCTIONS 
*/
$('#about-tab a').click(function (e) {
	  	e.preventDefault();
	  	$(this).tab('show');
	  	var id = $(this).attr('href');
	  	id = id.replace('#', '');
	  	var big_id = 'big-' + id;
	  	if(big_id == 'big-ted'){
		  	$('.big-tedx').css({'color' : 'white'});
		  	$('.big-tedxtrento').css({'color' : 'white'});
	  	}
	  	else if(big_id == 'big-tedx'){
	  		$('.big-tedx').css({'color' : 'red'});
		  	$('.big-tedxtrento').css({'color' : 'white'});
	  	}
	  	else if(big_id == 'big-tedxtrento'){
	  		$('.big-tedx').css({'color' : 'red'});
		  	$('.big-tedxtrento').css({'color' : 'black'});
	  	}
	});
$('#about-tab a').hover(function(e){
	e.preventDefault();
	$(this).click();
});

/* countdown */

$(function(){
	
	var note = $('#note'),
		ts = new Date(2013, 10, 23),
		TedxTN = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		TedxTN = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			$('.knob-day').data('value', days);
			
			var message = "";
			
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " ";
			
			if(TedxTN){
				message += "left until TedxTrento!";
			}
			else {
				message += "!";
			}
		}
	});
	
});