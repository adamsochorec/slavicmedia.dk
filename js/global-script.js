// HAMBURGER MENU
const hamburger = document.querySelector('.hamburger')
const navMenu = document.querySelector('.nav-menu')
let blurMain = document.querySelector('main')
const blurFooter = document.querySelector('footer')
const blurAside = document.querySelector('aside')
const hideBar = document.querySelector('.progress-bar')
const noscroll = document.querySelector('body')

hamburger.addEventListener('click', mobileMenu)

function mobileMenu() {
  hamburger.classList.toggle('active')
  navMenu.classList.toggle('active')
  blurMain.classList.toggle('blur')
  blurFooter.classList.toggle('blur')
  blurAside.classList.toggle('blur')
  hideBar.classList.toggle('hide')
  noscroll.classList.toggle('noscroll')
}
const navLink = document.querySelectorAll('.nav-link')

navLink.forEach((n) => n.addEventListener('click', closeMenu))

function closeMenu() {
  hamburger.classList.remove('active')
  navMenu.classList.remove('active')
  blurMain.classList.remove('blur')
  blurFooter.classList.remove('blur')
  blurAside.classList.remove('blur')
  hideBar.classList.remove('hide')
  noscroll.classList.remove('noscroll')
}
// REVERAL CONTENT
window.addEventListener('scroll', reveal)

function reveal() {
  var reveals = document.querySelectorAll('.reveal')

  for (var i = 0; i < reveals.length; i++) {
    var windowheight = window.innerHeight
    var revealtop = reveals[i].getBoundingClientRect().top
    var revealpoint = 20

    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add('active')
    } else {
      reveals[i].classList.remove('active')
    }
  }
}
// TIMER
;(function () {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24
  let today = new Date(),
    dd = String(today.getDate()).padStart(2, '0'),
    mm = String(today.getMonth() + 1).padStart(2, '0'),
    yyyy = today.getFullYear(),
    nextYear = yyyy + 1,
    dayMonth = '01/07/',
    birthday = dayMonth + yyyy

  today = mm + '/' + dd + '/' + yyyy
  if (today > birthday) {
    birthday = dayMonth + nextYear
  }
  //end

  const countDown = new Date(birthday).getTime(),
    x = setInterval(function () {
      const now = new Date().getTime(),
        distance = countDown - now

      ;(document.getElementById('days').innerText = Math.floor(distance / day)),
        (document.getElementById('hours').innerText = Math.floor(
          (distance % day) / hour,
        )),
        (document.getElementById('minutes').innerText = Math.floor(
          (distance % hour) / minute,
        )),
        (document.getElementById('seconds').innerText = Math.floor(
          (distance % minute) / second,
        ))

      //do something later when date is reached
      if (distance < 0) {
        document.getElementById('headline').innerText = 'is right now'
        document.getElementById('countdown').style.display = 'none'
        document.getElementById('content').style.display = 'block'
        clearInterval(x)
      }
      //seconds
    }, 0)
})()
