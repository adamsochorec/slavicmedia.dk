// ABOUT SKILL BAR
const skillBars = document.querySelectorAll(".skill-bar");

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress;
    skillBars.style.opacity = 1;
    skillBars.style.width = `${value}%`;
  });
}
showProgress();
// ABOUT CONTACT FORM LOADER
const contactForm = document.querySelector("form");

// define the event handler function
function onFormSubmission(event) {
  const fields = Array.from(event.target.elements);
  const allValid = fields.every((field) => field.reportValidity());
  const submit_btn = document.querySelector(".submit-btn");

  if (!allValid) {
    event.preventDefault(); // stop form submission
    return;
  }
  submit_btn.innerHTML = "<div class='loader'></div>";
}
// add an event listener that fires on submission
contactForm.addEventListener("submit", onFormSubmission);
