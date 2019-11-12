"use strict";


(function ($) {

  $(document).ready(function () {


    /* Мобильное меню */
    $(".menu-toggle").on("click", (e) => {
      const $this = $(e.currentTarget);
      $this.toggleClass("active");
      $("#menu-mainmenu").toggleClass("active");
      $("html").toggleClass("fixed");
    });


    let prevScrollpos = window.pageYOffset;
    const header = $('header');

    window.onscroll = () => {
      const currentScrollPos = window.pageYOffset;
      if (currentScrollPos > 80) {
        header.addClass('fixed_header');

        if (prevScrollpos > currentScrollPos) {
          header.removeClass('nav-up');
        } else {
          header.addClass('nav-up');
        }
        prevScrollpos = currentScrollPos;

      } else {
        header.removeClass('fixed_header nav-up');
      }
    }

  });


})(jQuery);