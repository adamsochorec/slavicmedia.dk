// HAMBURGER MENU
const hamburger = document.querySelector('.hamburger'),
  navMenu = document.querySelector('.nav-menu'),
  blurAll = document.querySelector('.blur'),
  scrollStop = document.querySelector('body')

hamburger.addEventListener('click', mobileMenu)

function mobileMenu() {
  hamburger.classList.toggle('active')
  navMenu.classList.toggle('active')
  blurAll.classList.toggle('active')
  scrollStop.classList.toggle('active')
}
const navLink = document.querySelectorAll('.nav-link')

navLink.forEach((n) => n.addEventListener('click', closeMenu))

function closeMenu() {
  hamburger.classList.remove('active')
  navMenu.classList.remove('active')
  blurAll.classList.remove('active')
  scrollStop.classList.remove('active')
}
// REVERAL CONTENT
window.addEventListener('scroll', reveal)

function reveal() {
  const reveals = document.querySelectorAll('.reveal')

  for (var i = 0; i < reveals.length; i++) {
    const windowheight = window.innerHeight
    const revealtop = reveals[i].getBoundingClientRect().top
    const revealpoint = 20

    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add('active')
    } else {
      reveals[i].classList.remove('active')
    }
  }
}
// ABOUT SKILL BAR
const skillBars = document.querySelectorAll('.skill-bar')

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress
    skillBars.style.opacity = 1
    skillBars.style.width = `${value}%`
  })
}
showProgress()

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
