if (window.location.pathname == '/private/create') {
    const btn = document.querySelector('.btn-addNewItem');
    const newItemWrapper = document.querySelector('.new-item-wrapper'); //то куда выводим таски

    let itemIndex = 2;
    let id = 100;

    const createTemplate = (itemIndex, id, index) => {
        return `
    <div class="form-item-core">
        <div class="form-item-left">
            
                <p class="form-item-number">${itemIndex} items</p>


                <div class="lot-create-data__inputs-wrapper">


                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="1${id}">animal's type</label>
                            <input form="add-lot-form" id="1${id}" type="text" class="lot-create-data__input-price" name="animal_type[${itemIndex}]" list="item-animal-type" placeholder="animal's type">
                            <datalist id="item-animal-type">
                                <option value="mammoth">
                                <option value="rhinoceros">
                                <option value="bison">
                            </datalist>
                        </div>
                    </div>


                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="4${id}">item's type</label>
                            <input form="add-lot-form" id="4${id}" type="text" class="lot-create-data__input-price" name="item_type[${itemIndex}]" list="item-type" placeholder="item's type">
                            <datalist id="item-type">
                                <option value="tusk">
                                <option value="tooth">
                                <option value="splint">
                                <option value="bark">
                                <option value="horn">
                                <option value="skull">
                                <option value="bone">
                            </datalist>
                        </div>
                    </div>


                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="item-11${id}">item's grade</label>
                            <input form="add-lot-form" id="item-11${id}" type="text" class="lot-create-data__input-price" name="item_grade[${itemIndex}]" list="item-grade" placeholder="item's grade">
                            <datalist id="item-grade">
                                <option value="4">
                                <option value="3">
                                <option value="2">
                                <option value="1">
                                <option value="0">
                            </datalist>
                        </div>
                    </div>
                

                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="item-15${id}">item's rarity</label>
                            <input form="add-lot-form" id="item-15${id}" type="text" class="lot-create-data__input-price" name="item_rarity[${itemIndex}]" list="item-rarity" placeholder="item's rarity">
                            <datalist id="item-rarity">
                                <option value="typical">
                                <option value="rare">
                            </datalist>
                        </div>
                    </div>


                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="item-17${id}">item's color</label>
                            <input form="add-lot-form" id="item-17${id}" type="text" class="lot-create-data__input-price" name="item_color[${itemIndex}]" list="item-color" placeholder="item's color">
                            <datalist id="item-color">
                                <option value="natural">
                                <option value="blue">
                                <option value="brown">
                                <option value="grey">
                            </datalist>
                        </div>
                    </div>


                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="item-22${id}">wet condition</label>
                            <input form="add-lot-form" id="item-22${id}" type="text" class="lot-create-data__input-price" name="item_condition[${itemIndex}]" list="item-condition" placeholder="item's condition">
                            <datalist id="item-condition">
                                <option value="dry">
                                <option value="wet">
                                <option value="25% wet">
                                <option value="50% wet">
                                <option value="75% wet">
                                <option value="100% wet">
                            </datalist>
                        </div>
                    </div>

                    <div class="form-group lot-create-data__input--active">
                        <div class="lot-create-data__input-wrapper">
                            <label for="item-25${id}">item weight</label>
                            <input form="add-lot-form" id="item-25${id}" type="number" class="lot-create-data__input-weight" name="item_weight[${itemIndex}]" value="10" placeholder="10">
                        </div>
                    </div>

                    <input form="add-lot-form" id="item-500" type="hidden" name="lot_id[${itemIndex}]">

                </div>
            
            </div>

        <div class="form-item-right">
            <div class="form-item-delete">
                <p class="form-item-delete-title">delete</p>
            </div>              
        </div>

    </div>
    `
    }

    const fillHtmlList = () => {
        newItemWrapper.innerHTML += createTemplate(itemIndex, id);
    }

    btn.addEventListener('click', () => {
        fillHtmlList();
        itemIndex++;
        id++;
    })


}
