<section class="store__product-container">
    
    @if(sizeof($products) > 0)
        @foreach($products as $product)
            <a wire:key="item-{{ $product->id }}" class="store__product" id="targetclass" href="store/{{$product->slug}}">
                <div class="store__product-data">
                    
                    <div class="store__product-image"> 
                        <img class="store__product-img" loading="lazy" src="/images/product_images/thumbnail_images/{{$product->getImageTime()}}/{{$product->getImage()}}" alt="Image">   
                    </div>    

                    <p class="store__product-title">{{$product->product_name}}</p>
                    <p class="store__product-term">{{$product->product_color}}</p>
                    <p class="store__product-price">{{$product->product_price}} руб.</p>

                    <form wire:submit.prevent="add( {{ $product->id }} )">
                        <button type="submit" wire:click="refreshCartCountBar" class="button--store">
                            <p class="link__text">В корзину</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                        </button>
                    </form>

                </div>
            </a>        
        @endforeach

    @else
        <a class="store__product" id="targetclass">
            <div class="store__product-data">
                
                <div class="store__product-image">        
                    <img class="store__product-img" src="/images/technical_images/no-item.png" alt="">
                </div>    

                <p class="store__product-title">Нет материалов</p>
                <p class="store__product-term">с данным фильтром</p>
                <p class="store__product-price">--- /// ---</p>

                <form>
                    <button wire:click="refreshFilter" class="button--store">
                        <p class="link__text">Сбросить</p>
                        <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                    </button>
                </form>

            </div>
        </a>        
    @endif



</section>
