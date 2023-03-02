@extends('layouts.app')

@section('content')
    <main class="dashboard-create">

        <section class="dashboard-create__title-container">
            <h1 class="dashboard-create__title-h1">Редактирование товара</h1>
        </section>
        
        <section class="dashboard-create__control-panel">


            <div class="dashboard__control-title">
                <p>Изменить параметры</p>
            </div>

           

            <form class="dashboard-create__form" id="add-product" action="/dashboard/product/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="dashboard-edit__form-data">

                            <div class="dashboard-edit__form-data-image">                     
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
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_name" class="dashboard-edit__form-input-title">Категория товара</label>
                                <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_category" value="{{$product->product_category}}">
                            </div>



                            <!-- Артикул товара -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_name" class="dashboard-edit__form-input-title">Артикул товара</label>
                                <input form="add-product" type="number" class="dashboard-edit__form-input" name="product_index" value="{{$product->product_index}}">
                                
                            </div>

                            <!-- форма товара -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_shape" class="dashboard-edit__form-input-title">Форма товара</label>
                                <input form="add-product" class="dashboard-edit__form-input" type="text" name="product_shape" value="{{$product->product_shape}}">
                            </div>

                            <!-- цвет товара -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_shape" class="dashboard-edit__form-input-title">цвет товара</label>
                                <input form="add-product" class="dashboard-edit__form-input" type="text" name="product_color" value="{{$product->product_color}}">
                            </div>

                            <!-- Наименование товара -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_name" class="dashboard-edit__form-input-title">Наименование товара</label>
                                <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_name" value="{{$product->product_name}}"> 
                            </div>







                            @if($product->product_category == 'клинок')

                                <!-- Модель клинка -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_name" class="dashboard-edit__form-input-title">Модель клинка</label>
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_blade_model"
                                    value="{{$product->product_blade_model}}">
                                </div>

                                <!-- Дизайн клинка -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_name" class="dashboard-edit__form-input-title">Дизайн клинка</label>
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_blade_design" 
                                    value="{{$product->product_blade_design}}">
                                </div>

                                <!-- Твердость материала -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_weight" class="dashboard-edit__form-input-title">Твердость материала</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_blade_hardness" placeholder="твердость материала" value="{{$product->product_blade_hardness}}">          
                                </div>

                                <!-- Обработка материала -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_weight" class="dashboard-edit__form-input-title">Обработка материала</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_blade_finish" placeholder="обработка материала" value="{{$product->product_blade_finish}}">          
                                </div>

                                <!-- Тип стали -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_weight" class="dashboard-edit__form-input-title">Тип стали</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_steel_type" value="{{$product->product_steel_type}}">          
                                </div>

                                <!-- Стиль клинка -->
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_weight" class="dashboard-edit__form-input-title">Стиль клинка</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_blade_style" value="{{$product->product_blade_style}}">          
                                </div>

                            @endif


                            
                            <!-- Паттерн товара -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_pattern" class="dashboard-edit__form-input-title">Паттерн товара</label>
                                <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_pattern" value="{{$product->product_pattern}}">
                                
                            </div>   

                            <!-- статус товара --> 
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_status" class="dashboard-edit__form-input-title">Статус товара</label>  
                                <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_status" list="product_status" placeholder="Статус товара" value="{{$product->product_status}}">
                                <datalist id="product_status">
                                    <option value="в продаже">
                                    <option value="продается со скидкой">
                                    <option value="продается по акции">
                                </datalist>
                            </div>

                            <!-- Количество на остатке -->
                            <div class="dashboard-edit__form-data-input">
                                <label for="product_status" class="dashboard-edit__form-input-title">Количество на остатке</label>   
                                <input form="add-product" type="number" class="dashboard-edit__form-input" name="product_quantity" value="{{$product->product_quantity}}">          
                            </div>


                        <div class="dashboard-create__product-parameters-wrapper-outer">   
                            
                            
                        
                            <p class="dashboard-create__product-parameters-title">Основные параметры</p>
                            <div class="dashboard-create__product-parameters-wrapper-inner">

                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_length" class="dashboard-edit__form-input-title">Длина</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_length" placeholder="Длина" value="{{$product->product_length}}">          
                                </div>

                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_width" class="dashboard-edit__form-input-title">Ширина</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_width" placeholder="Ширина" value="{{$product->product_width}}">          
                                </div>

                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_height" class="dashboard-edit__form-input-title">Толщина</label>  
                                    <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_thickness" value="{{$product->product_thickness}}">          
                                </div>
                                
                                <div class="dashboard-edit__form-data-input">
                                    <label for="product_weight" class="dashboard-edit__form-input-title">Вес материала</label>  
                                    <input form="add-product" type="number" class="dashboard-edit__form-input" name="product_weight" placeholder="Вес материала" value="{{$product->product_weight}}">          
                                </div>

                            </div>
                        </div>

                        <div class="dashboard-edit__form-data-input">
                            <label for="product_price" class="dashboard-edit__form-input-title">Стоимость</label>  
                            <input form="add-product" type="number" class="dashboard-edit__form-input" name="product_price" placeholder="Стоимость" value="{{$product->product_price}}">          
                        </div>

                        <div class="dashboard-edit__form-data-input">
                            <label for="product_description" class="dashboard-edit__form-input-title">Описание материала</label>  
                            <input form="add-product" type="text" class="dashboard-edit__form-input" name="product_description" placeholder="Описание материала" value="{{$product->product_description}}">
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