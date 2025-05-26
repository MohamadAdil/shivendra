// insight-slider
jQuery(document).ready(function ($) {
  $('.insight-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    dots: true,
    vertical: true,
    speed: 500,
    autoplay: true,
    draggable: true,
    swipe: true,
    touchMove: true,
    arrows: false,
  });
});
// service-slider
jQuery(document).ready(function ($) {
  $('.service-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    dots: true,
    speed: 500,
    autoplay: true,
    draggable: true,
    swipe: true,
    touchMove: true,
    arrows: false,
  });
});
// testimonial-slider
jQuery(document).ready(function ($) {
  $('.testimonial-slider').slick({
    infinite: true,
    slidesToShow: 3, // Initial number of slides
    slidesToScroll: 1,
    dots: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 2000,
    draggable: true,
    swipe: true,
    touchMove: true,
    arrows: false,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024, // Tablet breakpoint
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768, // Mobile breakpoint
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});
// News
jQuery(document).ready(function ($) {
  $('.news-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    speed: 500,
    autoplaySpeed: 2000,
    autoplay: true,
    draggable: true,
    swipe: true,
    touchMove: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024, // Tablet breakpoint
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768, // Mobile breakpoint
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});
// 
jQuery(document).ready(function ($) {
  $('.event-webinar-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    speed: 500,
    autoplay: true,
    draggable: true,
    autoplaySpeed: 2000,
    swipe: true,
    touchMove: true,
    arrows: false,
    adaptiveHeight: true,
  });
});