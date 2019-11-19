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
        const header = $("header");


        window.onscroll = () => {
            const currentScrollPos = window.pageYOffset;
            const $scrollButton = $('.scroll-button');

            if (currentScrollPos > 80) {
                header.addClass("fixed_header");

                if (prevScrollpos > currentScrollPos) {
                    header.removeClass("nav-up");
                } else {
                    header.addClass("nav-up");
                }
                prevScrollpos = currentScrollPos;

                $scrollButton.fadeIn('slow');

            } else {
                header.removeClass("fixed_header nav-up");
                $scrollButton.fadeOut('slow');
            }
        };

        $('.scroll-to-top').on("click", (e) => {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });

    });


})(jQuery);