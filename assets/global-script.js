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

// CHANGE HEADER RGBA AT SCROLL START
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header"),
      blur = document.querySelector(".blur"),
      blurValue = getComputedStyle(document.documentElement)
        .getPropertyValue("--blur-2")
        .trim();

    if (window.pageYOffset > 740) {
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

// CHANGE HEADER RGBA AT SCROLL END

// HOMEPAGE START
if (document.body.id === "homepage") {
  // YOUTUBE PLAYER API START
  /*
  var player;

  function onYouTubeIframeAPIReady() {
    player = new YT.Player("player", {
      videoId: "Muvkn0OGDbw",
      playerVars: {
        autoplay: 1,
        modestbranding: 1,
        loop: 1,
        controls: 0,
        playlist: "Muvkn0OGDbw",
      },
    });
  }
  */
  // YOUTUBE PLAYER API START

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

  (function contactForm() {
    const contactForm = document.querySelector("form");

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
}
// HOMEPAGE END
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
