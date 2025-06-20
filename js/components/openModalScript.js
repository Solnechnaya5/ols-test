const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelector(".btn-open");
const closeModalBtn = document.querySelector(".btn-close");
const pages = document.querySelectorAll(".page-content");
const nextButton = document.getElementById("next-page-btn");
const prevButton = document.querySelector(".btn-prev-page");
const skipButton = document.getElementById("modal-btn-skip");
const ytFrames = document.querySelectorAll(".yt-player");

// close modal function
const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
  ytFrames.forEach((e) =>
    e.contentWindow.postMessage(
      '{"event":"command","func":"' + "stopVideo" + '","args":""}',
      "*"
    )
  );
  nextButton.innerHTML = "Next Page";
  nextButton.removeEventListener("click", closeModal);
  pages.forEach((e, i) =>
    i !== 0 ? e.classList.add("hidden") : e.classList.remove("hidden")
  );
  document.body.style.overflowY = "auto";
};

// close the modal when the close button and overlay is clicked
closeModalBtn.addEventListener("click", closeModal);
// overlay.addEventListener("click", closeModal);

// close modal when the Esc key is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});

// open modal function
const openModal = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
  window.scrollTo(0, 0);
  prevButton.classList.add("hidden");
  document.body.style.overflowY = "hidden";
};
// open modal event
openModalBtn.addEventListener("click", openModal);
window.addEventListener("hashchange", function () {
  if (window.location.hash === "#popup") {
    openModal();
  }
});

const skipAndScroll = () => {
  closeModal();
  const contactForm = document.getElementById("contact");
  contactForm.scrollIntoView({
    block: "center",
    behavior: "smooth"
  });
};

const prevPage = () => {
  let currentPageIndex = Array.from(pages).findIndex(
    (e) => !e.classList.value.includes("hidden")
  );
  ytFrames.forEach((e) =>
    e.contentWindow.postMessage(
      '{"event":"command","func":"' + "stopVideo" + '","args":""}',
      "*"
    )
  );
  if (currentPageIndex === 1) {
    pages[currentPageIndex].classList.add("hidden");
    pages[currentPageIndex - 1].classList.remove("hidden");
    prevButton.classList.add("hidden");
  } else if (currentPageIndex + 1 >= 2) {
    pages[currentPageIndex].classList.add("hidden");
    pages[currentPageIndex - 1].classList.remove("hidden");
    nextButton.classList.remove("hidden");
    nextButton.innerHTML = "Next Page";
    nextButton.removeEventListener("click", closeModal);
  }
};

const nextPage = () => {
  prevButton.classList.remove("hidden");
  let currentPageIndex = Array.from(pages).findIndex(
    (e) => !e.classList.value.includes("hidden")
  );
  ytFrames.forEach((e) =>
    e.contentWindow.postMessage(
      '{"event":"command","func":"' + "stopVideo" + '","args":""}',
      "*"
    )
  );
  if (currentPageIndex + 1 !== 3) {
    pages[currentPageIndex].classList.add("hidden");
    pages[currentPageIndex + 1].classList.remove("hidden");
  } else if (currentPageIndex + 1 === 3) {
    pages[currentPageIndex].classList.add("hidden");
    pages[currentPageIndex + 1].classList.remove("hidden");
    nextButton.classList.add("hidden");
    skipButton.innerHTML = "Talk to us";
    skipButton.classList.remove("modal-btn-outlined");
    skipButton.classList.add("modal-btn-fullfilled");
  }
};
