@extends('layouts.app')

@section('content')
    <main class="dashboard-create">

        <section class="dashboard-create__title-container">
            <h1 class="dashboard-create__title-h1">Редактирование товара</h1>
        </section>
        
        <section class="dashboard-create__control-panel">
            <div class="dashboard__control-title">
                <p>Добавить новый клинок</p>
                <p>{{dd($product)}}</p>
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
                        <input form="add-product" type="hidden" name="product_category" value="клинок">

                        <!-- Артикул товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Артикул товара</label>
                            <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_index" placeholder="Артикул материала" list="product_index">
                            <datalist id="product_index">
                                <option value="10400101">
                                <option value="10400201">
                                <option value="10400301">
                                <option value="10400401"> 
                                <option value="10400501">
                            </datalist>
                        </div>

                        <input form="add-product" type="hidden" name="product_shape" value="клинок">  
                        <input form="add-product" type="hidden" name="product_color" value="натуральный"> 

                        <!-- Наименование товара -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Наименование товара</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_name" list="name" placeholder="Название материала">
                            <datalist id="name">
                                <option value="клинок скандинавский охотничий">
                            </datalist>
                        </div>

                        <!-- Модель клинка -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Модель клинка</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_blade-model" placeholder="Модель клинка">
                        </div>

                        <!-- Дизайн клинка -->
                        <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Дизайн клинка</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_blade-design" placeholder="Дизайн клинка">
                        </div>

                         <!-- Паттерн товара -->
                         <div class="form-group lot-create-data__input-wrapper">
                            <label for="product_pattern" class="dashboard-create__product-title">Паттерн товара</label>
                            <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_pattern" list="pattern" placeholder="Паттерн материала">
                            <datalist id="pattern">
                                <option value="облако">
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
                                <label for="product_height" class="dashboard-create__product-title">Толщина</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_thickness" placeholder="толщина" value="25">          
                            </div>

                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Вес материала</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_weight" placeholder="Вес материала" value="160">          
                            </div>

                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Твердость материала</label>  
                                <input form="add-product" type="number" class="product-input dashboard-create__product-input" name="product_blade-hardness" placeholder="твердость материала" value="60">          
                            </div>

                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Обработка материала</label>  
                                <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_blade-finish" placeholder="обработка материала" value="протравленный и полированый">          
                            </div>

                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Тип стали</label>  
                                <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_steel-type" placeholder="тип стали" value="110 слоёв, нержавеющий дамаск, 440С/N690 высоколегированная сталь">          
                            </div>

                            <div class="form-group lot-create-data__input-wrapper dashboard-create__input-wrapper--parameters">
                                <label for="product_weight" class="dashboard-create__product-title">Стиль клинка</label>  
                                <input form="add-product" type="text" class="product-input dashboard-create__product-input" name="product_blade-style" placeholder="стиль клинка" value="Пуукко, всадной монтаж">          
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