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
