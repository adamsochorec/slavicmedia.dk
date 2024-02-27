// ---- ---- Const ---- ---- //
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
  if (!analyticsLoaded) {
    const script = document.createElement("script");
    script.async = true;
    script.src = "https://www.googletagmanager.com/gtag/js?id=G-KGTECW9SN8";
    script.onload = function () {
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-KGTECW9SN8");
    };
    document.head.appendChild(script);
    analyticsLoaded = true;
  }
};

// Function to check and load analytics if necessary
const checkAndLoadAnalytics = () => {
  if (isCookieSet("SlavicMedia") && !analyticsLoaded) {
    loadGoogleAnalytics();
  }
};

// Initial execution and cookie check
const executeCodes = () => {
  if (isCookieSet("SlavicMedia") || isCookieSet("DeclinedSlavicMedia")) {
    checkAndLoadAnalytics();
    return;
  }
  cookiesBox.classList.add("show");

  buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
      event.stopPropagation();
      cookiesBox.classList.remove("show");
      let cookieValue =
        button.id == "acceptBtn" ? "SlavicMedia" : "DeclinedSlavicMedia";
      document.cookie = `${cookieValue}=true; max-age=${60 * 60 * 24 * 30}`;
      checkAndLoadAnalytics();
    });
  });

  cookiesBox.addEventListener("click", () => {
    if (!cookiesBox.classList.contains("show")) {
      cookiesBox.classList.toggle("show");
    }
  });
};

window.addEventListener("load", executeCodes);
