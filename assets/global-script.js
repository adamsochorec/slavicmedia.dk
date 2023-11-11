// RECAPTCHA START
function onSubmit(token) {
  document.getElementById("contactForm").submit();
}
// RECAPTCHA END
// VIMEO GALLERY START
$(document).ready(function () {
  $(".video-gallery").magnificPopup({
    delegate: "a",
    type: "iframe",
    gallery: {
      enabled: true,
    },
  });
});
// VIMEO GALLERY END
// SWIPER START
if (document.body.id === "servicees") {
  const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}
// SWIPER END
// LOADER ANIMATION START
(function introLoader() {
  window.addEventListener("load", () => {
    // When the window is fully loaded, hide the loader
    const loader = document.querySelector(".loader-container");
    loader.style.display = "none";
  });
})();
// LOADER ANIMATION END

(function header() {
  let lastScrollTop = 0;

  // TOGGLE HAMBURGER & COLLAPSE NAV START
  const hamburger = document.querySelector(".hamburger");
  const menuLeft = document.querySelector(".menu-left");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    menuLeft.classList.toggle("collapse");
  });

  // REMOVE X & COLLAPSE NAV ON ON CLICK
  const menuLeftLinks = document.querySelectorAll(".menu-left a");
  menuLeftLinks.forEach((link) => {
    link.addEventListener("click", () => {
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    });
  });

  let ticking = false;
  window.addEventListener("scroll", () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        hasScrolled();
        ticking = false;
      });
      ticking = true;
    }
  });
  function hasScrolled() {
    const st = window.pageYOffset || document.documentElement.scrollTop,
      header = document.querySelector("header"),
      navbarHeight = header.offsetHeight,
      windowHeight = window.innerHeight,
      delta = 5;

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      header.classList.remove("show-nav");
      header.classList.add("hide-nav");
      hamburger.classList.remove("open");
      menuLeft.classList.remove("collapse");
    } else if (st + windowHeight < document.documentElement.scrollHeight) {
      header.classList.remove("hide-nav");
      header.classList.add("show-nav");
    }

    lastScrollTop = st;
  }
})();
// CONTENT REVEAL START
function reveal() {
  const reveals = document.querySelectorAll(".reveal"),
    windowHeight = window.innerHeight;

  reveals.forEach((reveal) => {
    const revealtop = reveal.getBoundingClientRect().top,
      revealpoint = 0;
    if (revealtop < windowHeight - revealpoint) {
      reveal.classList.add("active");
    }
  });
}
window.addEventListener("scroll", reveal);
reveal();
// CONTENT REVEAL END
// HOMEPAGE START

// CHANGE HEADER RGBA AT SCROLL END
if (document.body.id === "homepage") {
  // CHANGE HEADER RGBA AT SCROLL START
  document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
      const header = document.querySelector("#homepage header");
      (blur = document.querySelector(".blur")),
        (blurValue = getComputedStyle(document.documentElement)
          .getPropertyValue("--blur-2")
          .trim());

      if (window.pageYOffset > 680) {
        header.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
        blur.style.backdropFilter = blurValue;
        blur.style.webkitBackdropFilter = blurValue;
        blur.style.MozBackdropFilter = blurValue; // Unsupported
        blur.style.MsBackdropFilter = blurValue; // Unsupported
        blur.style.OBackdropFilter = blurValue; // Unsupported
      } else {
        header.style.backgroundColor = "rgba(0, 0, 0, 0)";
        blur.style.backdropFilter = "blur(0px)";
        blur.style.webkitBackdropFilter = "blur(0px)";
        blur.style.MozBackdropFilter = "blur(0px)"; // Unsupported
        blur.style.MsBackdropFilter = "blur(0px)"; // Unsupported
        blur.style.OBackdropFilter = "blur(0px)"; // Unsupported
      }
    });
  });
  // VIDEO CONTROLS START
  (function () {
    const video = document.getElementById("heroVideo"),
      pauseControl = document.getElementById("pauseControl"),
      playControl = document.getElementById("playControl"),
      playPauseButton = document.getElementById("playPauseButton");

    // Check if all required elements are found
    if (video && pauseControl && playControl && playPauseButton) {
      function togglePlayPause() {
        if (video.paused) {
          video.play();
          playPauseButton.classList.remove("play");
          playPauseButton.classList.add("pause");
          pauseControl.style.display = "unset";
          playControl.style.display = "none";
        } else {
          video.pause();
          playPauseButton.classList.remove("pause");
          playPauseButton.classList.add("play");
          pauseControl.style.display = "none";
          playControl.style.display = "unset";
          video.removeAttribute("controls");
        }
      }

      playPauseButton.addEventListener("click", togglePlayPause);
    } else {
      console.error("One or more elements not found.");
    }
  })();

  // VIDEO CONTROLS END
}
// HOMEPAGE END

// LOTTIE INTERACTIVITY START
function createLottieInteractivity(playerElement) {
  LottieInteractivity.create({
    player: playerElement,
    mode: "scroll",
    actions: [
      {
        visibility: [0.1, 1.0],
        type: "play",
      },
    ],
  });
}

// Get all lottie-player elements and apply interactivity
const lottiePlayers = document.querySelectorAll("lottie-player");

lottiePlayers.forEach((player) => {
  createLottieInteractivity(player);
});

// LOTTIE INTERACTIVITY END

// VIDEO OFFLOAD START
(function () {
  function videoOffload(selector = ".video-offload", options = {}) {
    // Get all video elements with the specified class
    const videos = document.querySelectorAll(selector);
    // Function to handle the Intersection Observer for a single video
    function handleVideoIntersection(video) {
      // Merge default options with user-defined options
      const observerOptions = Object.assign(
        {
          root: null, // Use the viewport as the root
          rootMargin: "0px", // No margin
          threshold: 0.1, // 10% of the target element must be visible to trigger
        },
        options
      );
      // Callback function when the video enters or exits the viewport
      const callback = (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // The video is in the viewport, so play it and show controls
            video.play();
            video.removeAttribute("controls");
          } else {
            // The video is out of the viewport, so pause it and hide controls
            video.pause();
          }
        });
      };
      // Create an Intersection Observer with the specified options and callback for the current video
      const observer = new IntersectionObserver(callback, observerOptions);
      // Start observing the current video element
      observer.observe(video);
    }
    // Iterate over all lazy video elements and apply the Intersection Observer
    videos.forEach((video) => {
      video.setAttribute("autoplay", "false"); // Disable autoplay initially

      // Apply Intersection Observer to the current video
      handleVideoIntersection(video);
    });
  }
  // Call the encapsulated function with default or custom parameters
  videoOffload();
})();
// VIDEO OFFLOAD END

// CONTACT FORM START
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contactForm");

  if (contactForm) {
    // LOADER AT SUBMITTING A FORM START
    function onFormSubmission(event) {
      const isValid = Array.from(event.target.elements).every((element) =>
        element.reportValidity()
      );

      const submitButton = document.querySelector(".submit-btn");

      if (isValid) {
        submitButton.innerHTML = "<div class='loader'></div>";
      } else {
        event.preventDefault();
      }
    }

    contactForm.addEventListener("submit", onFormSubmission);
    // LOADER AT SUBMITTING A FORM END
  }
});

// CONTACT FORM END
