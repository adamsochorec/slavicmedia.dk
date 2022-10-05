// HAMBURGER MENU
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const blurMain = document.querySelector("main");
const blurFooter = document.querySelector("footer");
const blurAside = document.querySelector("aside");
const hideBar = document.querySelector(".progress-bar");
const noscroll = document.querySelector("body");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
  blurMain.classList.toggle("blur");
  blurFooter.classList.toggle("blur");
  blurAside.classList.toggle("blur");
  hideBar.classList.toggle("hide");
  noscroll.classList.toggle("noscroll");
}
const navLink = document.querySelectorAll(".nav-item");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
  blurMain.classList.remove("blur");
  blurFooter.classList.remove("blur");
  blurAside.classList.remove("blur");
  hideBar.classList.remove("hide");
  noscroll.classList.remove("noscroll");
}

// SCROLL STATUS
window.onscroll = function () {
  myFunction();
};
function myFunction() {
  const winScroll =
    document.body.scrollTop || document.documentElement.scrollTop;
  const height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  const scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}