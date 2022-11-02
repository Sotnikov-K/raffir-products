document.querySelectorAll('.dropdown').forEach(function (dropDownWrapper) {

    const dropDownBtn = dropDownWrapper.querySelector('.dropdown__button');
    const dropDownList = dropDownWrapper.querySelector('.dropdown__list');
    const dropDownListItems = dropDownList.querySelectorAll('.dropdown__list-item');
    const dropDownInput = dropDownWrapper.querySelector('.dropdown__input-hidden');

    //Клик по кнопке. Открыть/Закрыть select.
    dropDownBtn.addEventListener('click', function () {
        dropDownList.classList.toggle('dropdown__list--visible');
        this.classList.add('dropdown__button--active');
    });

    //Выбор элемента списка. Запомнить выбранное значение. Закрыть дропдаун.
    dropDownListItems.forEach(function (listItem) {
        listItem.addEventListener('click', function (e) {
            e.stopPropagation();
            dropDownBtn.innerText = this.innerText;
            dropDownBtn.focus();
            dropDownInput.value = this.dataset.value;
            dropDownList.classList.remove('dropdown__list--visible');
        });
    });

    //клик снаружи Дропдауна. Закрыть дропдаун.
    document.addEventListener('click', function (e) {
        if (e.target !== dropDownBtn) {
            dropDownList.classList.remove('dropdown__list--visible');
            dropDownBtn.classList.remove('dropdown__button--active');
        }
    });

    //Нажатие на Tab или Escape. Закрыть дропдаун.
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab' || e.key === 'Escape') {
            dropDownList.classList.remove('dropdown__list--visible');
            dropDownBtn.classList.remove('dropdown__button--active');
        }
    });


});
