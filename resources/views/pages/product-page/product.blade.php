@extends('layouts.app')
@section('content')
<main class="product">

    <section class="product__title-container">
        <h1 class="product__title-h1">{{Str::ucfirst($product->product_name)}} - {{$product->product_color}}</h1>
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
                    <p class="product__description-p product__description-p--title">{{Str::ucfirst($product->product_name)}} {{$product->product_color}}</p>
                    <div class="product__description-info-wrapper"> 
                        <div class="product__description-info-left"> 
                            <p class="product__description-p"><span class="product__description-p--span">тип</span> {{$product->product_category}}</p>
                            <p class="product__description-p"><span class="product__description-p--span">цвет</span> {{$product->product_color}}</p>
                            <p class="product__description-p"><span class="product__description-p--span">паттерн</span> {{$product->product_pattern}}</p>
                            <p class="product__description-p"><span class="product__description-p--span">вес</span> {{$product->product_weight}} гр.</p>
                        </div>
                        <div class="product__description-info-right"> 
                            <p class="product__description-p"><span class="product__description-p--span">статус</span> {{$product->product_status}}</p>
                            <p class="product__description-p"><span class="product__description-p--span">остаток</span> {{$product->product_quantity}} 12 шт.</p>
                        </div>
                    </div>
                </div>
                
                <div class="databaseItem-content-lotWrapper">
                    <p class="product__description-p"><span class="product__description-p--span">описание</span> {{$product->product_description}}</p>
                </div>
                
                <div class="databaseItem__content-noticeWrapper">
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Все материалы разработаны и произведены в Дании.</span></p>
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Стандартные размеры блоков ({{$product->product_length}} x {{$product->product_width}} x {{$product->product_height}}) указаны в сантиметрах.</span></p>
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span"><a class="databaseItem__content-notice-link" href="/">Информация по стоимости доставки.</a></span></p>
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span"><a class="databaseItem__content-notice-link" href="/">Информация по обработке и полировке материала.</a></span></p>
                </div>   

                <div class="databaseItem__content-noticeWrapper">
                    <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Цена</span> {{number_format($product->product_price, 0, ',', '')}} руб.</p>
                </div>


                <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                    method="post" class="form-inline">
                    @csrf
                    <label for="input-quantity">Количество</label>
                    <input type="text" name="quantity" id="input-quantity" value="1"
                        class="form-control mx-2 w-25">
                    <button type="submit" class="btn btn-success">Добавить в корзину</button>
                </form>



                <!-- <div class="link link--product">
                    <p class="link__text">Добавить в корзину</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div> -->

            </div>
        </div>
        


    </div>  





    <!-- <section class="product-description" id="divisions">
        <p class="product-description__title">
            Примеры
        </p>
        <p class="product-description__main">
            Фотографии готовых ножей с использованием материалов Раффир от наших клиентов и друзей.
        </p>
    </section>

    <div class="example">

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1001.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
            
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1002.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
            
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1003.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
            
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1004.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
            
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1005.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
           
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1006.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
           
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1007.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
           
            </div>
        </div>

        <div class="example__item example__item--product">
            <div class="example__item-content">
                <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1008.jpg" alt="" srcset="">
            </div>
            <div class="example__item-description">
            <p class="example__item-description-text">Нож Кулкова Алексея</p>
           
            </div>
        </div>
        
        
    </div> -->










        
        
</main>
@endsection









