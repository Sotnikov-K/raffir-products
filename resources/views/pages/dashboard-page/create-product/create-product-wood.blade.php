@extends('layouts.app')

@section('content')
    <main class="dashboard-create">

        <section class="dashboard-create__title-container">
            <h1 class="dashboard-create__title-h1">Добавление товара</h1>
        </section>
        
        <section class="dashboard-create__control-panel">
            <div class="dashboard__control-title">
                <p>Добавить новый блок дерева</p>
            </div>
            <form class="dashboard-create__form" id="add-product" action="/dashboard" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="dashboard-create__form-data">
                    <div class="form-group lot-create-data__input-wrapper--image">                     
                        <div class="lot-create-data__image-input-wrapper">
                            <input class="form-type field field__file" id="field__file-2" form="add-product" type="file" name="images[]" accept="image/*" multiple>  
                            <label class="field__file-wrapper" for="field__file-2">
                                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="/images/icons/add-photo-icon.png" alt="choose file" width="25"></span>
                                <div class="field__file-fake">Фото не добавлены</div>
                                <div class="field__file-button">Добавить</div>
                            </label>
                        </div>            
                    </div>
                        <!-- категория товара -->
                        <input form="add-product" type="hidden" name="product_category" value="брусок">   
                        <!-- Артикул товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Артикул товара</label>
                            <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_index" placeholder="Артикул материала">
                        </div>
                        <!-- Форма товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Форма товара</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_shape" list="phorma" placeholder="Форма материала">
                            <datalist id="phorma">
                                <option value="блок">
                                <option value="фрагмент">
                                <option value="охота">
                            </datalist>
                        </div>
                        <!-- Наименование товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Наименование товара</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_name" list="name" placeholder="Название материала">
                            <datalist id="name">
                                <option value="тополь">
                                <option value="кап тополя">
                                <option value="бук хс">
                                <option value="бук ус"> 
                                <option value="платан хс">
                                <option value="платан yс">
                                <option value="дуб хс">
                                <option value="дуб yс">
                                <option value="сипо палисандр">
                                <option value="розовое дерево">
                                <option value="кокоболо">
                            </datalist>
                        </div>
                         <!-- Паттерн товара -->
                         <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_pattern" class="dashboard-create__product-title">Паттерн товара</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_pattern" list="pattern" placeholder="Паттерн материала">
                            <datalist id="pattern">
                                <option value="обычный">
                                <option value="кап">
                                <option value="продольная распиловка">
                                <option value="поперечная распиловка">
                                <option value="морёный">
                                <option value="шпальт">
                            </datalist>
                        </div>      
                        <!-- цвет товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_color" class="dashboard-create__product-title">Цвет товара</label>   
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_color" list="color" placeholder="Цвет материала">
                            <datalist id="color">
                                <option value="натуральный">
                                <option value="жёлтый">
                                <option value="оранжевый">
                                <option value="красный">
                                <option value="фиолетовый">
                                <option value="лимонный">
                                <option value="зеленый">
                                <option value="синий">
                                <option value="коричневый"> 
                                <option value="чёрный">
                            </datalist>
                        </div>
                        <!-- статус товара --> 
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_status" class="dashboard-create__product-title">Статус товара</label>  
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_status" list="product_status" placeholder="Статус товара">
                            <datalist id="product_status">
                                <option value="в продаже">
                                <option value="продается со скидкой">
                                <option value="продается по акции">
                            </datalist>
                        </div>
                        <!-- Количество на остатке -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_status" class="dashboard-create__product-title">Количество на остатке</label>   
                            <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_quantity" placeholder="Количество на остатке">          
                        </div>
                    <div class="dashboard-create__product-parameters-wrapper-outer">           
                        <p class="dashboard-create__product-parameters-title">Основные параметры</p>
                        <div class="dashboard-create__product-parameters-wrapper-inner">
                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_length" class="dashboard-create__product-title">Длина</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_length" placeholder="Длина" value="125">          
                            </div>
                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_width" class="dashboard-create__product-title">Ширина</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_width" placeholder="Ширина" value="40">          
                            </div>
                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_height" class="dashboard-create__product-title">Высота</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_height" placeholder="Высота" value="25">          
                            </div>
                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Вес материала</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_weight" placeholder="Вес материала" value="160">          
                            </div>
                        </div>
                    </div>
                    <div class="form-group lot-create-data__input-wrapper">
                        <label for="product_price" class="dashboard-create__product-title">Стоимость</label>  
                        <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_price" placeholder="Стоимость">          
                    </div>
                    <div class="form-group lot-create-data__input-wrapper">
                        <label for="product_description" class="dashboard-create__product-title">Описание материала</label>  
                        <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_description" placeholder="Описание материала">
                    </div>
            </div>
            <div class="dashboard-create__form-button">
                <button class="button button--dashboard__create-product" type="submit">
                    <p class="button--dashboard__create-product-p">Сохранить товар</p>
                    <img class="link__icon" src="/assets/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                </button>
            </div>
            </form>
        </section>
    </main>
@endsection