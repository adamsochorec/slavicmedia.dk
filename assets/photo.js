// Executes when the document is ready
$(document).ready(function () {
  // Initializes Magnific Popup for image-based galleries
  $(".popup-gallery").magnificPopup({
    delegate: "a", // Targets <a> elements directly
    type: "image",
    tLoading: '<div class="loading-container"><div class="loader"></div></div>', // Loading spinner HTML
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
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
  });
});
