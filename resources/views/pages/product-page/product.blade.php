@extends('layouts.app')
@section('content')
<main class="product">

    <section class="product__title-container">

        <a class="product__back" onclick="javascript:history.back(); return false;">
            <img class="product__back-icon" src="/images/icons/product-back.png">
            <p class="product__back-text">Назад</p>
        </a>

      
        
    </section>

    <div class="databaseItem__data-wrapper">  

        <div class="databaseItem-visual-section">
            <div class="databaseItem-image-section">
                <div class="databaseItem-image-wrapper">
                    <a class="databaseItem-gallery">
                        <img class="databaseItem-image" src="https://imgholder.ru/500x500/1f1f1f/adb9ca&text=Раффир+Россия&fz=20" alt="">
                    </a>
                </div>
            </div>
            <div class="databaseItem-images-section">
                @foreach($imageArray as $image)
                    <div class="databaseItem-images-wrapper">
                            <img class="databaseItem-images" src="/images/product_images/micro_images/{{$product->getImageTime()}}/{{$image}}" alt="">       
                    </div>
                @endforeach
            </div>
        </div>   
       
        <div class="product__description-section">
            <div class="product__description-data">
                <div class="product__description-info">    
                    <p class="product__title-h1">{{Str::ucfirst($product->product_name)}} - {{$product->product_color}}</p>
                    
                </div>
                
                <div class="product__description-status">
                    <p class="product__description-status-p">{{$product->product_status}} {{$product->product_quantity}} шт.</p>
                </div>

                <div class="product__price">
                    <p class="product__price-p"><span class="product__price-span">Цена</span> {{$product->product_price}} руб.</p>
                </div>

               
                @livewire('add-button', ['product_id' => $product->id])

                
                <div class="product__description-wrapper">
                    <div class="product__description-parameter">
                        <p class="product__description-title">тип</p>
                        <p class="product__description-p">{{$product->product_category}}</p>
                    </div> 
                    <div class="product__description-parameter">
                        <p class="product__description-title">паттерн</p>
                        <p class="product__description-p">{{$product->product_pattern}}</p>
                    </div> 


                    @if( $product->product_shape == 'клинок' )

                        <div class="product__description-parameter">
                            <p class="product__description-title">дизайн</p>
                            <p class="product__description-p">{{$product->product_blade_design}}</p>
                        </div>

                        <div class="product__description-parameter">
                            <p class="product__description-title">модель клинка</p>
                            <p class="product__description-p">{{$product->product_blade_model}}</p>
                        </div>
                    
                        <div class="product__description-parameter">
                            <p class="product__description-title">твердость клинка</p>
                            <p class="product__description-p">{{$product->product_blade_hardness}} HRC</p>
                        </div>

                        <div class="product__description-parameter">
                            <p class="product__description-title">обработка клинка</p>
                            <p class="product__description-p">{{$product->product_blade_finish}}</p>
                        </div>

                        <div class="product__description-parameter">
                            <p class="product__description-title">сталь</p>
                            <p class="product__description-p">{{$product->product_steel_type}}</p>
                        </div>

                        <div class="product__description-parameter">
                            <p class="product__description-title">стиль</p>
                            <p class="product__description-p">{{$product->product_blade_style}}</p>
                        </div>

                    @else

                        <div class="product__description-parameter">
                            <p class="product__description-title">цвет</p>
                            <p class="product__description-p">{{$product->product_color}}</p>
                        </div>

                    @endif


                    
                </div> 




                <div class="databaseItem__content-noticeWrapper">
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">{{$product->product_description}}</span></p>
                </div>  
                
                <div class="databaseItem__content-noticeWrapper">
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Все материалы разработаны и произведены в Дании.</span></p>

                    

                    
                    @if( $product->product_shape == 'клинок' )

                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Размер клинка ({{$product->product_length}} x {{$product->product_width}} x {{$product->product_thickness}}) указаны в сантиметрах.</span></p>

                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Вес одного клинка  {{$product->product_weight}} гр.</span></p>

                    @else

                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Стандартный вес одного блока {{$product->product_weight}} гр.</span></p>

                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Стандартный размер одного блока ({{$product->product_length}} x {{$product->product_width}} x {{$product->product_height}}) указаны в сантиметрах.</span></p>

                    @endif


                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span"><a class="databaseItem__content-notice-link" href="/">Информация по стоимости доставки.</a></span></p>

                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span"><a class="databaseItem__content-notice-link" href="/">Информация по обработке и полировке материала.</a></span></p>
                </div>   

            </div>
        </div>
        
    </div>  












        
        
</main>
@endsection









