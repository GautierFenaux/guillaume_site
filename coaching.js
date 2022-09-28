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


const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('nav ul');
const navLinks = document.querySelectorAll('nav a');

  // load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
