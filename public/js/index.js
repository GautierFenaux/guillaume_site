const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('nav ul');
const navLinks = document.querySelectorAll('nav a');
const sectionPrice = document.getElementById('section-price');

// Const used to add animations on week-end
const weekendPresentation = document.getElementById('weekend-presentation');
const arrowWeekend = document.getElementById('arrow-weekend');
const buttonDesktop = document.getElementById('btn-desktop');
const buttonMobile = document.getElementById('btn-mobile');

// Const used in coaching page to have elements in column direction
const coachingSection = document.getElementById('coaching-section')



document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".header"));

  if ("IntersectionObserver" in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          entry.target.style.boxShadow = 'inset 0 0 0 100vw rgb(0 0 0 / 25%)'
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});








if (window.innerWidth >= 768) {
  sectionPrice.classList.add("flex")
}

window.addEventListener("resize", function() {

  if (window.innerWidth >= 768) {
    sectionPrice.classList.add("flex")
  } else {
    sectionPrice.classList.remove("flex")
  };
});





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



window.onscroll = function() {addStickyNav()};

// Get the header
let navbar = document.getElementById("navbar");

// Get the offset position of the navbar
let sticky = navbar.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function addStickyNav() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}



const image = document.getElementById("weekend-image");
let currentPos = 0;
let images = ["bord_de_plage.jpg", "falaise.jpg", "falaise_2.jpg", "falaise_3.jpg", "plage_people.jpg"]

function changePicture() {
    if (++currentPos >= images.length)
        currentPos = 0;
    image.src = './public/images/' + images[currentPos];
}


function fadeIn()
{
    image.classList.remove("fade-out");
    image.classList.add("fade-in");    
}

function fadeOut()
{
    image.classList.remove("fade-in");
    image.classList.add("fade-out");
    
    image.addEventListener("transitionend", function handleChanges()
    {
        image.removeEventListener("transitionend", handleChanges);
        changePicture();
        fadeIn();
    });
}

setInterval(fadeOut, 4100);


buttonDesktop.addEventListener('click', () => {
  weekendPresentation.style.display = 'block'
  weekendPresentation.style.animation = 'slideInFromLeft 1s ease-in'
})

buttonMobile.addEventListener('click', () => {
  weekendPresentation.style.display = 'block'
  weekendPresentation.style.animation = 'slideInFromLeft 1s ease-in'
  weekendPresentation.classList.add('flex')

})

arrowWeekend.addEventListener('click', () => {
  weekendPresentation.style.animation = 'slideOutToLeft 1s ease-in'
  weekendPresentation.style.animationFillMode =  'forwards'

})



