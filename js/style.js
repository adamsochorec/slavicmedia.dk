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



// 2FA numbers

// 1.
(function () {
	let tfaCode = ["483 130","583 059","574 028","190 459","869 248","294 905","103 059" ],
	i = -1;
	setInterval(function(){ $('.tfaCode').fadeOut(function(){
	  $(this).html(tfaCode[(i = (i + 1) % tfaCode.length)]).fadeIn();
	  }); }, 1000)
	})();
	//2.
	(function () {
	let tfaCodee = ["483 130","583 059","574 028","190 459","869 248","294 905","103 059" ],
	i = -1;
	setInterval(function(){ $('.tfaCodee').fadeOut(function(){
	  $(this).html(tfaCodee[(i = (i + 1) % tfaCodee.length)]).fadeIn();
	  }); }, 1500)
	})();
	// 3.
	(function () {
	let tfaCodeee = ["483 130","583 059","574 028","190 459","869 248","294 905","103 059" ],
	i = -1;
	setInterval(function(){ $('.tfaCodeee').fadeOut(function(){
	  $(this).html(tfaCodeee[(i = (i + 1) % tfaCodeee.length)]).fadeIn();
	  }); }, 1000)
	})();
	// 4.
	(function () {
	let tfaCodeeee = ["483 130","583 059","574 028","190 459","869 248","294 905","103 059" ],
	i = -1;
	setInterval(function(){ $('.tfaCodeeee').fadeOut(function(){
	  $(this).html(tfaCodeeee[(i = (i + 1) % tfaCodeeee.length)]).fadeIn();
	  }); }, 1500)
	})();
	






