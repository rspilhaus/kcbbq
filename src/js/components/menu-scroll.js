// -----------------------------------------------------------------
//! Scrolling Styles for header
// -----------------------------------------------------------------

var header = $("header"),
	headerOffset = $("header").offset().top;

$(window).resize(function () {
   var header = $("header"),
   	   headerOffset = $("header").offset().top;
});
	  
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


