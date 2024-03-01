// ---- ---- Const ---- ---- //

// Selects the privacy container and all buttons on the page
const cookiesBox = document.querySelector(".privacy-container"),
  buttons = document.querySelectorAll(".button");

// Flag to check if Google Analytics is loaded
let analyticsLoaded = false;

// Function to check if a specific cookie is set
const isCookieSet = (cookieName) =>
  document.cookie
    .split(";")
    .some((item) => item.trim().startsWith(cookieName + "="));

// Function to load Google Analytics
const loadGoogleAnalytics = () => {
  // Checks if Google Analytics is not already loaded
  if (!analyticsLoaded) {
    // Creates a script element dynamically
    const script = document.createElement("script");
    script.async = true;
    script.src = "https://www.googletagmanager.com/gtag/js?id=G-KGTECW9SN8";
    // Sets up the script to configure and initialize Google Analytics on load
    script.onload = function () {
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-KGTECW9SN8");
    };
    // Appends the script to the head of the document
    document.head.appendChild(script);
    // Updates the flag to indicate that Google Analytics is now loaded
    analyticsLoaded = true;
  }
};

// Function to check and load analytics if necessary
const checkAndLoadAnalytics = () => {
  // Checks if the SlavicMedia cookie is set and if Google Analytics is not loaded
  if (isCookieSet("SlavicMedia") && !analyticsLoaded) {
    // Calls the function to load Google Analytics
    loadGoogleAnalytics();
  }
};

// Initial execution and cookie check
const executeCodes = () => {
  // Checks if either the SlavicMedia or DeclinedSlavicMedia cookie is set
  if (isCookieSet("SlavicMedia") || isCookieSet("DeclinedSlavicMedia")) {
    // Calls the function to check and load analytics if necessary
    checkAndLoadAnalytics();
    return;
  }
  // Displays the privacy container
  cookiesBox.classList.add("show");

  // Adds click event listeners to the buttons
  buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
      // Prevents the click event from propagating to the container
      event.stopPropagation();
      // Hides the privacy container
      cookiesBox.classList.remove("show");
      // Sets the appropriate cookie based on the button clicked
      let cookieValue =
        button.id == "acceptBtn" ? "SlavicMedia" : "DeclinedSlavicMedia";
      document.cookie = `${cookieValue}=true; max-age=${60 * 60 * 24 * 30}`;
      // Calls the function to check and load analytics if necessary
      checkAndLoadAnalytics();
    });
  });

  // Adds click event listener to the privacy container
  cookiesBox.addEventListener("click", () => {
    // Toggles the visibility of the privacy container
    if (!cookiesBox.classList.contains("show")) {
      cookiesBox.classList.toggle("show");
    }
  });
};

// Adds a load event listener to execute the initial codes when the window is loaded
window.addEventListener("load", executeCodes);
