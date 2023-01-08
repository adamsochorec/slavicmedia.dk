// HAMBURGER MENU
const hamburger = document.querySelector(".hamburger"),
  navMenu = document.querySelector(".nav-menu"),
  blurAll = document.querySelector(".blur"),
  scrollStop = document.querySelector("body");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
  blurAll.classList.toggle("active");
  scrollStop.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
  blurAll.classList.remove("active");
  scrollStop.classList.remove("active");
}

// IMAGE LIGHTBOX
/*
const hoveredArea = document.querySelector("img");
const blurArea = document.querySelector(".master-blur");

hoveredArea.addEventListener("mouseover", lightbox);

function lightbox() {
  blurArea.classList.toggle("hovered");
}

hoveredArea.addEventListener("mouseout", noLightbox);

function noLightbox() {
  blurArea.classList.remove("hovered");
}
*/
// REVERAL CONTENT
window.addEventListener("scroll", reveal);

function reveal() {
  const reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
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

// ABOUT SKILL BAR
const skillBars = document.querySelectorAll(".skill-bar");

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress;
    skillBars.style.opacity = 1;
    skillBars.style.width = `${value}%`;
  });
}
showProgress();
// ABOUT CONTACT FORM LOADER
const contactForm = document.querySelector("form");

// define the event handler function
function onFormSubmission(event) {
  const fields = Array.from(event.target.elements);
  const allValid = fields.every((field) => field.reportValidity());
  const submit_btn = document.querySelector(".submit-btn");

  if (!allValid) {
    event.preventDefault(); // stop form submission
    return;
  }
  submit_btn.innerHTML = "<div class='loader'></div>";
}
// add an event listener that fires on submission
contactForm.addEventListener("submit", onFormSubmission);
