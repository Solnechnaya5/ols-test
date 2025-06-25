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

// expertiseWrapper.addEventListener('mouseleave', () => {
//   removeActiveClasses();
//   restoreInitialClasses();
// });
