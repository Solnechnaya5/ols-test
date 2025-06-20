// custom select
const dropdownSelected = document.getElementById('dropdown-selected');
const dropdownOptions = document.getElementById('dropdown-options');
const subjectInput = document.getElementById('subject-value');

dropdownSelected.addEventListener('click', () => {
  const isVisible = dropdownOptions.style.display === 'flex';
  dropdownOptions.style.display = isVisible ? 'none' : 'flex';
});

dropdownOptions.addEventListener('click', (event) => {
  if (event.target.tagName === 'LI') {
    const selectedValue = event.target.dataset.value;
    dropdownSelected.textContent = selectedValue;
    dropdownSelected.style.color ='rgba(147, 199, 4, 0.8)';
    subjectInput.value = selectedValue;
    dropdownOptions.style.display = 'none';
  }
});

const uploadButton = document.querySelector('.custom-upload-btn');
const fileInput = document.getElementById('file-input');
const fileList = document.getElementById('file-list');
let selectedFiles = [];
uploadButton.addEventListener('click', () => {
  fileInput.click();
});

fileInput.addEventListener('change', () => {
  const files = Array.from(fileInput.files); 
  selectedFiles.push(...files);
  updateFileInput();
  renderFileList();
 
});


function renderFileList() {
  fileList.innerHTML = '';
  selectedFiles.forEach((file, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = file.name;
    listItem.style.cursor = 'pointer';
    listItem.setAttribute('data-index', index); // Зберігаємо індекс
    listItem.addEventListener('click', () => removeFile(index)); // Додаємо подію видалення
    fileList.appendChild(listItem);
   
      if (fileList.lenght != 0) {
        uploadButton.classList.add('border'); // Додаємо клас, якщо файли є
        
    } else{
        uploadButton.classList.remove('border'); // Додаємо клас, якщо файли є
    }
  });
 
}
// Функція для додавання/видалення класу в залежності від кількості файлів
function borderColor() {
    // Перевірка, чи є файли в масиві selectedFiles
    if (fileList !='') {
      uploadButton.classList.add('border'); // Додаємо клас, якщо файли є
    } else {
      uploadButton.classList.remove('border'); // Видаляємо клас, якщо файли відсутні
    }
  }
  
  // Функція для видалення файлу зі списку
  function removeFile(index) {
    selectedFiles.splice(index, 1); // Видаляємо файл за індексом
    updateFileInput(); // Оновлюємо FileList в інпуті
    renderFileList(); // Оновлюємо список файлів
    
  }
  
  // Функція для оновлення FileList інпуту
  function updateFileInput() {
    const dataTransfer = new DataTransfer(); // Створюємо новий DataTransfer об'єкт
    selectedFiles.forEach(file => dataTransfer.items.add(file)); // Додаємо файли до DataTransfer
    fileInput.files = dataTransfer.files; 
    console.log(fileInput.files)
  }
  