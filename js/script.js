$(document).ready(function(){
    $(".nav__link").hover(function(){
      $(this).parent().find(".sub__nav").slideDown();
    })

    $(".sub__nav").mouseleave(function(){
      $(this).slideUp();
    })

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
        margin: 5,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        loop: true,
        navSpeed: 1500,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive: {
            600: { 
                items: 2,
                  dots: true,
            },
            1200: { 
                items: 3,
                  dots: true,
            },
        },
        
      });

      // 2nd slider testimonial
    var $owl = $('.section__testimonial .owl-carousel');

    $owl.children().each( function( index ) {
      $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
    });

    $owl.owlCarousel({
      // center: true,
      loop: true,
      items: 3,
      autoplay: true,
      autoplayTimeout: 6000,
      autoplayHoverPause: true,
        dots:false,
      // autoplayHoverPause: true,
        nav: false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        },

    }
    });

    $(document).on('click', '.owl-item>div', function() {
      // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
      var $speed = 300;  // in ms
      $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
    });

    $('.event__block').hover(function(){
      $('.community__front > .gallery__block').toggleClass('gallery__block-body');
    });

    // faq toggle
    $('.faq__header').click(function(){
      $('.faq__ans').slideUp(300);
      $('.fa-angle-down').css('transform', 'rotate(0deg)');
      $(this).parent().find('.faq__ans').slideToggle(300);
      $(this).parent().find('.fa-angle-down').css('transform', 'rotate(180deg)');
    });

})