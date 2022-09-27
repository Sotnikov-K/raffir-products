if (document.querySelector('.database-filter__wrapper')) {
    let filter = document.querySelector('.database-filter__wrapper');
    let filterCloseBtn = document.querySelector('.database-filter__close');
    let filtersData = document.querySelectorAll('.database-filter__data');

    filter.addEventListener('click', event => {
        let filter = event.currentTarget;
        let filterData = filter.querySelectorAll('.database-filter__options-data');
        filterData.forEach((el) => {
            el.classList.add('database-filter__options-data--active');
        });
        filter.style.cursor = 'auto';
        filterCloseBtn.classList.add('database-filter__close--active');

        /*collection of filter data*/
        filtersData.forEach((el) => {
            el.classList.add('database-filter__data--active');
        })
    });

    filterCloseBtn.addEventListener('click', event => {
        event.stopPropagation();
        let filterData = filter.querySelectorAll('.database-filter__options-data');
        filterCloseBtn.classList.remove('database-filter__close--active');
        filterData.forEach((el) => {
            el.classList.remove('database-filter__options-data--active');
        });

        /*collection*/
        filtersData.forEach((el) => {
            el.classList.remove('database-filter__data--active');
        })
        filter.style.cursor = 'pointer';
    });
}




