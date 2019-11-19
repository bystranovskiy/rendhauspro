"use strict";

(function ($) {

    $(document).ready(function () {

        if ($('.partners-list')) {
            const $item = $('.list-item-wrapper');
            $(window).on("load resize", () => {
                let maxHeight = 0;

                $item.each(function () {
                    $item.removeAttr('style');
                    if ($(this).height() > maxHeight) {
                        maxHeight = $(this).height();
                    }
                });

                $item.height(maxHeight);
            });
        }

    });

})(jQuery);