// TOGGLE HAMBURGER & COLLAPSE NAV
const hamburger = document.querySelector(".hamburger");
const menuLeft = document.querySelector(".menu-left");
hamburger.addEventListener("click", function () {
  this.classList.toggle("open");
  menuLeft.classList.toggle("collapse");
});

// REMOVE X & COLLAPSE NAV ON ON CLICK
const menuLeftLinks = document.querySelectorAll(".menu-left a");
menuLeftLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    hamburger.classList.remove("open");
    menuLeft.classList.remove("collapse");
  });
});

// SHOW/HIDE NAV
let didScroll;
let lastScrollTop = 0;
const delta = 5;
const navbarHeight = document.querySelector("header").offsetHeight;

window.addEventListener("scroll", function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  const st = window.pageYOffset || document.documentElement.scrollTop;

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    document.querySelector("header").classList.remove("show-nav");
    document.querySelector("header").classList.add("hide-nav");
    hamburger.classList.remove("open");
    menuLeft.classList.remove("collapse");
  } else {
    // Scroll Up
    if (st + window.innerHeight < document.documentElement.scrollHeight) {
      document.querySelector("header").classList.remove("hide-nav");
      document.querySelector("header").classList.add("show-nav");
    }
  }

  lastScrollTop = st;
}

// CONTENT REVEAL START
function reveal() {
  const reveals = document.querySelectorAll(".reveal");
  for (let i = 0; i < reveals.length; i++) {
    const windowheight = window.innerHeight;
    const revealtop = reveals[i].getBoundingClientRect().top;
    const revealpoint = 0;
    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
// CONTENT REVEAL END

// SKILL BARS START
const skillBars = document.querySelectorAll(".skill-bar");
function showProgress() {
  skillBars.forEach((e) => {
    const t = e.dataset.progress;
    e.style.opacity = 1;
    e.style.width = `${t}%`;
  });
}
// SKILL BARS END
showProgress();

/// LOADER AT SUBMITING A FORM START
showProgress();
const contactForm = document.querySelector("form");
function onFormSubmission(e) {
  const t = Array.from(e.target.elements).every((e) => e.reportValidity()),
    o = document.querySelector(".submit-btn");
  t ? (o.innerHTML = "<div class='loader'></div>") : e.preventDefault();
}
contactForm.addEventListener("submit", onFormSubmission);
// LOADER AT SUBMITING A FORM END

// CHANGE HEADER RGBA AT SCROLL START
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (window.pageYOffset > 740) {
    header.style.backgroundColor = "rgba(0, 0, 0, 1)";
    /* set your desired background color here */
  } else {
    header.style.backgroundColor = "rgba(0, 0, 0, 0)";
    /* set your desired background color here */
  }
});
// CHANGE HEADER RGBA AT SCROLL END