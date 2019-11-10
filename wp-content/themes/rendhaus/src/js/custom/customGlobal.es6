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


    /* Инициализация плагина niceScroll */
    $(function () {
      //$("body").niceScroll();
    });


    /* Мобильное меню */
    $(".menu-toggle").on("click", (e) => {
      const $this = $(e.currentTarget);
      $this.toggleClass("active");
      $("#menu-mainmenu").toggleClass("active");
    });


  });


  /* Затухание при переходе в мобильный размер */
  let isWinLarge = $(window).width() > 768;

  $(window).on("resize", () => {
    const winWidth = $(window).width();
    const isCurrWinLarge = winWidth > 768;

    if (isWinLarge !== isCurrWinLarge) {
      isWinLarge = isCurrWinLarge;
      $("body").hide().delay(200).fadeIn(300);
    }

  });


})(jQuery);