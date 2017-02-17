// -----------------------------------------------------------------
//! Hamburger Menu
// -----------------------------------------------------------------

$(document).ready(function() {
	$(".hamburger__container").on("click", function(e) {
		$(this).find(".hamburger").toggleClass("is-active");
		$("body").toggleClass("has-nav");
	});
});