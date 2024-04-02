jQuery(document).ready(function($){
// ------------------------------- //

  console.log('init main.js');

  $('.slick-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 750,
    slidesToShow: 1,
    adaptiveHeight: true
  });

  let state = "close";

  $('.hamburger-wrapper').on('click', function() {
    $('.hamburger-menu').toggleClass('animate');

    if (state === "close") {
      $('.mobile-menu-wrapper').css("transform", "translate(0, 0)");
      state = "open";
    } else {
      $('.mobile-menu-wrapper').css("transform", "translate(-100%, 0)");
      state = "close";
    }
  })

// ------------------------------- //
});
