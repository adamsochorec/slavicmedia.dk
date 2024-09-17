// CHANGE HEADER RGBA AT SCROLL START
document.addEventListener("DOMContentLoaded", function () {
  // Adds a scroll event listener to change the header styles based on scroll position
  window.addEventListener("scroll", function () {
    const header = document.querySelector("#homepage header");
    // Retrieves blur and color values from CSS variables
    blurValue = getComputedStyle(document.documentElement).getPropertyValue(
      "--blur-1"
    );
    const darkGreyValue = getComputedStyle(
      document.documentElement
    ).getPropertyValue("--dark-grey-color-full");

    // Adjusts header styles when scroll position is beyond a certain threshold
    if (window.pageYOffset > 530) {
      header.style.backgroundColor = darkGreyValue;
      header.style.backdropFilter = blurValue;
      header.style.webkitBackdropFilter = blurValue;
      header.style.MozBackdropFilter = blurValue; // Unsupported
      header.style.MsBackdropFilter = blurValue; // Unsupported
      header.style.OBackdropFilter = blurValue; // Unsupported
    } else {
      header.style.backgroundColor = "rgba(0, 0, 0, 0)";
      header.style.backdropFilter = "blur(0px)";
      header.style.webkitBackdropFilter = "blur(0px)";
      header.style.MozBackdropFilter = "blur(0px)"; // Unsupported
      header.style.MsBackdropFilter = "blur(0px)"; // Unsupported
      header.style.OBackdropFilter = "blur(0px)"; // Unsupported
    }
  });
});

// VIDEO CONTROLS START
const video = document.getElementById("heroVideo"),
  pauseControl = document.getElementById("pauseControl"),
  playControl = document.getElementById("playControl"),
  playPauseButton = document.getElementById("playPauseButton");

// Function to update video controls based on playback status
function updateControls() {
  if (video.paused) {
    playPauseButton.classList.remove("pause");
    playPauseButton.classList.add("play");
    pauseControl.style.display = "none";
    playControl.style.display = "unset";
    video.removeAttribute("controls");
  } else {
    playPauseButton.classList.remove("play");
    playPauseButton.classList.add("pause");
    pauseControl.style.display = "unset";
    playControl.style.display = "none";
  }
}

// Adds event listeners for video play and pause events
video.addEventListener("pause", updateControls);
video.addEventListener("play", updateControls);

// Adds a click event listener to the play/pause button
playPauseButton.addEventListener("click", function () {
  // Toggles between play and pause based on current video state
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
});
// VIDEO CONTROLS END

// VIDEO OFFLOAD START
function videoOffload() {
  // Get all video elements with the "video-offload" class
  const videos = document.querySelectorAll(".video-offload");

  // Function to handle the Intersection Observer for a single video
  function handleVideoIntersection(video) {
    // Define the options for the Intersection Observer
    const options = {
      root: null, // Use the viewport as the root
      rootMargin: "0px", // No margin
      threshold: 0.1, // 10% of the target element must be visible to trigger
    };

    // Callback function when the video enters or exits the viewport
    const callback = (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // The video is in the viewport, so play it and show controls
          video.play();
          video.removeAttribute("controls");
        } else {
          // The video is out of the viewport, so pause it and hide controls
          video.pause();
        }
      });
    };

    // Create an Intersection Observer with the specified options and callback for the current video
    const observer = new IntersectionObserver(callback, options);

    // Start observing the current video element
    observer.observe(video);
  }

  // Iterate over all video elements and apply the Intersection Observer
  videos.forEach((video) => {
    video.setAttribute("autoplay", "false"); // Disable autoplay initially

    // Apply Intersection Observer to the current video
    handleVideoIntersection(video);
  });
}
videoOffload();
// VIDEO OFFLOAD END
const gridGap2 = getComputedStyle(document.documentElement).getPropertyValue(
  "--grid-gap-2"
);
const gridGap3 = getComputedStyle(document.documentElement).getPropertyValue(
  "--grid-gap-3"
);

// CLIENTS SWIPER START
// Initialize Swiper for the reviews section
const clientsSwiper = new Swiper(".swiper-clients", {
  loop: true,
  speed: 600,
  autoplay: { delay: 1000 },
  preloadImages: false,
  lazyLoading: true,
  observer: true,
  observeParents: true,
  breakpoints: {
    0: {
      slidesPerView: 3,
    },
    375: {
      slidesPerView: 4,
    },
    620: {
      slidesPerView: 6,
    },
    947: {
      slidesPerView: 6,
    },
  },
  // Optional parameters
  direction: "horizontal",
  loop: true,
});
// CLIENTS SWIPER END

// START RATING START
// Get all elements with the "stars" class
const starContainers = document.querySelectorAll(".stars");

// Iterate through each element and display stars based on the data-rating attribute
starContainers.forEach(function (starContainer) {
  const rating = parseInt(starContainer.getAttribute("data-rating"), 10);
  showStars(starContainer, rating);
});

// Function to display stars based on the rating value
function showStars(container, rating) {
  container.innerHTML = ""; // Clear any existing content

  // Create stars based on the rating
  for (let i = 1; i <= 5; i++) {
    const star = document.createElement("span");
    star.className = "stars";

    // Fill the star if it's within the rating
    if (i <= rating) {
      star.innerHTML = "★"; // Use a star symbol
    } else {
      star.innerHTML = "☆"; // Use an empty star symbol
    }

    // Append the star to the container
    container.appendChild(star);
  }
}
// START RATING END

// RATING SWIPER START

// Initialize Swiper for the reviews section
const reviewsSwiper = new Swiper(".swiper-reviews", {
  loop: true,
  speed: 600,
  spaceBetween: gridGap2,
  autoplay: {
    delay: 3000,
  },
  preloadImages: false,
  lazyLoading: true,
  observer: true,
  observeParents: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    375: {
      slidesPerView: 2,
    },
    620: {
      slidesPerView: 3,
    },
    947: {
      slidesPerView: 4,
    },
  },
  // Optional parameters
  direction: "horizontal",
  loop: true,
});
// RATING SWIPER END

// OUR TEAM SWIPER START
// Initialize Swiper for the "Our Team" section
const ourteamSwiper = new Swiper(".swiper-ourteam", {
  preloadImages: false,
  lazyLoading: true,
  observer: true,
  observeParents: true,
  spaceBetween: gridGap3,
  pagination: {
    el: ".swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    0: {
      slidesPerView: 2.3,
    },
    375: {
      slidesPerView: 3.3,
    },
    620: {
      slidesPerView: 3.5,
    },
  },
  // Optional parameters
  direction: "horizontal",
});
// OUR TEAM END

// COUNTER START
// Set the date we're counting down to
const initialCountDownDate = new Date("Jun 13, 2024 23:59:59").getTime();

// Function to calculate the next countdown date after expiration
const getNextCountDownDate = (pastDate) =>
  new Date(pastDate + 2 * 24 * 60 * 60 * 1000).getTime();

// Using let to allow updates to the countdown date
let countDownDate = initialCountDownDate;

// Function to format time and wrap each digit in a span
const formatTime = (time) => {
  return time.toString().padStart(2, "0").split("");
};

// Function to update countdown
const updateCountdown = () => {
  // Get today's date and time
  const now = new Date().getTime();

  // Find the distance between now and the count down date
  let distance = countDownDate - now;

  // Time calculations for total hours, minutes and seconds left
  const totalHours = formatTime(Math.floor(distance / (1000 * 60 * 60)));
  const totalMinutes = formatTime(
    Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
  );
  const totalSeconds = formatTime(Math.floor((distance % (1000 * 60)) / 1000));

  // Display the result in the element with id="counter"
  document.getElementById("hours-tens").innerHTML = totalHours[0];
  document.getElementById("hours-ones").innerHTML = totalHours[1];
  document.getElementById("minutes-tens").innerHTML = totalMinutes[0];
  document.getElementById("minutes-ones").innerHTML = totalMinutes[1];
  document.getElementById("seconds-tens").innerHTML = totalSeconds[0];
  document.getElementById("seconds-ones").innerHTML = totalSeconds[1];

  // If the count down is finished, restart it every 2 days
  if (distance < 0) {
    countDownDate = getNextCountDownDate(countDownDate); // Reset for next cycle
    updateCountdown(); // Update immediately after resetting to avoid delay
  }
};

// Update the count down every 1 second
const countdownInterval = setInterval(updateCountdown, 1000);

// Initialize countdown display immediately
updateCountdown();
// COUNTER END

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
