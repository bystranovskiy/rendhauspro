"use strict";

(function ($) {

  $(document).ready(function () {

    $(".animate-header").each(function () {
      const elem = $(this);
      const line = elem.html().split("");

      elem.empty();

      $.each(line, function (i, lin) {
        let characters = lin.split("");

        let line = [];
        $.each(characters, function (i, char) {
          characters = `<span>${char}</span>`;
          line.push(characters);
        });

        elem.append(line);

      });

    });

  });

})(jQuery);