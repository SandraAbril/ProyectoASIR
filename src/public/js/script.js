const slider = document.getElementById('slider');
const leftArrow = document.getElementById('left-arrow');
const rightArrow = document.getElementById('right-arrow');

function scrollSlider(amount) {
  slider.scrollBy({ left: amount, behavior: 'smooth' });
}

function updateArrows() {
  const scrollLeft = slider.scrollLeft;
  const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

  leftArrow.style.display = scrollLeft > 5 ? 'inline' : 'none';
  rightArrow.style.display = scrollLeft < maxScrollLeft - 5 ? 'inline' : 'none';
}

leftArrow.addEventListener('click', () => scrollSlider(-100));
rightArrow.addEventListener('click', () => scrollSlider(100));
slider.addEventListener('scroll', updateArrows);
window.addEventListener('load', updateArrows);
window.addEventListener('resize', updateArrows);
