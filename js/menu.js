$(document).ready(function() {
    $(".question-itemn").css({"color":"blue", "font-style":"italic"});
    $(".question-item").hide();
    $(".question-section").click(function(){
        $(this).next(".question-item").slideToggle(1000);
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.querySelector('.slider-container');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const originalItems = document.querySelectorAll('.item:not(.clone)');
    const sliderWidth = document.querySelector('.image-slider').offsetWidth;
    let currentIndex = 1; // Start at the second image (index 1)
    let itemWidth = originalItems[0].offsetWidth;
    let isTransitioning = false;
    const numberOfOriginalItems = originalItems.length;
    const cloneCount = 1;
  
    const firstClones = Array.from(originalItems).slice(0, cloneCount).map(item => {
        const clone = item.cloneNode(true);
        clone.classList.add('clone');
        return clone;
    });
  
    const lastClones = Array.from(originalItems).slice(-cloneCount).map(item => {
        const clone = item.cloneNode(true);
        clone.classList.add('clone');
        return clone;
    });
  
    lastClones.forEach(clone => sliderContainer.insertBefore(clone, originalItems[0]));
    firstClones.forEach(clone => sliderContainer.appendChild(clone));
  
    let items = document.querySelectorAll('.item');
  
    // Adjust initial position based on the starting currentIndex
    sliderContainer.style.transform = `translateX(-${(currentIndex + cloneCount) * itemWidth}px)`;
  
    function updateSlider(animate = true) {
        const translateX = -(currentIndex + cloneCount) * itemWidth;
        sliderContainer.style.transition = animate ? 'transform 0.5s ease-in-out' : 'none';
        sliderContainer.style.transform = `translateX(${translateX}px)`;
    }
  
    function nextSlide() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex++;
        updateSlider();
    }
  
    function prevSlide() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex--;
        updateSlider();
    }
  
    nextButton.addEventListener('click', () => {
        nextSlide();
    });
  
    prevButton.addEventListener('click', () => {
        prevSlide();
    });
  
    sliderContainer.addEventListener('transitionend', () => {
        isTransitioning = false;
  
        if (currentIndex >= numberOfOriginalItems) {
            sliderContainer.style.transition = 'none';
            currentIndex = 0;
            updateSlider(false);
        }
  
        if (currentIndex < 0) {
            sliderContainer.style.transition = 'none';
            currentIndex = numberOfOriginalItems - 1;
            updateSlider(false);
        }
    });
  
    window.addEventListener('resize', function() {
        sliderWidth = document.querySelector('.image-slider').offsetWidth;
        itemWidth = originalItems[0].offsetWidth;
        updateSlider(false);
    });
  
    setTimeout(() => {
        itemWidth = originalItems[0].offsetWidth;
        updateSlider(false);
    }, 100);
  });