const slides = document.querySelectorAll('.image-slider .absolute.inset-0');
let currentIndex = 0;

function showNextImage() {
    slides[currentIndex].classList.remove('opacity-100');
    slides[currentIndex].classList.add('opacity-0');

    currentIndex = (currentIndex + 1) % slides.length;

    slides[currentIndex].classList.remove('opacity-0');
    slides[currentIndex].classList.add('opacity-100');
}

setInterval(showNextImage, 3000);