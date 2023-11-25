const swiper = new Swiper(".swiper", {
  loop: true,
  speed: 600,
  autoplay: {
    delay: 15000,
  },
  direction: "horizontal",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  on: {
    slideChange: function () {
      // Pause videos in the previous slide
      const previousSlide = this.slides[this.previousIndex];
      pauseVideosInSlide(previousSlide);
    },
  },
});
// Function to pause all videos in a given slide
function pauseVideosInSlide(slide) {
  const videos = slide.querySelectorAll("video");
  videos.forEach((video) => {
    if (!video.paused) {
      video.pause();
    }
  });
}
// CONTACT FORM START
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contactForm");

  if (contactForm) {
    // LOADER AT SUBMITTING A FORM START
    function onFormSubmission(event) {
      const isValid = Array.from(event.target.elements).every((element) =>
        element.reportValidity()
      );

      const submitButton = document.querySelector(".submit-btn");

      if (isValid) {
        submitButton.innerHTML = "<div class='loader'></div>";
      } else {
        event.preventDefault();
      }
    }

    contactForm.addEventListener("submit", onFormSubmission);
    // LOADER AT SUBMITTING A FORM END
  }
});
// CONTACT FORM END
