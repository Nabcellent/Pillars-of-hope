$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loop: true,
        mousewheel: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 2,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
})