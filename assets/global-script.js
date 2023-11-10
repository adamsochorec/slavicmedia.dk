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

  function createLottieInteractivity(playerId) {
    LottieInteractivity.create({
      player: playerId,
      mode: "scroll",
      actions: [
        {
          visibility: [0.1, 1.0],
          type: "play",
        },
      ],
    });
  }
  createLottieInteractivity("#photoLottie");
  createLottieInteractivity("#videoLottie");
  createLottieInteractivity("#graphicdesignLottie");
});

// CHANGE HEADER RGBA AT SCROLL END
if (document.body.id === "homepage") {
  // SKILL BARS START
  function setProgress(e, progress) {
    e.style.opacity = 1;
    e.style.width = `${progress}%`;
  }
  function showProgress() {
    const skillBars = document.querySelectorAll(".skill-bar");

    skillBars.forEach((bar) => {
      const progress = bar.dataset.progress;
      setProgress(bar, progress);
    });
  }
  showProgress();
  // SKILL BARS END
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
  function videoOffload() {
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

// HOMEPAGE END
// CONTACT FORM START
(function contactForm() {
  const contactForm = document.getElementById("contactForm");

  /// LOADER AT SUBMITING A FORM START
  function onFormSubmission(event) {
    const isValid = Array.from(event.target.elements).every((element) =>
        element.reportValidity()
      ),
      submitButton = document.querySelector(".submit-btn");

    if (isValid) {
      submitButton.innerHTML = "<div class='loader'></div>";
    } else {
      event.preventDefault();
    }
  }
  contactForm.addEventListener("submit", onFormSubmission);
  // LOADER AT SUBMITING A FORM END

  // SUBMIT AT ENTER START
  document.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
      onFormSubmission(event);
    }
  });
  // SUBMIT AT ENTER END
})();
// CONTACT FORM END
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
