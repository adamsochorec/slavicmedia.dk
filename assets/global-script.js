const hamburger = document.querySelector(".hamburger");
const menuLeft = document.querySelector(".menu-left");
const header = document.querySelector("header");
const menuLeftLinks = document.querySelectorAll(".menu-left a");
const skillBars = document.querySelectorAll(".skill-bar");

function toggleMenu() {
  hamburger.classList.toggle("open");
  menuLeft.classList.toggle("collapse");
}

function closeMenu() {
  hamburger.classList.remove("open");
  menuLeft.classList.remove("collapse");
}

function reveal() {
  const reveals = document.querySelectorAll(".reveal");
  const windowHeight = window.innerHeight;
  const revealPoint = 0;
  reveals.forEach((element) => {
    const revealTop = element.getBoundingClientRect().top;
    if (revealTop < windowHeight - revealPoint) {
      element.classList.add("active");
    } else {
      element.classList.remove("active");
    }
  });
}

function showProgress() {
  skillBars.forEach((element) => {
    const progress = element.dataset.progress;
    element.style.opacity = 1;
    element.style.width = `${progress}%`;
  });
}

function onFormSubmission(event) {
  const isValid = Array.from(event.target.elements).every((element) =>
    element.reportValidity()
  );
  const submitBtn = document.querySelector(".submit-btn");
  if (isValid) {
    submitBtn.innerHTML = "<div class='loader'></div>";
  } else {
    event.preventDefault();
  }
}

hamburger.addEventListener("click", toggleMenu);

menuLeftLinks.forEach((link) => {
  link.addEventListener("click", closeMenu);
});

window.addEventListener("scroll", () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const navbarHeight = header.offsetHeight;
  const delta = 5;
  const hasScrolled = Math.abs(scrollTop - lastScrollTop) > delta;
  const isPastNavbar = scrollTop > navbarHeight;
  if (hasScrolled && isPastNavbar) {
    header.classList.remove("show-nav");
    header.classList.add("hide-nav");
    closeMenu();
  } else if (
    scrollTop + window.innerHeight <
    document.documentElement.scrollHeight
  ) {
    header.classList.remove("hide-nav");
    header.classList.add("show-nav");
  }
  lastScrollTop = scrollTop;
});
window.addEventListener("scroll", reveal);
showProgress();
// CACHE ELEMENTS
const contactForm = document.querySelector("form");
const submitBtn = document.querySelector(".submit-btn");

// LOADER AT SUBMITING A FORM START
function onFormSubmission(e) {
  const isValid = Array.from(e.target.elements).every((e) =>
    e.reportValidity()
  );
  isValid
    ? (submitBtn.innerHTML = "<div class='loader'></div>")
    : e.preventDefault();
}

contactForm.addEventListener("submit", onFormSubmission);
// LOADER AT SUBMITING A FORM END

// CHANGE HEADER RGBA AT SCROLL START
function changeHeaderBackground() {
  const backgroundColor =
    window.pageYOffset > 740 ? "rgba(0, 0, 0, 1)" : "rgba(0, 0, 0, 0)";
  header.style.backgroundColor = backgroundColor;
}

window.addEventListener("scroll", changeHeaderBackground);
// CHANGE HEADER RGBA AT SCROLL END
