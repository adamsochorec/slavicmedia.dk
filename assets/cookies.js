/// COOKIES START
// ---- ---- Const ---- ---- //
const cookiesBox = document.querySelector(".privacy-container"),
  buttons = document.querySelectorAll(".button");

// Function to check if a specific cookie is set
const isCookieSet = (cookieName) =>
  document.cookie
    .split(";")
    .some((item) => item.trim().startsWith(cookieName + "="));

// ---- ---- Show ---- ---- //
const executeCodes = () => {
  // Check if any of the cookies are already set
  if (isCookieSet("SlavicMedia") || isCookieSet("DeclinedSlavicMedia")) {
    if (isCookieSet("SlavicMedia")) {
      loadGoogleAnalytics();
    }
    return;
  }
  cookiesBox.classList.add("show");

  // ---- ---- Button ---- ---- //
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookiesBox.classList.remove("show");

      // Set a cookie for a month based on the user's choice
      let cookieValue =
        button.id == "acceptBtn" ? "SlavicMedia" : "DeclinedSlavicMedia";
      document.cookie = `${cookieValue}=true; max-age=${60 * 60 * 24 * 30}`;

      // Load Google Analytics if accepted
      if (button.id == "acceptBtn") {
        loadGoogleAnalytics();
      }
    });
  });
};
const loadGoogleAnalytics = () => {
  // ---- ---- Google Analytics Code ---- ---- //
  const script = document.createElement("script");
  script.async = true;
  script.src = "https://www.googletagmanager.com/gtag/js?id=G-KGTECW9SN8";
  script.role = "script";

  script.onload = function () {
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-KGTECW9SN8");
  };

  document.head.appendChild(script);
};

window.addEventListener("load", executeCodes);
// COOKIES END
