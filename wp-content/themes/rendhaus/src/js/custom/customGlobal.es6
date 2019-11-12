"use strict";


(function ($) {

  //Запрет правого клика мыши
  if ($("body").attr("admin") == "false") {
    $("#gallery, #slider").on("contextmenu", function (e) {
      return false;
    });
  }


  $(document).ready(function () {

    /* Прелоадер */
    Pace.on("done", function () {
      $(".preloader").find(".pace").delay(100).fadeOut(400).parent().delay(400).fadeOut(1000);
      //$(".main-page-wrap").fadeIn(1000);
    });




  });


  /* Затухание при переходе в мобильный размер */
  let isWinLarge = $(window).width() > 768;

  $(window).on("resize", () => {
    const winWidth = $(window).width();
    const isCurrWinLarge = winWidth > 768;

    if (isWinLarge !== isCurrWinLarge) {
      isWinLarge = isCurrWinLarge;
      $(".preloader").show().delay(600).fadeOut(500);
    }

  });


})(jQuery);