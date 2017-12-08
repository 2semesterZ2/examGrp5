(function($) {
  "use strict"; // Start of use strict  

// Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
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

  //#dot navigation appears after scrolling
  var fixed = false;
  $(document).scroll(function() {
    if ($(this).scrollTop() > 250) {
      if (!fixed) {
        fixed = true;
        $('#cd-vertical-nav').show("normal", function() {
          $('#cd-vertical-nav').css({
            position: 'fixed',
            display: 'block'
          });
        });
      }
		// and disappers when on top
    } else {
      if (fixed) {
        fixed = false;
        $('#cd-vertical-nav').hide("normal", function() {
          $('#cd-vertical-nav').css({
            display: 'none'
          });
        });
      }
    }
  });
	
})(jQuery); // End of use strict

$(document).ready( function () {
//This is for the dot navigation
    var contentSections = $('.cd-section');
    var navigationItems = $('#cd-vertical-nav a');

    function updateNavigation() {
        contentSections.each(function(){
        $this = $(this);
        var activeSection = $('#cd-vertical-nav a[href="#'+$this.attr('id')+'"]').data('number') - 1;
        if ( ( $this.offset().top - $(window).height()/4 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/4 > $(window).scrollTop() ) ) {
          navigationItems.eq(activeSection).addClass('is-selected');
            console.log($this);
        }else {
          navigationItems.eq(activeSection).removeClass('is-selected');
        }
        });
    }

//this is to set the selected section on load
    updateNavigation();
//this changes the selected dot as one scrolls 
    $(window).scroll(updateNavigation);
});