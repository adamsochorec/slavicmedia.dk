function switchLanguage(langCode) {
  // Change langswitch.php to the path which is actually responsible for that
  fetch(`/config.php?lang=${langCode}`, {
    credentials: "same-origin",
  })
    .then(() => {
      window.location.reload();
    })
    .catch((error) => {
      console.log("There was an error while switching languages");
    });
}
// LOADER ANIMATION START
(function introLoader() {
  window.addEventListener("load", () => {
    // When the window is fully loaded, hide the loader
    const loader = document.querySelector(".loader-container");
    loader.style.display = "none";
  });
})();
// LOADER ANIMATION END
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
// COOKIES START
// ---- ---- Const ---- ---- //
const cookiesBox = document.querySelector(".wrapper"),
  buttons = document.querySelectorAll(".button");
// ---- ---- Show ---- ---- //
const executeCodes = () => {
  if (document.cookie.includes("SlavicMedia")) {
    // If the cookie is already set, no need to show the cookie consent box
    loadGoogleAnalytics();
    return;
  }
  cookiesBox.classList.add("show");
  // ---- ---- Button ---- ---- //
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookiesBox.classList.remove("show");

      // ---- ---- Time ---- ---- //
      if (button.id == "acceptBtn") {
        document.cookie = "cookieBy= SlavicMedia; max-age=" + 60 * 60 * 24 * 30;
        loadGoogleAnalytics();
      }
    });
  });
};
const loadGoogleAnalytics = () => {
  // ---- ---- Google Analytics Code ---- ---- //
  const script = document.createElement("script");
  script.async = true;
  script.src = "https://www.googletagmanager.com/gtag/js?id=G-KGTECW9SN8";
  script.role = "script";

  script.onload = function () {
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-KGTECW9SN8");
  };

  document.head.appendChild(script);
};

window.addEventListener("load", executeCodes);
// COOKIES END
