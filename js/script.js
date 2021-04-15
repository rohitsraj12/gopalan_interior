$(document).ready(function(){
    var carousel = $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 6000,
        loop: true,
        navSpeed: 1500,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsive: {
            600: { 
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                //   dots: true,
            },
        },
        
      });
})