(function ($) {
	"use strict"; // Start of use strict  

	// Smooth scrolling using jQuery easing
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});

// When the user scrolls down, show dot navigation
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
        document.getElementById("cd-vertical-nav").style.display = "block";
    } else {
        document.getElementById("cd-vertical-nav").style.display = "none";
    }
}

		})(jQuery); // End of use strict