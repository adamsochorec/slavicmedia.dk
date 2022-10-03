// ABOUT SKILL BAR

const skillSection = document.getElementById("skills-section");

const skillBars = document.querySelectorAll(".skill-bar");

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress;
    skillBars.style.opacity = 1;
    skillBars.style.width = `${value}%`;
  });
}
/*
function hideProgress() {
  skillBars.forEach((p) => {
    p.style.opacity = 0;
    p.style.width = 0;
  });
}
*/
window.addEventListener("scroll", () => {
  const sectionPos = skillSection.getBoundingClientRect().top;
  const screenPos = window.innerHeight / 2;

  if (sectionPos > screenPos) {
    showProgress();
  } else {
    console.log("Idk");
  }
});
