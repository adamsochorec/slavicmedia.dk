// CHANGE HEADER RGBA AT SCROLL START
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 740) {
      $("header").css("background-color", "rgba(0, 0, 0, 1)");
      /* set your desired background color here */
    } else {
      $("header").css("background-color", "rgba(0, 0, 0, 0)");
      /* set your desired background color here */
    }
  });
});
// CHANGE HEADER RGBA AT SCROLL END
