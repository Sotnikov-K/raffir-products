let servicesItem = document.querySelectorAll('.services__item');

servicesItem.forEach((element) => {
    element.addEventListener('click', e => {

        let item = e.currentTarget;
        let item2 = item.querySelector('.services__item-description-list-wrapper');
        item2.classList.toggle("services__item-description-list-wrapper-active");

        let materialSymbols = element.querySelector('.material-symbols-outlined');

        if (item2.classList.contains('services__item-description-list-wrapper-active')) {
            element.classList.add('services__item-active');
            materialSymbols.innerHTML = 'expand_more';
        } else {
            element.classList.remove('services__item-active');
            materialSymbols.innerHTML = 'expand_less';
        }

    })
})

