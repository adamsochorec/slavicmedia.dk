// RANDOM PASSWORD GENERATOR
function getPassword() {
  let chars =
    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----'
  const passwordLength = 19
  let password = ''

  for (let i = 0; i < passwordLength; i++) {
    let randomNumber = Math.floor(Math.random() * chars.length)
    password += chars.substring(randomNumber, randomNumber + 1)
  }
  document.getElementById('password').value = password
}
let btn = document.getElementById('btn')
btn.addEventListener('click', getPassword, textChange)
// SUPER BUTTON
const superBtn = document.getElementById('btn')
const password = document.getElementById('password')

superBtn.addEventListener('click', textChange)

function textChange() {
  superBtn.classList.toggle('clicked')
  // 1. Select the text
  password.select()

  // 2. Copying the text
  document.execCommand('Copy')
}
// JQUERY

// 2FA numbers
// 1.
;(function () {
  let tfaOne = [
      '483 130',
      '583 059',
      '574 028',
      '190 459',
      '869 248',
      '294 905',
      '103 059',
    ],
    i = -1
  setInterval(function () {
    $('.tfaOne').fadeOut(function () {
      $(this)
        .html(tfaOne[(i = (i + 1) % tfaOne.length)])
        .fadeIn()
    })
  }, 1000)
})()
//2.
;(function () {
  let tfaTwo = [
      '483 130',
      '583 059',
      '574 028',
      '190 459',
      '869 248',
      '294 905',
      '103 059',
    ],
    i = -1
  setInterval(function () {
    $('.tfaTwo').fadeOut(function () {
      $(this)
        .html(tfaTwo[(i = (i + 1) % tfaTwo.length)])
        .fadeIn()
    })
  }, 1500)
})()
// 3.
;(function () {
  let tfaThree = [
      '483 130',
      '583 059',
      '574 028',
      '190 459',
      '869 248',
      '294 905',
      '103 059',
    ],
    i = -1
  setInterval(function () {
    $('.tfaThree').fadeOut(function () {
      $(this)
        .html(tfaThree[(i = (i + 1) % tfaThree.length)])
        .fadeIn()
    })
  }, 1000)
})()
// 4.
;(function () {
  let tfaFour = [
      '483 130',
      '583 059',
      '574 028',
      '190 459',
      '869 248',
      '294 905',
      '103 059',
    ],
    i = -1
  setInterval(function () {
    $('.tfaFour').fadeOut(function () {
      $(this)
        .html(tfaFour[(i = (i + 1) % tfaFour.length)])
        .fadeIn()
    })
  }, 1500)
})()
