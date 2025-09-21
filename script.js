(function () {
  function initSlider(container) {
    const slider = container.querySelector('.slider');
    const leftBtn = container.querySelector('.left');
    const rightBtn = container.querySelector('.right');
    const cards = slider.querySelectorAll('.card');
    let currentIndex = 0;

    function getCSSVar(name, fallback) {
      const v = getComputedStyle(document.documentElement).getPropertyValue(name);
      if (!v) return fallback;
      return parseFloat(v);
    }

    function computeStep() {
      const cardRect = cards[0].getBoundingClientRect();
      const gap = getCSSVar('--gap', 16);
      return Math.round(cardRect.width + gap);
    }

    function maxIndex() {
      const viewport = container.querySelector('.slider-viewport');
      const step = computeStep();
      const fit = Math.floor(viewport.offsetWidth / step);
      return Math.max(0, cards.length - fit);
    }

    function updateButtons() {
      leftBtn.classList.toggle("disabled", currentIndex <= 0);
      rightBtn.classList.toggle("disabled", currentIndex >= maxIndex());
    }

    function goTo(index) {
      const step = computeStep();
      currentIndex = Math.min(Math.max(0, index), maxIndex());
      slider.style.transform = `translateX(-${currentIndex * step}px)`;
      updateButtons();
    }

    rightBtn.addEventListener('click', () => goTo(currentIndex + 1));
    leftBtn.addEventListener('click', () => goTo(currentIndex - 1));

    window.addEventListener('resize', () => goTo(currentIndex));
    window.addEventListener('load', () => goTo(0));
  }

  // initialize all sliders
  document.querySelectorAll('.slider-container').forEach(initSlider);
})();
