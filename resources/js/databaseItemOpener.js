if (document.querySelector('.databaseItem-content-itemWrapper')) {

    let items = document.querySelectorAll('.databaseItem-content-itemWrapper');
    let icon = document.querySelector('.expander__icon--item');

    items.forEach(element => {
        element.addEventListener('click', (event) => {
            let target = event.currentTarget;
            let itemMore = target.querySelector('.databaseItem__content-item-more');
            let expander__icon = target.querySelector('.expander__icon--item');
            let title = target.querySelector('.databaseItem__content-item-title');

            icon.toggleAttribute('src', "/images/icons/expand/expand_less.png");
            itemMore.classList.toggle('databaseItem__content-item-more--active');
            title.classList.toggle('databaseItem__content-item-title--active');

            if (itemMore.classList.contains('databaseItem__content-item-more--active')) {
                expander__icon.style.transform = "rotate(180deg)";
            } else {
                expander__icon.style.transform = "rotate(0deg)";
            }

        })

    })

}

