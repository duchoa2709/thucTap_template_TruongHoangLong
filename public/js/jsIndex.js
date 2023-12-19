// animations
AOS.init();

// slider 1
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementToShow = 3;

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementToShow;

slider.style.width = cardWidth * cards.length + 'px';
slider.style.transition = 'margin';
slider.style.transitionDuration = '1s';

for (let i = 0; i < cards.length; i++) {
    const element = cards[i];
    element.style.width = cardWidth + 'px';
}

let isTransitioning = false;

function next() {
    if (!isTransitioning) {
        isTransitioning = true;

        const currentMargin = +slider.style.marginLeft.slice(0, -2);
        const maxMargin = cardWidth * (cards.length - elementToShow);

        if (currentMargin !== maxMargin) {
            slider.style.marginLeft = (currentMargin + cardWidth) + 'px';
        }

        // Sử dụng sự kiện transitionend để xác định khi chuyển động kết thúc
        slider.addEventListener('transitionend', handleTransitionEnd);
    }
}

function prev() {
    if (!isTransitioning) {
        isTransitioning = true;

        const currentMargin = +slider.style.marginLeft.slice(0, -2);
        const minMargin = -cardWidth * (cards.length - elementToShow);

        if (currentMargin !== minMargin) {
            slider.style.marginLeft = (currentMargin - cardWidth) + 'px';
        }

        slider.addEventListener('transitionend', handleTransitionEnd);
    }
}

function handleTransitionEnd() {
    // Đặt lại biến isTransitioning và xóa sự kiện để ngăn chặn việc gọi lại handleTransitionEnd
    isTransitioning = false;
    slider.removeEventListener('transitionend', handleTransitionEnd);
}


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}









