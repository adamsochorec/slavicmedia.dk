// Executes when the document is ready
$(document).ready(function () {
  // Initializes Magnific Popup for iframe-based galleries
  $(".gallery").magnificPopup({
    delegate: "a", // Targets specific link class for delegation
    type: "iframe", // Sets the type to iframe for displaying videos
    gallery: {
      enabled: true,
      navigateByImgClick: false,
      preload: [0, 1], // Preloads adjacent items
      arrowMarkup:
        '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
      tPrev: "Previous",
      tNext: "Next",
    },
    zoom: {
      enabled: true,
      duration: 300, // Duration of the zoom animation
    },
    src: function (item) {
      // Directly returns the href attribute value for iframe src
      return item.el.attr("href");
    },
  });

  // Initializes Magnific Popup for image-based galleries
  $(".popup-gallery").magnificPopup({
    delegate: "a", // Targets <a> elements directly
    type: "image",
    tLoading: '<div class="loading-container"><div class="loader"></div></div>', // Loading spinner HTML
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      fixedContentPos: "false",
      preload: [0, 1], // Preloads adjacent images
    },
    zoom: {
      enabled: true,
      duration: 300, // Duration of the zoom animation
    },
    image: {
      tError:
        '<div class="error-container"><i class="fa-solid fa-xl fa-triangle-exclamation"></i><br><br>Error</div>', // Error message HTML

      title: true,
      src: function (item) {
        // Gets the URL of the image for the popup
        return item.el.attr("src");
      },
    },
    callbacks: {
      elementParse: function (item) {
        // Function to handle each image source
        item.src = item.el.attr("src");
      },
    },
    fixedContentPos: "false",
    overflowY: "scroll",
  });
});
// GRID GAP
const gridGap2 = getComputedStyle(document.documentElement).getPropertyValue(
  "--grid-gap-2"
);
const gridGap3 = getComputedStyle(document.documentElement).getPropertyValue(
  "--grid-gap-3"
);

// Initialize Swiper for the reviews section
const reelsSwiper = new Swiper(".swiper-reels", {
  loop: true,
  speed: 600,
  spaceBetween: gridGap2,
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true,
  },
  preloadImages: false,
  lazyLoading: true,
  observer: true,
  observeParents: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    250: {
      slidesPerView: 1.5,
    },
    300: {
      slidesPerView: 2.25,
    },
    350: {
      slidesPerView: 2.75,
    },
    400: {
      slidesPerView: 3,
    },
    450: {
      slidesPerView: 3.5,
    },
    550: {
      slidesPerView: 4,
    },
    667: {
      slidesPerView: 3,
    },
    750: {
      slidesPerView: 3.5,
    },
    850: {
      slidesPerView: 4,
    },
  },
  // Optional parameters
  direction: "horizontal",
  loop: true,
});
