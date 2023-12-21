// VAT SWITCHER
function togglePrices() {
  var prices = document.querySelectorAll(".price");

  prices.forEach(function (price) {
    var currentPrice = parseFloat(price.textContent);

    // Check if the price is multiplied by 1.2, revert if true, else multiply
    if (price.dataset.multiplied === "true") {
      price.textContent = currentPrice / 1.2;
      price.dataset.multiplied = "false";
    } else {
      price.textContent = currentPrice * 1.2;
      price.dataset.multiplied = "true";
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
