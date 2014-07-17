
/*===================================================================================*/
/*	HEADER SHRINK
/*===================================================================================*/

$(document).ready(function() {
	
	var s = skrollr;
	var sActive = false;
	
	if ($(window).width() > 977) {
		s.init();
		sActive = true;
	}
	
	$(window).on('resize', function() {
		if ($(window).width() < 977 && sActive) {
			s.init().destroy();
			sActive = false;
		}
		else if ($(window).width() > 977) {
			s.init();
			sActive = true;
		}
	});
	
});


/*===================================================================================*/
/*	STICKY NAVIGATION
/*===================================================================================*/

$(document).ready(function() {
	$('.navbar .navbar-collapse').waypoint('sticky');
});


/*===================================================================================*/
/*	DROPDOWN ON HOVER (NAVIGATION)
/*===================================================================================*/

$(document).ready(function () {
	
	$('.js-activated').dropdownHover({
		instantlyCloseOthers: false,
		delay: 0
	}).dropdown();
	
});