
  const slides = document.querySelector('.slides');
  const totalSlides = document.querySelectorAll('.slides img').length;
  let index = 0;

  function showNextSlide() {
    index = (index + 1) % totalSlides;
    slides.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(showNextSlide, 2000);