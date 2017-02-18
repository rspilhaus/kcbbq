
// -----------------------------------------------------------------------------
// ! Smooth Scrolling
// -----------------------------------------------------------------------------
 
    // Click event for any anchor tag that's href and starts with #
    $("a.smooth-scroll").click(function(event) {

        // The id of the section we want to go to.
        var id = $(this).attr("href");

        // An offset to push the content down from the top.
        var offset = 0;

        // Our scroll target : the top position of the
        // section that has the id referenced by our href.
        var target = $(id).offset().top - offset;

        // The magic...smooth scrollin' goodness.
        $("html, body").animate({
	        scrollTop:target
	    }, 1100);

        //prevent the page from jumping down to our section.
        event.preventDefault();        
    });


// -----------------------------------------------------------------
//! Hamburger Menu
// -----------------------------------------------------------------

$(document).ready(function() {
	$(".hamburger__container").on("click", function(e) {
		$(this).find(".hamburger").toggleClass("is-active");
		$("body").toggleClass("has-nav");
	});
});
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



$(document).ready(function() {


});