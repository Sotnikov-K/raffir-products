<section class="lot-create-data">
    <div class="lot-create-data__wrapper">

        <form class="lot-create-data__form" id="add-lot-form" action="/private" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="lot-create-data__lot-core-wrapper">
                <div class="lot-create-data__lot-core">
                    <p class="lot-create-data__lot-title">Lot</p>
                    <div class="lot-create-data__inputs-wrapper">


                        <div class="form-group lot-create-data__input--add-image">
                            <div class="lot-create-data__input-wrapper">
                                <label for="field__file-2">Image</label>
                                <div class="lot-create-data__image-input-wrapper">

                                    <input class="form-type field field__file" id="field__file-2" form="add-lot-form" type="file" name="images[]" accept="image/*" multiple>
                                        
                                    <label class="field__file-wrapper" for="field__file-2">
                                        <span class="input__file-icon-wrapper"><img class="input__file-icon" src="/images/icons/add-photo-icon.png" alt="choose file" width="25"></span>
                                        <div class="field__file-fake">not added</div>
                                        <div class="field__file-button">add</div>
                                    </label>
                                </div> 
                            </div>
                        </div>


                        <div class="form-group lot-create-data__input--active">
                            <div class="lot-create-data__input-wrapper">
                                <label for="animal_type">Status</label>
                                <input form="add-lot-form" type="text" class="lot-create-data__input-price" name="lot_status" list="lot-status" placeholder="status">
                                <datalist id="lot-status">
                                    <option value="standart">
                                    <option value="on sale">
                                    <option value="hot">
                                    <option value="sold">
                                </datalist>
                            </div>
                        </div>


                        <div class="form-group lot-create-data__input--active">
                            <div class="lot-create-data__input-wrapper">
                                <label for="lot_price">Lot's price in USD</label>
                                <input form="add-lot-form" type="number" class="lot-create-data__input-price" name="lot_price" value="" placeholder="100.00">          
                            </div>
                        </div>


                        <div class="form-group form-group-hidden">           
                            <input class="form-type" form="add-lot-form" id="radio-100" type="hidden" name="type" value="lot" checked>
                        </div> 

                        <div class="form-group form-group-hidden">
                            <input form="add-lot-form" type="hidden" class="form-lot-weight" name="lot_weight" value="0" placeholder="20" readonly>
                        </div>

                        <div class="form-group form-group-hidden">
                            <input form="add-lot-form" type="hidden" class="" name="lot_origin" value="yakutia">
                        </div>

                        <div class="form-group form-group-hidden">
                            <input form="add-lot-form" type="hidden" class=" form-control-lot-annotation" name="lot_annotation" value="">
                        </div>

                        <div class="form-group form-group-hidden">
                            <input form="add-lot-form" type="hidden" class=" form-control-lot-size-title" name="lot_size_title" value="average">
                        </div>

                        <div class="form-group form-group-hidden">
                            <input form="add-lot-form" type="hidden" class=" form-control-lot-count" name="lot_count" value="1">
                        </div>

                    </div> 

                </div> 
            </div> 


            <div class="form-item-core">
                <div class="form-item-left">
                    <p class="form-item-number">1 item</p>
                    <div class="lot-create-data__inputs-wrapper">


                        <div class="form-group lot-create-data__input--active">
                            <div class="lot-create-data__input-wrapper">
                                <label for="animal-1">animal's type</label>
                                <input form="add-lot-form" id="animal-1" type="text" class="lot-create-data__input-price" name="animal_type[1]" list="item-animal-type" placeholder="animal's type">
                                <datalist id="item-animal-type">
                                    <option value="mammoth">
                                    <option value="rhinoceros">
                                    <option value="bison">
                                </datalist>
                            </div>
                        </div>


                        <div class="form-group lot-create-data__input--active">
                            <div class="lot-create-data__input-wrapper">
                                <label for="item-type">item's type</label>
                                <input form="add-lot-form" id="item-10" type="text" class="lot-create-data__input-price" name="item_type[1]" list="item-type" placeholder="item's type">
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
                                <label for="item_grade">item's grade</label>
                                <input form="add-lot-form" id="item-11" type="text" class="lot-create-data__input-price" name="item_grade[1]" list="item-grade" placeholder="item's grade">
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
                                <label for="item_rarity">item's rarity</label>
                                <input form="add-lot-form" id="item-15" type="text" class="lot-create-data__input-price" name="item_rarity[1]" list="item-rarity" placeholder="item's rarity">
                                <datalist id="item-rarity">
                                    <option value="typical">
                                    <option value="rare">
                                </datalist>
                            </div>
                        </div>


                        <div class="form-group lot-create-data__input--active">
                            <div class="lot-create-data__input-wrapper">
                                <label for="item_color">item's color</label>
                                <input form="add-lot-form" id="item-19" type="text" class="lot-create-data__input-price" name="item_color[1]" list="item-color" placeholder="item's color">
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
                                <label for="item_condition">wet condition</label>
                                <input form="add-lot-form" id="item-22" type="text" class="lot-create-data__input-price" name="item_condition[1]" list="item-condition" placeholder="item's condition">
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
                                <label for="item_weight">item weight</label>
                                <input form="add-lot-form" id="item-32" type="number" class="lot-create-data__input-weight" name="item_weight[1]" value="10" placeholder="10">
                            </div>
                        </div>
                       

                        <input form="add-lot-form" id="item-500" type="hidden" name="lot_id[1]">

                        
                    </div>

                </div>
                
                <div class="form-item-right">
                    <div class="form-item-delete-inactive">
                        <p class="form-item-delete-title-inactive">delete</p>
                    </div>              
                </div>

            </div>

            <div class="new-item-wrapper">  
            </div>

            <div class="form-addNewItem btn-addNewItem">
                <p class="lot-create-data__button-text">add item</p>
            </div>
 
            <button class="lot-create-data__button-save-lot btn-addNewItem" type="submit">
                <p class="lot-create-data__button-save-text">save lot</p>
            </button>
                
        </form>

    </div>
</section>



