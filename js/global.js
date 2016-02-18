// 4D 69 6C 6E  4C 74 64
// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Global Javascript Functions
// =================================================================

$(function() {


    $(document).on( "click", ".language-selected", function() {
      $('.dropdown').toggleClass('active');
      $(this).toggleClass('active');
  });

    $('nav').singlePageNav({
      offset: $('header').outerHeight()
    });

     $('body').singlePageNav({
      offset: $('header').outerHeight()
    });

    // Scroll baby yeah 

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
          $('.home-triangle').css({'opacity':(( 1000-scroll )/1000)});
    });

    $(window).scroll(function() {
    if ($(this).scrollTop() > 900) {
        $('.home-triangle').css({
            'display': 'none'
        });
    }
    else {
       $('.home-triangle').css({
            'display': 'block'
        });
    }
    });
 
});
