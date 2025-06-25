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

// cube animation
const startAnimations = () => {
    setTimeout(() => {
        document.querySelector('.cube-1').classList.add('cube1-animate');
        document.querySelector('.cube-2').classList.add('cube2-animate');
    }, 1000);

    document.querySelector('.cube-3').classList.add('cube3-animate');
    
    setTimeout(() => {
        document.querySelector('.ofices').classList.add('ofices-animate');
        document.querySelector('.people').classList.add('people-animate');
        document.querySelector('.years').classList.add('years-animate');
        document.querySelector('.percent').classList.add('percent-animate');
    }, 1500);
};

const stopAnimations = () => {
    
    document.querySelector('.cube-1').classList.remove('cube1-animate');
    document.querySelector('.cube-2').classList.remove('cube2-animate');
    document.querySelector('.cube-3').classList.remove('cube3-animate');
    document.querySelector('.ofices').classList.remove('ofices-animate');
    document.querySelector('.people').classList.remove('people-animate');
    document.querySelector('.years').classList.remove('years-animate');
    document.querySelector('.percent').classList.remove('percent-animate');
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            
            startAnimations();
        } else {
           
            stopAnimations();
        }
    });
}, { threshold: 0.5 });

observer.observe(document.querySelector('.about-animation'));

// expertise animation
const expertiseBlocks = document.querySelectorAll('.expertise-block__top');
const expertiseTextItems = document.querySelectorAll('.expertise__text-item');


if (window.innerWidth > 1200) {
expertiseBlocks.forEach((block, index) => {
  block.addEventListener('mouseenter', () => {
    block.classList.add('active'); 
    expertiseTextItems[index]?.classList.add('active'); 
  });

  block.addEventListener('mouseleave', () => {
    block.classList.remove('active'); 
    expertiseTextItems[index]?.classList.remove('active');
  });
});
}

// map-animation

document.addEventListener("DOMContentLoaded", () => {
  const countryClasses = [
    "ukraine", "romania", "moldova", 'slovakia', "czech", "poland", 
     "germany",  "netherlands", "britain", "latvia", "estonia", "spain",  "portugal",
      "canada", "usa","mexico", "colombia", "argentina",
     "thailand", 
  ];
  const color = "rgb(147, 199, 4)";
  let currentIndex = 0;
  const speed = 800; // animation time

  function paintCountry() {
    if (currentIndex < countryClasses.length) {
      const elements = document.querySelectorAll(`.${countryClasses[currentIndex]}`);
      elements.forEach((element) => {
        element.style.fill = color;
      });
      currentIndex++;
      setTimeout(paintCountry, 400);
    }
  }

  // counter function
  const runCounter = (counter) => {
    const target = +counter.getAttribute("data-count");
    let count = +counter.innerText;
    const increment = target / speed;

    const interval = setInterval(() => {
      if (count < target) {
        count += increment;
        counter.innerText = Math.min(Math.ceil(count), target);
      } else {
        counter.innerText = target;
        clearInterval(interval);
      }
    }, 10);
  };

  const rightMapContainer = document.querySelector(".resources-map");
  const counters = document.querySelectorAll(".counter");

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      paintCountry();
      counters.forEach((counter) => runCounter(counter));
      observer.disconnect();
    }
  }, { threshold: 0.1 });

  if (rightMapContainer) {
    observer.observe(rightMapContainer);
  }
});
