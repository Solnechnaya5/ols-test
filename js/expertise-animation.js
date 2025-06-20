const expertiseBlocks = document.querySelectorAll('.expertise-block__top');
const expertiseTextItems = document.querySelectorAll('.expertise__text-item');

// Додаємо і прибираємо класи
if (window.innerWidth > 1200) {
expertiseBlocks.forEach((block, index) => {
  block.addEventListener('mouseenter', () => {
    block.classList.add('active'); // Додаємо клас до блоку
    expertiseTextItems[index]?.classList.add('active'); // Додаємо клас до відповідного тексту
  });

  block.addEventListener('mouseleave', () => {
    block.classList.remove('active'); // Прибираємо клас з блоку
    expertiseTextItems[index]?.classList.remove('active'); // Прибираємо клас з тексту
  });
});
}

// expertiseWrapper.addEventListener('mouseleave', () => {
//   removeActiveClasses();
//   restoreInitialClasses();
// });
