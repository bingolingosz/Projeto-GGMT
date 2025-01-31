// -------------------------------
//     CARROSEL DO INICIO 
// -------------------------------
// function moveSlide(direction, carouselId) {
//     const carousel = document.getElementById(carouselId);
//     const items = carousel.querySelectorAll('.carousel-item');
//     const totalItems = items.length;
//     const itemWidth = items[0].offsetWidth;
//     const carouselWidth = carousel.offsetWidth;
//     const itemsVisible = Math.floor(carouselWidth / itemWidth);
//     let currentTransformValue = parseInt(window.getComputedStyle(carousel).transform.split(',')[4]) || 0;
//     let newTransformValue = currentTransformValue - (direction * itemWidth);
//     // Impede o movimento além do conteúdo
//     if (direction === 1 && Math.abs(newTransformValue) >= (totalItems - itemsVisible) * itemWidth) {
//         newTransformValue = -(totalItems - itemsVisible) * itemWidth; // Impede o botão de ir além
//         disableButton('next', carouselId);
//     } else if (direction === -1 && newTransformValue >= 0) {
//         newTransformValue = 0; // Impede o botão de ir para o início
//         disableButton('prev', carouselId);
//     } else {
//         enableButton('prev', carouselId);
//         enableButton('next', carouselId);
//     }
//     carousel.style.transform = `translateX(${newTransformValue}px)`;
// }
// function disableButton(buttonType, carouselId) {
//     const button = document.querySelector(`#${carouselId} .carousel-button.${buttonType}`);
//     if (button) {
//         button.disabled = true;
//         button.style.opacity = 0.5;
//     }
// }
// function enableButton(buttonType, carouselId) {
//     const button = document.querySelector(`#${carouselId} .carousel-button.${buttonType}`);
//     if (button) {
//         button.disabled = false;
//         button.style.opacity = 1;
//     }
// }

// -------------------------------
//      
// -------------------------------