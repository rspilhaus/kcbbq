// -----------------------------------------------------------------
//! Scrolling Styles for header
// -----------------------------------------------------------------

var	headerOffset = $("header").offset().top;

$(window).load(function(){
	var scroll = $(window).scrollTop();
		if (scroll >= headerOffset) {
		$("body").addClass("has-sticky");
	} else {
		$("body").removeClass("has-sticky");
	}
});

$(window).scroll(function() {
	var scroll = $(window).scrollTop();
		if (scroll >= headerOffset) {
		$("body").addClass("has-sticky");
	} else {
		$("body").removeClass("has-sticky");
	}
});


