// VAT SWITCHER
function vatPrice() {
  const prices = document.querySelectorAll(".price");

  prices.forEach(function (price) {
    const currentPrice = parseFloat(price.textContent);

    // Check if the price is multiplied by 1.2, revert if true, else multiply
    if (price.dataset.multiplied === "true") {
      price.textContent = (currentPrice * 1.25).toFixed(0);
      price.dataset.multiplied = "false";
    } else {
      price.textContent = (currentPrice / 1.25).toFixed(0);
      price.dataset.multiplied = "true";
    }
  });
}
function updatePlanOptions() {
  const categorySelect = document.getElementById("category");
  const disableOnSelectOption = document.getElementById("disableOnSelect");

  if (categorySelect.value === "Service") {
    // If "Service" is selected in the first select, disable the second select
    disableOnSelectOption.value = ""; // Set a default value
    disableOnSelectOption.disabled = true;
  } else {
    // If any other option is selected in the first select, enable the second select
    disableOnSelectOption.value = ""; // Set a default value
    disableOnSelectOption.disabled = false;
  }
}

// Call the function when the page loads to set the initial state
window.onload = updatePlanOptions;

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
