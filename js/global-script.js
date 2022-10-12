// HAMBURGER MENU
const hamburger = document.querySelector('.hamburger')
const navMenu = document.querySelector('.nav-menu')
const blurMain = document.querySelector('main')
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
const navLink = document.querySelectorAll('.nav-item')

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

// SCROLL STATUS
window.onscroll = function () {
  myFunction()
}
function myFunction() {
  const winScroll =
    document.body.scrollTop || document.documentElement.scrollTop
  const height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight
  const scrolled = (winScroll / height) * 100
  document.getElementById('myBar').style.width = scrolled + '%'
}

// TABLE OF CONTENTS
/*
 * jQuery to build the POC quickly
 *
 * SCRIPT IS UNDER CONSTRUCTION
 */
var positions = [],
  build_toc = function () {
    var output = '<p>Table of content</p><ul>',
      svg =
        '<svg viewBox="0 0 36 36" height="36px" width="36px" y="0px" x="0px"><circle transform="rotate(-90 18 18)" stroke-dashoffset="100" stroke-dasharray="100 100" r="16" cy="18" cx="18" stroke-width="2" fill="none"/></svg>'

    $('.post-content')
      .find('h2')
      .each(function (i) {
        $(this).attr('id', 'title_' + i)

        output +=
          '<li><a href="#title_' +
          i +
          '" class="toc-title_' +
          i +
          '">' +
          svg +
          $(this).text() +
          '</a></li>'
      })

    return output
  },
  get_bottom_off_content = function () {
    var $content = $('.post-content'),
      offset = $content.offset()

    return $content.outerHeight() + offset.top
  },
  get_positions = function () {
    $('.post-content')
      .find('h2')
      .each(function (i) {
        offset = $(this).offset()
        positions['title_' + i] = offset.top
      })
    return positions
  },
  set_toc_reading = function () {
    var st = $(document).scrollTop(),
      count = 0

    for (var k in positions) {
      var n = parseInt(k.replace('title_', ''))
      ;(has_next = typeof positions['title_' + (n + 1)] !== 'undefined'),
        (not_next =
          has_next && st < positions['title_' + (n + 1)] ? true : false),
        (diff = 0),
        ($link = $('.toc-' + k))

      if (has_next) {
        diff =
          ((st - positions[k]) /
            (positions['title_' + (n + 1)] - positions[k])) *
          100
      } else {
        diff =
          ((st - positions[k]) / (get_bottom_off_content() - positions[k])) *
          100
      }

      $link.find('circle').attr('stroke-dashoffset', Math.round(100 - diff))

      if (st >= positions[k] && not_next && has_next) {
        $('.toc-' + k).addClass('toc-reading')
      } else if (st >= positions[k] && !not_next && has_next) {
        $('.toc-' + k).removeClass('toc-reading')
      } else if (st >= positions[k] && !not_next && !has_next) {
        $('.toc-' + k).addClass('toc-reading')
      }

      if (st >= positions[k]) {
        $('.toc-' + k).addClass('toc-already-read')
      } else {
        $('.toc-' + k).removeClass('toc-already-read')
      }

      if (st < positions[k]) {
        $('.toc-' + k).removeClass('toc-already-read toc-reading')
      }

      count++
    }
  }

// build our table of content
$('.table-of-contents').html(build_toc())

// first definition of positions
get_positions()

// on resize, re-calc positions
$(window).on('resize', function () {
  get_positions()
})

$(document).on('scroll', function () {
  set_toc_reading()
})(
  // TIMER
  (function () {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
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

        ;(document.getElementById('days').innerText = Math.floor(
          distance / day,
        )),
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
  })(),
)
