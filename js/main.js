// team slider swiper
const teamSlider = new Swiper(".teams-slider", {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  effect: "coverflow",
  centeredSlides: true,

  coverflowEffect: {
    rotate: 0,
    stretch: 10,
    depth: 100,
    modifier: 1,
    slideShadows: false,
    scale: 0.98,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 5,
    },
    640: {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    1320: {
      slidesPerView: 1.55,
      spaceBetween: 20,
    },
  },
});


// hiring
const hiringSteps = document.querySelector('.hiring-steps');
const slides = Array.from(document.querySelectorAll('.hiring-slide'));
const retreats = Array.from(document.querySelectorAll('.hiring-slide_retreat'));
const hiringBlock = document.querySelector('.hiring');

let activeIndex = slides.findIndex(slide => slide.classList.contains('active')) || 0;
let isScrolling = false;

function switchSlide(direction) {
  if (isScrolling) return;

  isScrolling = true;

  slides.forEach(slide => slide.classList.remove('active'));
  
  activeIndex = (activeIndex + direction + slides.length) % slides.length;

  slides[activeIndex].classList.add('active');

  

  setTimeout(() => {
    isScrolling = false;
  }, 500); 
}

const observerHiring = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && window.innerWidth > 767) { 
      setInterval(() => {
        switchSlide(1);
      }, 2000); 
    }
  });
});

observerHiring.observe(hiringBlock);

window.addEventListener('resize', () => {
  if (window.innerWidth <= 767) {
    slides.forEach(slide => slide.classList.remove('active'));
   
  } else {
    slides[activeIndex].classList.add('active');
  }
});
