function ready() {

    let burgerBtn = document.querySelector('.header__burger-btn');
    burgerBtn.addEventListener('click', () => {
        let mobileMenu = document.querySelector('.mobile-menu');
        let body = document.querySelector('.body');
        let overlay = document.querySelector('.overlay');

        let burger_span = document.querySelector('.header__burger-span');
        let burger_span_1 = document.querySelector('.header__burger-span-1');
        let burger_span_2 = document.querySelector('.header__burger-span-2');

        mobileMenu.classList.toggle('mobile-menu__active');
        body.classList.toggle('body__lock');
        overlay.classList.toggle('overlay__open');

        burger_span.classList.toggle('header__burger-span-close');
        burger_span_1.classList.toggle('header__burger-span-1-close');
        burger_span_2.classList.toggle('header__burger-span-2-close');
    });
}

document.addEventListener("DOMContentLoaded", ready);