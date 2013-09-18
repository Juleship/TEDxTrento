	var footerH = $('#foot').height();
	var headerH = $('#head').height();
	var minWrapperH = $(window).height() - footerH - headerH;
	
	$('#wrap').css({'min-height' : minWrapperH + 'px'});	