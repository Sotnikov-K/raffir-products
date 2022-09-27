const links = document.querySelectorAll('.scroll_link');
links.forEach((item) => {
    item.addEventListener('click', (e) => {
        const el = document.getElementById(item.getAttribute('data-link'));
        let headerOffset = 100;
        let elementPosition = el.getBoundingClientRect().top;
        let offsetPosition = elementPosition + window.pageYOffset - headerOffset;
        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    })
})

const toTop = document.querySelector('.toTheTop');
window.addEventListener('scroll', function () {
    if (window.pageYOffset >= 507) {
        toTop.classList.remove('is-closed');
        toTop.classList.add('is-open');
    } else {
        toTop.classList.remove('is-open');
        toTop.classList.add('is-closed');
    }
});

toTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
})