const slides = document.querySelector('.slides');
const leftArrow = document.querySelector('.arrow.left');
const rightArrow = document.querySelector('.arrow.right');

let currentSlide = 0;
const totalSlides = document.querySelectorAll('.slide').length;

function updateSlide() {
  slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

rightArrow.addEventListener('click', () => {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlide();
});

leftArrow.addEventListener('click', () => {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlide();
});