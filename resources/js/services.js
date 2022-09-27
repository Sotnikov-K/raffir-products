let expanders = document.querySelectorAll('.services__expander');

expanders.forEach((element) => {
    element.addEventListener('click', e => {

        let item = e.currentTarget.parentElement.parentElement.querySelector('.services__item-description-list-wrapper');
        item.classList.toggle("services__item-description-list-wrapper--active");

        let curentExpander = e.currentTarget.querySelector('.expander__icon');
        let curentServiceItem = e.currentTarget.closest('.services__item');


        if (item.classList.contains('services__item-description-list-wrapper--active')) {

            curentExpander.setAttribute('src', '/images/icons/expand/expand_less.png');
            curentServiceItem.classList.add('services__item--active')

        } else {

            curentExpander.setAttribute('src', '/images/icons/expand/expand_more.png');
            curentServiceItem.classList.remove('services__item--active');

        }

    })
})
