import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: "auto",
    spaceBetween: 5,
    grabCursor: true,
    // centeredSlides: true,


    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },


    // Navigation arrows

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});



