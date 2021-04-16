$(document).ready(function(){
    $('.home_banner').owlCarousel({
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
        // responsive: {
            // 600: { 
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                //   dots: true,
            // },
        // },
        
      });


      $('.service__slider').owlCarousel({
        items: 1,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 6000,
        loop: true,
        navSpeed: 1500,
        navText:["<div class='d-none nav-btn prev-slide'></div>","<div class='nav-btn next-slide'><span class='link__icon'>&#8594;</span></div>"],
        responsive: {
            600: { 
                items: 3,
                  dots: true,
            },
        },
        
      });


})