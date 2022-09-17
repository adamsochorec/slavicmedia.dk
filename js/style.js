// HAMBURGER MENU
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const blurMain = document.querySelector("main");
const blurFooter = document.querySelector("footer");
const blurAside = document.querySelector("aside");
const hideBar = document.querySelector(".progress-bar");

hamburger.addEventListener("click", mobileMenu);
// DISABLE SCROLLING
function noscroll() {
  window.scrollTo(0, 0);
}
function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
  blurMain.classList.toggle("blur");
  blurFooter.classList.toggle("blur");
  blurAside.classList.toggle("blur");
  hideBar.classList.toggle("hide");
  window.addEventListener("scroll", noscroll); // DISABLE SCROLLING
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
  blurMain.classList.remove("blur");
  blurFooter.classList.remove("blur");
  blurAside.classList.remove("blur");
  hideBar.classList.remove("hide");
}
// DISABLE SCROLLING

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

// RANDOM PASSWORD GENERATOR
function getPassword() {
  let chars =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----";
  const passwordLength = 19;
  let password = "";

  for (let i = 0; i < passwordLength; i++) {
    let randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.substring(randomNumber, randomNumber + 1);
  }
  document.getElementById("password").value = password;
}
let btn = document.getElementById("btn");
btn.addEventListener("click", getPassword);

// COPY TO CLIPPBOARD
const password = document.getElementById("password");
const btnCopy = document.getElementById("btnCopy");

btnCopy.onclick = function () {
  // 1. Select the text
  password.select();

  // 2. Copying the text
  document.execCommand("Copy");
};
