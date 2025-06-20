const cooperationBlocks = document.querySelectorAll('.type-block__top');
const cooperationDescriptions = document.querySelectorAll('.type-block__information-right');
const typesRightBlock = document.querySelector('.types-right'); 

function removeActiveClasses() {
    cooperationBlocks.forEach((cooperationBlock) => {
        cooperationBlock.classList.remove('active');
    });
    cooperationDescriptions.forEach((cooperationDescription) => {
        cooperationDescription.classList.remove('active');
    });
}

// update hight fo block .types-right
function updateRightBlockHeight() {
    const activeDescription = document.querySelector('.type-block__information-right.active');
    if (activeDescription && typesRightBlock) {
        typesRightBlock.style.height = `${activeDescription.offsetHeight}px`;
    }
}

if (window.innerWidth > 1200) {
    cooperationBlocks.forEach((block, index) => {
        block.addEventListener('click', () => {
            removeActiveClasses();
            block.classList.add('active');
            cooperationDescriptions[index]?.classList.add('active');
            updateRightBlockHeight(); 
        });
    });
}
if (window.innerWidth > 1200) {
    window.onload = function name(params) {

    }
}


//   testimonial slider
const swiperTestimonial = new Swiper('.testimonials-slider', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next.testimonials-slider-btn',
        prevEl: '.swiper-button-prev.testimonials-slider-btn',
    },


});

// send form

document.addEventListener("DOMContentLoaded", () => {
    const chooseTop = document.querySelector('.choose-top')
    const chooseItems = document.querySelectorAll(".choose-item");
    const chooseSliders = document.querySelector(".choose-sliders");
    const fixedPriceSlider = document.getElementById("fixed-price-slider");
    const tmSlider = document.getElementById("t-m-slider");
    const nextButton = document.querySelector(".btn-next");
    const prevButton = document.querySelector(".btn-prev");
    const sliders = document.querySelectorAll(".form-slide");
    const sliderCount = document.querySelector(".slider-count");
    const form = document.querySelector(".cooperation-form");
    const successMsg = document.querySelector(".success-block");
    const letsTalkBtnsSlider = document.querySelectorAll(".btn-form-slide");
    const mainInputs = document.querySelector(".form-main-inputs");
    const finishMsg = document.querySelectorAll(".choose-top__finish");
    const chooseItemsHidden= document.querySelectorAll(".hide-in-end");
    const formSlider = document.querySelector(".cooperation-form__slider");


    let currentSlide = 0;

    chooseItems.forEach(item => {
        item.addEventListener("click", function () {
            chooseItems.forEach(i => i.classList.remove("active"));
            this.classList.add("active");
            chooseSliders.classList.add("show");
            chooseTop.classList.add('min');
            document.querySelector('.choose-container').classList.add('higher');

            currentSlide = 0;

            document.querySelectorAll(".cooperation-form__slider input[type='hidden']").forEach(input => {
                input.value = "";
            });
            document.querySelectorAll(".form-slide__option").forEach(option => {
                option.classList.remove("selected");
                option.querySelector("input[type='radio']").checked = false; 
            });
            document.querySelectorAll(".form-slide__option").forEach(option => {
                option.classList.remove("selected");
            });

            nextButton.classList.remove("btn-active");
            prevButton.classList.remove("btn-active");

            let activeSlider;

            if (this.id === "fixed-price-block") {
                fixedPriceSlider.classList.add("show-slider");
                tmSlider.classList.remove("show-slider");
                activeSlider = fixedPriceSlider;
            } else if (this.id === "t-m-block") {
                tmSlider.classList.add("show-slider");
                fixedPriceSlider.classList.remove("show-slider");
                activeSlider = tmSlider;
            }

            sliders.forEach(slider => slider.classList.remove("active-slide"));

            const firstSlide = activeSlider.querySelector(".form-slide"); 
            if (firstSlide) {
                firstSlide.classList.add("active-slide");
            }

            updateSliderCount();
            checkNextButtonState();
        });
    });

    const checkNextButtonState = () => {
        const activeSlider = document.querySelector(".show-slider");
        const currentSlider = activeSlider.querySelectorAll(".form-slide")[currentSlide]; 
        const selectedOption = currentSlider.querySelector("input[type='hidden']").value;
    
        if (currentSlide === 4) {
            nextButton.classList.add("hidden");
            nextButton.classList.remove("btn-active");
            sliderCount.classList.add("hidden");
            return; 
        }
    
        nextButton.classList.remove("hidden");
        sliderCount.classList.remove("hidden");
    
        if (selectedOption && currentSlide !== 4) {
            nextButton.classList.add("btn-active");
        } else {
            nextButton.classList.remove("btn-active");
        }
    
        if (currentSlide === 0) {
            prevButton.classList.remove("btn-active");
        } else {
            prevButton.classList.add("btn-active");
        }
    };
    const updateSliderCount = () => {
        sliderCount.textContent = `${currentSlide + 1}/5`;

        checkNextButtonState();
    };

    sliders.forEach(slider => {
        const options = slider.querySelectorAll(".form-slide__option");
        options.forEach(option => {
            option.addEventListener("click", function () {
                const optionContent = this.querySelector(".option-content").textContent;
                const hiddenInput = slider.querySelector("input[type='hidden']");
                hiddenInput.value = optionContent;
                
                checkNextButtonState();
               
            });
        });
        if (currentSlide === 0) {
            prevButton.classList.remove("btn-active");
            return; 
        }
    });

    nextButton.addEventListener("click", function () {
        if (nextButton.classList.contains("btn-active")) {
            const activeSlider = document.querySelector(".show-slider"); 
            const slides = activeSlider.querySelectorAll(".form-slide"); 

            if (currentSlide < slides.length - 1) {
                slides[currentSlide].classList.remove("active-slide");
                currentSlide++;
                slides[currentSlide].classList.add("active-slide"); 
                updateSliderCount();
                prevButton.classList.add("btn-active"); 
            }
            checkNextButtonState();
        }
    });
    
    prevButton.addEventListener("click", function () {
        const activeSlider = document.querySelector(".show-slider");
        const slides = activeSlider.querySelectorAll(".form-slide");
    
        if (currentSlide > 0) {
            slides[currentSlide].classList.remove("active-slide");
            currentSlide--;
            slides[currentSlide].classList.add("active-slide");
            updateSliderCount();
            nextButton.classList.remove("hidden"); 
        }
    
        checkNextButtonState();
    });

    letsTalkBtnsSlider.forEach(letsTalkBtn => {
        letsTalkBtn.addEventListener("click", function () {
            const lastSlideInputs = document.querySelectorAll("#project_stages_text"); // Отримуємо всі інпути
            let isValid = false;
    
            // check any input has value
            lastSlideInputs.forEach(input => {
                if (input.value.trim() !== "") {
                    isValid = true;
                }
            });
    
            // bottom is active if option is checked
            if (!isValid) {
                return;
            }
    
            const activeSlider = document.querySelector(".show-slider");
            const activeSlide = activeSlider.querySelector(".active-slide");
    
            if (activeSlide) {
                activeSlide.classList.remove("active-slide");
            }
    
            mainInputs.classList.add("show-inputs");
            finishMsg.forEach(finish => {
                finish.classList.add("show-finish");
            });
            chooseTop.classList.add("show-finish");
            chooseItemsHidden.forEach(item => {
                item.classList.add("hidden");
            });
    
            activeSlider.classList.remove("show-slider");
            document.querySelectorAll(".cooperation-form__slider-bottom").forEach(bottom => {
                bottom.style.display = "none";
            });
        });
    });
    
    

    const sentform = function (formData) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./PHPMailer/php/cooperation.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                      successMsg.classList.add("show");
                      console.log("form was sended succfuly");
              console.log(xhr.responseText);
                } else {
                    //   error
                    console.log(xhr.responseText);
                }
            }
        };
        xhr.send(formData);
       
    };

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        
        let formData = new FormData();
    
        this.querySelectorAll("input, select, textarea").forEach(input => {
            if (input.value.trim() !== "") { 
                formData.append(input.name, input.value);
            } 
        });
    
        console.log("Дані, що відправляються:");
        for (const pair of formData.entries()) {
            console.log(`${pair[0]}: ${pair[1]}`);
        }
    
        sentform(formData);
        
        chooseItems.forEach(i => i.classList.remove("active"));
        chooseItems.forEach(i => i.classList.add("hidden"));
        document.querySelector('.choose-container').classList.add("hidden");
        chooseSliders.classList.remove("show");
        mainInputs.classList.remove(".show-inputs");
        this.reset();
    });
    

    document.getElementById("to-begining").addEventListener("click", function () {
        chooseItems.forEach(i => i.classList.remove("hidden"));
        chooseSliders.classList.remove("show");
        successMsg.classList.remove("show");
        currentSlide = 0;
        sliders.forEach(slider => slider.classList.remove("active-slide"));
        document.querySelector('.choose-container').classList.remove("hidden");
        document.querySelector('.choose-container').classList.remove('higher');
        chooseTop.classList.remove('min');
        mainInputs.classList.remove("show-inputs");
        finishMsg.forEach(finish => {
            finish.classList.remove("show-finish");
        });
        chooseItemsHidden.forEach(item => {
            item.classList.remove("hidden");
        });
        
        document.querySelectorAll(".cooperation-form__slider-bottom").forEach(bottom => { bottom.style.display = "flex"; })
        updateSliderCount();
    });

    updateSliderCount();
});
