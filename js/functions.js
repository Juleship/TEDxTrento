	/*
	*	BOOTSTRAP PANEL FUNCTIONS 
	*/
	$('#about-tab a').click(function (e) {
		  	e.preventDefault();
		  	$(this).tab('show');
		  	var id = $(this).attr('href');
		  	id.text( id.text().replace('#', '') );
		  	console.log(id);
		});
	$('#about-tab a').hover(function(e){
		e.preventDefault();
		$(this).click();
	});
	
	
	
	var footerH = $('#foot').height();
	var headerH = $('#head').height();
	var minWrapperH = $(window).height() - footerH - headerH;
	
	$('#wrap').css({'min-height' : minWrapperH + 'px'});	
	
	