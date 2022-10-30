<section class="cart__product-container">

    <section class="cart__title-container">
        <h1 class="cart__title-h1">Корзина товаров</h1>
    </section>

    <ul class="cart__product-list">

        <li class="cart__product-item-title">
            <p class="cart__product-title cart__product-title--number">#</p>
            <p class="cart__product-title cart__product-title--image-wrapper">изображение</p>
            <p class="cart__product-title cart__product-title--name">название</p>
            <p class="cart__product-title cart__product-title--color">цвет</p>
            <p class="cart__product-title cart__product-title--category">тип</p>
            <p class="cart__product-title cart__product-title--price">цена</p>
            <p class="cart__product-title cart__product-title--quantity">количество</p>
            <p class="cart__product-title cart__product-title--sum">сумма</p>
            <p class="cart__product-title cart__product-title--delete">удалить</p> 
        </li>

        @if (count($products))

            @php
                $basketCost = 0;
            @endphp

                @foreach($products as $product)
                    @php
                        $itemPrice = $product->product_price;
                        $quantity = $product->pivot->quantity;
                        $itemCost = $itemPrice * $quantity;
                        $basketCost = $basketCost + $itemCost;
                        
                    @endphp


                    <li class="cart__product-item">

                        <p class="cart__product-number">{{ $loop->iteration }}</p>
                        <div class="cart__product-image-wrapper">
                            <img class="cart__product-img" src="/images/product_images/thumbnail_images/{{$product->getImageTime()}}/{{$product->getImage()}}" alt="">
                        </div>
                        <p class="cart__product-name"><span class="cart__product-span">название</span>{{ $product->product_name }}</p>
                        <p class="cart__product-color"><span class="cart__product-span">цвет</span>{{ $product->product_color }}</p>
                        <p class="cart__product-category"><span class="cart__product-span">категория</span>{{ $product->product_category }}</p>
                        <p class="cart__product-price"><span class="cart__product-span">цена за ед.</span>{{ $itemPrice }} руб.</p>
                        
                        <div class="cart__product-quantity-wrapper">
                        
                            <button wire:click="plus({{$product->id}})" class="cart__product-quantity-button cart__product-quantity-button--plus">
                            &#43;</button>
                            
                            <button wire:click="minus({{$product->id}})" class="cart__product-quantity-button cart__product-quantity-button--minus">&#8722;</button>

                            <p class="cart__product-quntity">{{ $quantity }}</p>
                            
                        </div>

                        <p class="cart__product-sum"><span class="cart__product-span">сумма</span>{{ $itemCost }} руб.</p>
                        

                        <div class="cart__product-delete-wrapper">
                            <button wire:click="remove({{$product->id}})" class="cart__product-delete-button">&#10006;</button>
                        </div>
                        
                        <!-- <div class="cart__product-delete-wrapper">
                            <form action="{{ route('basket.remove', ['id' => $product->id]) }}"
                                method="post">
                                @csrf
                                <button type="submit" class="cart__product-delete-button">&#10006;</button>
                            </form> 
                        </div> -->

                    </li>

                @endforeach
                
                <li class="cart__product-item">   
                    <div class="cart__product-total cart__product-total--left">
                        <p class="cart__product-total-p">ИТОГО</p>
                    </div>

                    
                    <div class="cart__product-total cart__product-total--right">
                        <p class="cart__product-totalresult">{{ $basketCost }} руб.</p>
                    </div>



                </li>  
                
                

        @else
            <li class="cart__product-item">   
                <div class="cart__product-total">
                    <p>Ваша корзина пуста</p>
                </div>
            </li>
        @endif
    </ul>

    @if (count($products))
        <form action="{{ route('basket.clear') }}" method="post" class="text-right">
            @csrf
            <button type="submit" class="button--cart-cleaner">
                <p class="link__text">Очистить корзину</p>
            </button>
        </form>

        <div class="cart__link">
            <a class="cart__link-a" href="/checkout">
                <div class="link link--cart">
                    <p class="link__text">Оформить заказ</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            </a>
        </div>
    @else
        <div class="cart__link">
            <a class="cart__link-a" href="/store">
                <div class="link link--cart">
                    <p class="link__text">Перейти в Магазин</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            </a>
        </div>
    @endif

</section>