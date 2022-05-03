// HAMBURGER MENU
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


// RANDOM PASSWORD GENERATOR
function getPassword(){
	let chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----" 
	const passwordLength = 19;
	let password = "";
  
	for(let i=0; i<passwordLength; i++){
	  let randomNumber = Math.floor(Math.random()* chars.length);
	  password += chars.substring(randomNumber, randomNumber+1);
	}
	document.getElementById("password").value = password
  }
  let btn = document.getElementById("btn");
  btn.addEventListener("click", getPassword);
  
  // COPY TO CLIPPBOARD
  const password = document.getElementById("password");
  const btnCopy = document.getElementById("btnCopy");
  
	  btnCopy.onclick = function (){
	  // 1. Select the text
	  password.select();
  
	  // 2. Copying the text
	  document.execCommand("Copy");
  };



	






