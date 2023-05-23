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
    const st = window.pageYOffset || document.documentElement.scrollTop;
    const header = document.querySelector("header");
    const navbarHeight = header.offsetHeight;
    const windowHeight = window.innerHeight;
    const delta = 5;

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
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  const blur = document.querySelector(".blur");
  if (window.pageYOffset > 740) {
    header.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
    blur.style.backdropFilter = "blur(30px)";
    /* set your desired background color here */
  } else {
    header.style.backgroundColor = "rgba(0, 0, 0, 0)";
    blur.style.backdropFilter = "blur(0px)";
    /* set your desired background color here */
  }
});
// CHANGE HEADER RGBA AT SCROLL END

// HOMEPAGE START
if (document.body.id === "homepage") {
  (function contactForm() {
    const contactForm = document.querySelector("form"),
      skillBars = document.querySelectorAll(".skill-bar");

    function setProgress(e, progress) {
      e.style.opacity = 1;
      e.style.width = `${progress}%`;
    }
    // SKILL BARS START
    function showProgress() {
      skillBars.forEach((bar) => {
        const progress = bar.dataset.progress;
        setProgress(bar, progress);
      });
    }
    showProgress();
    // SKILL BARS END

    /// LOADER AT SUBMITING A FORM START
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
    // LOADER AT SUBMITING A FORM END
  })();
}

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

// CONTENT REVEAL START
function reveal() {
  const reveals = document.querySelectorAll(".reveal"),
    windowHeight = window.innerHeight;

  reveals.forEach((reveal) => {
    const revealtop = reveal.getBoundingClientRect().top;
    const revealpoint = 0;
    if (revealtop < windowHeight - revealpoint) {
      reveal.classList.add("active");
    }
  });
}
window.addEventListener("scroll", reveal);
reveal();
// CONTENT REVEAL END
