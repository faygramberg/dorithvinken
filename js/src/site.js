
;(function($){
    // your code
$(document).ready(function(){

	// Scroll to top button
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});

	// Isotope filter system
		// initialize Isotope after all images have loaded
var $container = $('#portfolio-items').imagesLoaded( function() {
  $container.isotope({
	  itemSelector: '.item',
	  layoutMode: 'masonry'
  });
});

// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
}); 

});

})(jQuery);