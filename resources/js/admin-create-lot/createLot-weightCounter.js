if (window.location.pathname == '/private/create') {

    let lotAnnotation = document.querySelector('.form-control-lot-annotation');
    let lotWeight = document.querySelector('.form-lot-weight');
    lotWeight.value = 30;
    let itemsWeight;
    let lotSizeTitle = document.querySelector('.form-control-lot-size-title');

    document.addEventListener('click', event => {
        let lotCount = document.querySelector('.form-control-lot-count');
        itemsWeight = document.querySelectorAll('.lot-create-data__input-weight');
        let counter = 0;
        itemsWeight.forEach(element => {
            counter += +element.value;
            lotWeight.value = counter;

            // console.log(lotWeight.value);

            if (lotWeight.value <= 3) {
                lotSizeTitle.value = 'not big';
            }
            else if (lotWeight.value > 3 && lotWeight.value <= 30) {
                lotSizeTitle.value = 'average';
            }
            else if (lotWeight.value > 30 && lotWeight.value <= 50) {
                lotSizeTitle.value = 'big';
            }
            else if (lotWeight.value > 50) {
                lotSizeTitle.value = 'huge';
            }
        });

        lotCount.value = itemsWeight.length;

        //Auto generation of lot's annotation
        function setItemORItems(itemsCount) {
            if (itemsCount > 1) {
                return itemsCount + ' ' + 'items';
            } else return 'one item';
        }

        function lotAnnotationTemplate(lotSizeTitle, lotWeight, itemsCount) {
            return `This ${lotSizeTitle} ( a total weight of ${lotWeight} kilograms ) lot from Yakutia contains ${itemsCount}.`
        }

        let lotAnnotationString = lotAnnotationTemplate(lotSizeTitle.value, lotWeight.value, setItemORItems(lotCount.value));
        lotAnnotation.value = lotAnnotationString;

        // console.log(lotCount.value);
    });

};
