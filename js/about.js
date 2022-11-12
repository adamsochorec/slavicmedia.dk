// ABOUT SKILL BAR
const skillSection = document.getElementById('skills-section')
const skillBars = document.querySelectorAll('.skill-bar')

function showProgress() {
  skillBars.forEach((skillBars) => {
    const value = skillBars.dataset.progress
    skillBars.style.opacity = 1
    skillBars.style.width = `${value}%`
  })
}
window.addEventListener('scroll', () => {
  const sectionPos = skillSection.getBoundingClientRect().top
  const screenPos = window.innerHeight / 2

  if (sectionPos > screenPos) {
    showProgress()
  } else {
    console.log('Idk')
  }
})

// UPLOAD FORM
function fileValue(value) {
  const path = value.value,
    extenstion = path.split('.').pop()
  if (
    extenstion == 'jpg' ||
    extenstion == 'svg' ||
    extenstion == 'jpeg' ||
    extenstion == 'png' ||
    extenstion == 'gif' ||
    extenstion == 'txt' ||
    extenstion == 'pdf' ||
    extenstion == 'doc' ||
    extenstion == 'docx' ||
    extenstion == 'xls' ||
    extenstion == 'xlsx' ||
    extenstion == 'ppt' ||
    extenstion == 'pptx' ||
    extenstion == 'pps' ||
    extenstion == 'heic' ||
    extenstion == 'tiff' ||
    extenstion == 'pages' ||
    extenstion == 'numbers' ||
    extenstion == 'keynone'
  ) {
    const filename = path
      .replace(/^.*[\\\/]/, '')
      .split('.')
      .slice(0, -1)
      .join('.')
    document.getElementById('filename').innerHTML = filename
  } else {
    alert(
      'File not supported. Please upload the file of below given extension ',
    )
  }
}
