"use strict";

(function ($) {

    $(document).ready(function () {

        const $grid = $('.isotope-list');

        $grid.isotope({
            itemSelector: '.list-item',
            layoutMode: 'fitRows'
        });

        $(window).on('load hashchange',function () {
            if (window.location.hash) {
                const filter = window.location.hash.split('#')[1];
                const currFilterItem = $(`.filter-item a[href='#${filter}']`);
                currFilterItem.click();
            }
        });


        $('.isotope-filter').on("click", ".filter-item a", (e) => {
            const termsFilter = $(e.delegateTarget);
            const currFilterItem = $(e.currentTarget);
            const filter = currFilterItem.attr('href').split('#')[1];
            const $filterItems = termsFilter.find(".filter-item a");

            if (!currFilterItem.hasClass("active")) {
                $filterItems.removeClass('active');
                currFilterItem.addClass('active');
                filterGrid(filter);
            } else {
                e.preventDefault();
            }
        });

        const filterGrid = (filter) => {
            $grid.isotope({filter: `${filter === 'all' ? '*' : '.' + filter}`});
        };


        $(".wpcf7-form").on("click", ".button", (e) => {
            e.preventDefault();
            $(e.delegateTarget).submit();
        });

        $(".button").each((index, element) => {
            //const $this = element;
            $(element).wrapInner("<span><span>");
            $(element).prepend("<i>");
        });
        //$(".bttn").wrapInner("<span><span>");
        //$(".bttn").prepend("<i>");

    });

})(jQuery);