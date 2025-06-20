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
