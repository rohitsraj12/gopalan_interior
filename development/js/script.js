$(document).ready(function(){
    $(".nav__link").hover(function(){
      $(this).parent().find(".sub__nav").slideDown();
    })

    $(".sub__nav").mouseleave(function(){
      $(this).slideUp();
    })

    $(".hamburger").click(function(){
      $(".header__nav").slideToggle();
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

    // what do we offer
    
    $(".tab__detail").hide();
    $(".tab__detail:first-child").show();
    $(".tab__list").click(function(){
      var captureAttr = $(this).attr("data-tab");
      $(".tab__list").removeClass("active__tab");
      $(this).addClass("active__tab");

      $(".tab__detail").hide();
      $("#" + captureAttr).fadeIn(400);
    })


    $(".tab__detail-group").children("ul").hide();
    $(".tab__detail-group:first-child").children("ul").show();
    $('.tab__detail-group').click(function(){
      $('.tab__detail-group ul').slideUp(300);
      $('.fa-angle-down').css('transform', 'rotate(0deg)');
      $(this).children("ul").slideDown(300);
      $(this).find('.fa-angle-down').css('transform', 'rotate(180deg)');
    });



})