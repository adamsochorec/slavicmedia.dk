// LOADER ANIMATION START
(function introLoader() {
  // Hides the loader when the window is fully loaded
  window.addEventListener("load", () => {
    const loader = document.querySelector(".loader-container");
    loader.style.display = "none";
  });
})();
// LOADER ANIMATION END

// CONTENT REVEAL START
// Function to reveal elements as the user scrolls
function reveal() {
  const reveals = document.querySelectorAll(".reveal"),
    windowHeight = window.innerHeight;

  reveals.forEach((reveal) => {
    const revealtop = reveal.getBoundingClientRect().top,
      revealpoint = 0;
    // Adds "active" class to elements in view
    if (revealtop < windowHeight - revealpoint) {
      reveal.classList.add("active");
    }
  });
}
window.addEventListener("scroll", reveal);
reveal();
// CONTENT REVEAL END

// HEADER TOGGLE AND COLLAPSE NAV START
(function header() {
  let lastScrollTop = 0;

  const hamburger = document.querySelector(".hamburger");
  const menuLeft = document.querySelector(".menu-left");

  // Toggles hamburger icon and collapses navigation on click
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    menuLeft.classList.toggle("collapse");
  });

  // Removes "open" class from hamburger and collapses navigation on link click
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

  // Handles header visibility on scroll
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

// YEAR FUNCTION
// Sets the current year in the HTML element with id "current-year"
const currentYear = new Date().getFullYear();
document.getElementById("current-year").textContent = currentYear;
