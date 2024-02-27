$(document).ready(function () {
  $(".gallery").magnificPopup({
    delegate: "a", // Adjusted to target your specific link class
    type: "iframe", // Type is iframe for videos
    gallery: {
      enabled: true,
      navigateByImgClick: false,
      preload: [0, 1],
      arrowMarkup:
        '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
      tPrev: "Previous",
      tNext: "Next",
    },
    titleSrc: function (item) {
      // Fetching custom attributes for videos
      const year = item.el.attr("year");
      // Directly using the 'client' attribute's HTML content
      const client = item.el.attr("client");
      // Constructing the title string with HTML content for 'client'
      let title =
        "<p><small>" + year + "&nbsp;|&nbsp;" + client + "</small></p>";
      return title;
    },
    src: function (item) {
      // Directly return the href attribute value for iframe src
      return item.el.attr("href");
    },
  });
});

$(document).ready(function () {
  $(".popup-gallery").magnificPopup({
    delegate: "a", // Targeting the <img> elements directly
    type: "image",
    tLoading: '<div class="loading-container"><div class="loader"></div></div>',
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Preload 0 - before current, and 1 after the current image
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
    },
    image: {
      tError:
        '<div class="error-container"><i class="fa-solid fa-xl fa-triangle-exclamation"></i><br><br>Error</div>',
      titleSrc: function (item) {
        // Fetching custom attributes
        const year = item.el.attr("year");
        const client = item.el.attr("client");
        // Constructing the title string without the 'title' attribute
        let title =
          "<p><small>" + year + "&nbsp;|&nbsp;" + client + "</small></p>";
        return title;
      },
      // Getting the URL of the image for the popup
      src: function (item) {
        return item.el.attr("src");
      },
    },

    callbacks: {
      elementParse: function (item) {
        // Function to handle each image source
        item.src = item.el.attr("src");
      },
    },
  });
});
