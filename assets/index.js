// CHANGE HEADER RGBA AT SCROLL START
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    const header = document.querySelector("#homepage header");
    const dropdown = document.querySelector("#homepage .dropdown-content");
    blurValue = getComputedStyle(document.documentElement)
      .getPropertyValue("--blur-2")
      .trim();

    if (window.pageYOffset > 680) {
      header.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
      header.style.backdropFilter = blurValue;
      header.style.webkitBackdropFilter = blurValue;
      header.style.MozBackdropFilter = blurValue; // Unsupported
      header.style.MsBackdropFilter = blurValue; // Unsupported
      header.style.OBackdropFilter = blurValue; // Unsupported
      dropdown.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
      dropdown.style.backdropFilter = blurValue;
      dropdown.style.webkitBackdropFilter = blurValue;
      dropdown.style.MozBackdropFilter = blurValue; // Unsupported
      dropdown.style.MsBackdropFilter = blurValue; // Unsupported
      dropdown.style.OBackdropFilter = blurValue; // Unsupported
    } else {
      header.style.backgroundColor = "rgba(0, 0, 0, 0)";
      header.style.backdropFilter = "blur(0px)";
      header.style.webkitBackdropFilter = "blur(0px)";
      header.style.MozBackdropFilter = "blur(0px)"; // Unsupported
      header.style.MsBackdropFilter = "blur(0px)"; // Unsupported
      header.style.OBackdropFilter = "blur(0px)"; // Unsupported
      dropdown.style.backgroundColor = "rgba(0, 0, 0, 0)";
      dropdown.style.backdropFilter = "blur(0px)";
      dropdown.style.webkitBackdropFilter = "blur(0px)";
      dropdown.style.MozBackdropFilter = "blur(0px)"; // Unsupported
      dropdown.style.MsBackdropFilter = "blur(0px)"; // Unsupported
      dropdown.style.OBackdropFilter = "blur(0px)"; // Unsupported
    }
  });
});
// VIDEO CONTROLS START
const video = document.getElementById("heroVideo"),
  pauseControl = document.getElementById("pauseControl"),
  playControl = document.getElementById("playControl"),
  playPauseButton = document.getElementById("playPauseButton");

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

video.addEventListener("pause", updateControls);
video.addEventListener("play", updateControls);

playPauseButton.addEventListener("click", function () {
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

// Call the videoOffload function to initialize
videoOffload();

// VIDEO OFFLOAD END

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
const reviewsSwiper = new Swiper(".reviews-swiper", {
  loop: true,
  speed: 600,
  spaceBetween: 15,
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
