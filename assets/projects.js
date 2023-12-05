import PhotoSwipeLightbox from "https://unpkg.com/photoswipe/dist/photoswipe-lightbox.esm.js";

const lightbox = new PhotoSwipeLightbox({
  gallery: "#photo-gallery",
  children: "a",
  pswpModule: () => import("https://unpkg.com/photoswipe"),
});

lightbox.init();
