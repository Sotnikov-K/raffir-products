if (document.querySelector('.admin-form')) {






    (function lotAnnotation() {
        let types = document.querySelectorAll('.form-type');
        types.forEach(element => {
            element.addEventListener('change', (event) => {
                e = event.currentTarget;
                console.log(e.value);
            })
        })
    }());















    let itemForm = document.querySelector('.form-item');
    let lotForm = document.querySelector('.form-lot');
    itemForm.classList.add('admin-form-item-active');

    (function itemORlot() {
        let formSelector = document.querySelectorAll('.form-selector');
        formSelector.forEach((element) => {
            element.addEventListener('click', (event) => {
                let e = event.currentTarget;
                itemForm.classList.remove('admin-form-item-active');
                lotForm.classList.remove('admin-form-lot-active');
                if (e.value == 'item') {
                    itemForm.classList.add('admin-form-item-active');
                } else if (e.value == 'lot') {
                    lotForm.classList.add('admin-form-lot-active');
                }
            })
        })
    }());
}