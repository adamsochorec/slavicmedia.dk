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
const reviewsSwiper = new Swiper(".reviews-swiper", {
  loop: true,
  speed: 600,
  spaceBetween: 10,
  autoplay: {
    delay: 3000,
  },
  preloadImages: false,
  lazyLoading: true,
  observer: true,
  observeParents: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    375: {
      slidesPerView: 2,
    },
    620: {
      slidesPerView: 3,
    },
    947: {
      slidesPerView: 4,
    },
  },
  // Optional parameters
  direction: "horizontal",
  loop: true,
});
// HOMEPAGE START
// CHANGE HEADER RGBA AT SCROLL END
if (document.body.id === "homepage") {
  // CHANGE HEADER RGBA AT SCROLL START
  document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
      const header = document.querySelector("#homepage header");
      blurValue = getComputedStyle(document.documentElement)
        .getPropertyValue("--blur-2")
        .trim();

      if (window.pageYOffset > 680) {
        header.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
        header.style.backdropFilter = blurValue;
        header.style.webkitBackdropFilter = blurValue;
        header.style.MozBackdropFilter = blurValue; // Unsupported
        header.style.MsBackdropFilter = blurValue; // Unsupported
        header.style.OBackdropFilter = blurValue; // Unsupported
      } else {
        header.style.backgroundColor = "rgba(0, 0, 0, 0)";
        header.style.backdropFilter = "blur(0px)";
        header.style.webkitBackdropFilter = "blur(0px)";
        header.style.MozBackdropFilter = "blur(0px)"; // Unsupported
        header.style.MsBackdropFilter = "blur(0px)"; // Unsupported
        header.style.OBackdropFilter = "blur(0px)"; // Unsupported
      }
    });
  });
  // VIDEO CONTROLS START
  const video = document.getElementById("heroVideo"),
    pauseControl = document.getElementById("pauseControl"),
    playControl = document.getElementById("playControl"),
    playPauseButton = document.getElementById("playPauseButton");

  playPauseButton.addEventListener("click", function () {
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
  });
  // VIDEO CONTROLS END
  // VIDEO OFFLOAD START
  function videoOffloadFunction() {
    // Get all video elements with the "lazy-video" class
    const videoOffload = document.querySelectorAll(".video-offload");

    // Function to handle the Intersection Observer for a single video
    function handleVideoIntersection(video) {
      // Define the options for the Intersection Observer
      const options = {
        root: null, // Use the viewport as the root
        rootMargin: "0px", // No margin
        threshold: 0.1, // 10% of the target element must be visible to trigger
      };

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
      const observer = new IntersectionObserver(callback, options);

      // Start observing the current video element
      observer.observe(video);
    }

    // Iterate over all lazy video elements and apply the Intersection Observer
    videoOffload.forEach((video) => {
      video.setAttribute("autoplay", "false"); // Disable autoplay initially

      // Apply Intersection Observer to the current video
      handleVideoIntersection(video);
    });
  }
}
// VIDEO OFFLOAD END
// START RATING START
// Get all elements with the "stars" class
var starContainers = document.querySelectorAll(".stars");

// Iterate through each element and display stars based on the data-rating attribute
starContainers.forEach(function (starContainer) {
  var rating = parseInt(starContainer.getAttribute("data-rating"), 10);
  showStars(starContainer, rating);
});

// Function to display stars based on the rating value
function showStars(container, rating) {
  container.innerHTML = ""; // Clear any existing content

  // Create stars based on the rating
  for (var i = 1; i <= 5; i++) {
    var star = document.createElement("span");
    star.className = "stars";

    // Fill the star if it's within the rating
    if (i <= rating) {
      star.innerHTML = "★"; // Use a star symbol
    } else {
      star.innerHTML = "☆"; // Use an empty star symbol
    }

    // Append the star to the container
    container.appendChild(star);
  }
}
// START RATING END
// HOMEPAGE END

// SWIPER SERVICES START
if (document.body.id === "services") {
  const swiper = new Swiper(".swiper", {
    loop: true,
    speed: 600,
    autoplay: {
      delay: 15000,
    },
    direction: "horizontal",
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    on: {
      slideChange: function () {
        // Pause videos in the previous slide
        const previousSlide = this.slides[this.previousIndex];
        pauseVideosInSlide(previousSlide);
      },
    },
  });
}
// Function to pause all videos in a given slide
function pauseVideosInSlide(slide) {
  const videos = slide.querySelectorAll("video");
  videos.forEach((video) => {
    if (!video.paused) {
      video.pause();
    }
  });
}

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
