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
const navLink = document.querySelectorAll(".nav-link");

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
// SKELETON LOADING ANIMATION
fetch("https://jsonplaceholder.typicode.com/posts")
  .then((res) => res.json())
  .then((posts) => {
    grid.innerHTML = "";
    posts.forEach((post) => {
      const div = cardTemplate.content.cloneNode(true);
      div.querySelector("[data-title]").textContent = post.title;
      div.querySelector("[data-body]").textContent = post.body;
      grid.append(div);
    });
  });

// CURRENT YEAR
let thisYear = today.getFullYear();
document.getElementById("currentYear").innerPHP = thisYear;

// INTRO WORDS
let words = ["photo", "web design", "3D"],
  currentStep = 0,
  textEl = document.querySelector(".change-text"),
  oldWord = "";
setTimeout(changeWord, 1000);

function changeWord() {
  oldWord = textEl.innerHTML;
  // check if there is a word atm or not
  if (oldWord.length < 1) {
    if (currentStep !== words.length - 1) {
      currentStep++;
    } else {
      currentStep = 0;
    }
    addNextWord();
  } else {
    setTimeout(deleteWord, 800);
  }
}

function deleteWord() {
  let WordLength = oldWord.length,
    currentWord = textEl.innerHTML,
    currentLength = currentWord.length;
  // The word is deleted so, start adding in the new one
  if (currentLength < 1) {
    changeWord();
    return;
  }
  // Remove a charachter
  textEl.innerHTML = currentWord.substring(0, currentLength - 1);

  setTimeout(deleteWord, 200);
}

function addNextWord() {
  let currentWord = textEl.innerHTML,
    currentLength = currentWord.length,
    nextWord = words[currentStep],
    nextWordLength = nextWord.length;

  if (currentLength === nextWordLength) {
    changeWord();
    return;
  }
  // add a charachter
  textEl.innerHTML = nextWord.substring(0, currentLength + 1);

  setTimeout(addNextWord, 200);
}
