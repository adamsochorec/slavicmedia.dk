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

// ABOUT SKILL BAR
const skillSection = document.getElementById('skills-section')

const skillBars = document.querySelectorAll('.skill-bar')

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress
    skillBars.style.opacity = 1
    skillBars.style.width = `${value}%`
  })
}
/*
function hideProgress() {
  skillBars.forEach((p) => {
    p.style.opacity = 0;
    p.style.width = 0;
  });
}
*/
window.addEventListener('scroll', () => {
  const sectionPos = skillSection.getBoundingClientRect().top
  const screenPos = window.innerHeight / 2

  if (sectionPos > screenPos) {
    showProgress()
  } else {
    console.log('Idk')
  }
})
