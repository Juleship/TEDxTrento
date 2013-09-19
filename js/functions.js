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

	