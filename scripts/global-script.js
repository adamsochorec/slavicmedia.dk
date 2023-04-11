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
document.querySelectorAll(".carousel").forEach((carousel) => {
  const items = carousel.querySelectorAll(".carousel__item");
  const buttonsHtml = Array.from(items, () => {
    return `<span class="carousel__button"></span>`;
  });
  carousel.insertAdjacentHTML(
    "beforeend",
    `<div class="carousel__nav">${buttonsHtml.join("")}</div>`
  );
  const buttons = carousel.querySelectorAll(".carousel__button");
  buttons.forEach((button, i) => {
    button.addEventListener("click", () => {
      items.forEach((item) =>
        item.classList.remove("carousel__item--selected")
      );
      buttons.forEach((button) =>
        button.classList.remove("carousel__button--selected")
      );
      items[i].classList.add("carousel__item--selected");
      button.classList.add("carousel__button--selected");
    });
  });
  items[0].classList.add("carousel__item--selected");
  buttons[0].classList.add("carousel__button--selected");
});
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
const skillBars = document.querySelectorAll(".skill-bar");
function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress;
    skillBars.style.opacity = 1;
    skillBars.style.width = `${value}%`;
  });
}
showProgress();
const contactForm = document.querySelector("form");
function onFormSubmission(event) {
  const fields = Array.from(event.target.elements);
  const allValid = fields.every((field) => field.reportValidity());
  const submit_btn = document.querySelector(".submit-btn");
  if (!allValid) {
    event.preventDefault();
    return;
  }
  submit_btn.innerHTML = "<div class='loader'></div>";
}
contactForm.addEventListener("submit", onFormSubmission);
