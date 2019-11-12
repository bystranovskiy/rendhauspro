"use strict";

(function ($) {

  $(document).ready(function () {

    const heroSlider = $(".hero-slider");

    heroSlider.on("init", function (event, slick) {
      $(slick.$slides[0]).addClass("animate");
    });
    heroSlider.on("beforeChange", function (event, slick, currentSlide) {
      $(slick.$slides[currentSlide]).removeClass("animate");
    });
    heroSlider.on("afterChange", function (event, slick, currentSlide) {
      $(slick.$slides[currentSlide]).delay(500).addClass("animate");
    });


    heroSlider.slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 8000,
      speed: 800,
      fade: true,
      cssEase: "linear",
      pauseOnHover: false,
      pauseOnFocus: false
    });

  });

})(jQuery);