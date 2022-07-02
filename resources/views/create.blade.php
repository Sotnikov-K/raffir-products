@extends('layouts.app')

@section('slider-main')
    <div class="slider-main slider-main-admin">
        <div class="">
            <h1 class="slider-main__title-text slider-main__title-text-home">Admin panel</h1>
            <p class="slider-main__paragraph-text slider-main__paragraph-text-home">Add, modify or delete. You can everything!</p>
        </div>
    </div>
@endsection

@section('content')
    <section class="admin-section">
  
        <div class="admin-form-wrapper">
            <div class="admin-form">

                <div class="form-group">
                    <div class="form-sellect">
                        <div class="form_radio_btn">
                            <input id="type-1" class="form-selector" type="radio" name="type" value="item" checked>
                            <label for="type-1">LOT</label>
                        </div>                                             
                    </div>
                </div> 

                <form class="admin-form-content" id="add-lot-form" action="/private" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="type">lot</label>
                        <div class="form-sellect">
                            <div class="form_radio_btn">
                                <input class="form-type" form="add-lot-form" id="radio-100" type="checkbox" name="type" value="lot" checked>
                                <label for="radio-100">LOT</label>
                            </div>                                              
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="type">slug</label>
                        <div class="form-sellect">
                            <div class="form_radio_btn">
                                <input class="form-type" form="add-lot-form" id="radio-100" type="checkbox" name="slug" value="slug" checked>
                                <label for="radio-100">slug</label>
                            </div>                                              
                        </div>
                    </div>

                    <div class="form-group-item">
                        <div class="form-group">
                            <label for="lot_price">item's price in USD</label>
                            <input form="add-lot-form" type="number" class="form-control form-lot-price" name="lot_price" value="100" placeholder="100">
                        </div>

                        <!-- <div class="form-group">
                            <label for="files">upload item's files</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                name="images[]"
                                accept="image/*" 
                                multiple
                            >
                        </div> -->

                        



                        <div class="form-btn-wrapper">
                            <button class="btn btn-form" type="submit">save item</button>
                        </div>

                    </div>
                </form>






                <form class="admin-form-content form-item admin-form-item" id="add-item-form" action="/private" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="animal_type">animal's type</label>
                        <div class="form-sellect">
                            <div class="form_radio_btn">
                                <input form="add-item-form" id="item-1" type="radio" name="animal_type" value="mammoth" checked>
                                <label for="item-1">Mammoth</label>
                            </div>                       
                            <div class="form_radio_btn">
                                <input form="add-item-form" id="item-2" type="radio" name="animal_type" value="rhinoceros">
                                <label for="item-2">Rhinoceros</label>
                            </div>                        
                            <div class="form_radio_btn">
                                <input form="add-item-form" id="item-3" type="radio" name="animal_type" value="bison">
                                <label for="item-3">Bison</label>
                            </div>
                        </div>
                    </div> 
                    <div class="form-btn-wrapper">
                        <button class="btn btn-form" type="submit">save item</button>
                    </div>
                </form>





            </div>
        </div>


    </section>
@endsection