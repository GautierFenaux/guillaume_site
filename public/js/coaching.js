// Const used in coaching page to have elements in column direction
const coachingSection = document.getElementById('coaching-section')


  window.addEventListener('load', () => {
    if (window.innerWidth > 1140) {
        coachingSection.classList.remove('flex-column')
        coachingSection.classList.add('flex')
      } else {
        coachingSection.classList.add('flex-column')
        coachingSection.classList.remove('flex')
      }
  })

window.addEventListener("resize", function() {
  if(window.innerWidth > 1140) {
    coachingSection.classList.remove('flex-column')
    coachingSection.classList.add('flex')
  } else {
    coachingSection.classList.add('flex-column')
    coachingSection.classList.remove('flex')
  }
  })
