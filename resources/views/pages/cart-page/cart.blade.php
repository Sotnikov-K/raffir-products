@extends('layouts.app')

@section('content')

    <main class="cart">

        <!-- <section class="cart__title-container">
            <h1 class="cart__title-h1">Корзина товаров</h1>
        </section> -->

    
        <section class="cart__product-container">

            <section class="cart__title-container">
                <h1 class="cart__title-h1">Корзина товаров</h1>
            </section>

            <ul class="cart__product-list">
                <li class="cart__product-item cart__product-item--title">
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
                                $itemQuantity =  $product->pivot->quantity;
                                $itemCost = $itemPrice * $itemQuantity;
                                $basketCost = $basketCost + $itemCost;
                            @endphp


                            <li class="cart__product-item">
                                <p class="cart__product-number">{{ $loop->iteration }}</p>
                                <div class="cart__product-image-wrapper">
                                    <img class="cart__product-img" src="/images/product_images/thumbnail_images/{{$product->getImageTime()}}/{{$product->getImage()}}" alt="">
                                </div>
                                <p class="cart__product-name">{{ $product->product_name }}</p>
                                <p class="cart__product-color">{{ $product->product_color }}</p>
                                <p class="cart__product-category">{{ $product->product_category }}</p>
                                <p class="cart__product-price">{{ number_format($itemPrice, 2, '.', '') }} руб.</p>
                                <div class="cart__product-quantity-wrapper">
                                    
                                    <form action="{{ route('basket.plus', ['id' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="cart__product-quantity-button cart__product-quantity-button--plus">&#43;</button>
                                    </form>

                                    <form action="{{ route('basket.minus', ['id' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="cart__product-quantity-button cart__product-quantity-button--minus">&#8722;</button>
                                    </form>

                                    <p class="cart__product-quntity">{{ $itemQuantity }}</p>
                                </div>
                                <p class="cart__product-sum">{{ number_format($itemCost, 2, '.', '') }} руб.</p>
                                <div class="cart__product-delete-wrapper">


                                    <form action="{{ route('basket.remove', ['id' => $product->id]) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="cart__product-delete-button">&#10006;</button>
                                    </form>


                                    
                                </div>
                            </li>


                           
                        @endforeach
                        
                            <li class="cart__product-item">   
                                <div class="cart__product-total cart__product-total--left">
                                    <p class="cart__product-total-p">ИТОГО</p>
                                </div>
                                <div class="cart__product-total cart__product-total--right">
                                    <p class="cart__product-totalresult">{{ number_format($basketCost, 2, '.', '') }} руб.</p>
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


                <div class="link link--cart">
                    <p class="link__text">Оформить заказ</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            @else
                <div class="link link--cart">
                    <p class="link__text">Перейти в Магазин</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            @endif



            
        @php
            class user {

                private $name;
                private $job;
                private $age;

                function __construct($name, $job, $age){
                    $this->name = $name;
                    $this->job = $job;
                    $this->age = $age;
                }

                public function __set($name, $value){
                    $this->name = $value;
                }





            }


            $agent = new User('Kirill', 'it', '34');
            
           

           





        @endphp





        </section>
    </main>
@endsection