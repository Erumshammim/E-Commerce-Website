(function ($) { 
'use strict';


/* Browse Category Menu  Toggle */ 
$(".browse-category-wrap").click(function () {
   $(".categorylist").toggleClass('sm-cat-menu-active');
});

//for slider

$('.store-mart-lite-banner').owlCarousel({
    dots:true,
    items:1
   
});

/**
* Back to top button
*/
$('.sml-scrollup').hide();
var offset = 250;
var duration = 1000;
$(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
        $('.sml-scrollup').fadeIn(duration);
    } else {
        $('.sml-scrollup').fadeOut(duration);
    }
});

$('body').on('click', '.sml-scrollup', function () {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
})

//Header Search toggle
$('body').on('click','.sml-search-icon-wrap .sml-search-icon',function(){
$('.sml-search-icon-wrap .search-form-wrap').toggleClass('search-active');

});
//search close
$('body').on('click','.sml-search-icon-wrap .btn-hide', function(){
$('.sml-search-icon-wrap .search-form-wrap').removeClass('search-active');

});

//for client slider

$('.store-mart-lite-logo-wrapper').owlCarousel({
    nav:true,
    items:5

});

//product slider
$('.smlwbs-wrap > .sml-products').each(function () {
    var $smwbs = $(this);
    $smwbs.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      dots: true,
      responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]

    });
});


} )( jQuery );


