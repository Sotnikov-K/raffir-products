@extends('layouts.app')

@section('content')

    <main class="cart">

        <section class="cart__title-container">
            <h1 class="cart__title-h1">Корзина товаров</h1>
        </section>

       

        <section class="cart__product-container">

            <ul class="cart__product-list">
                <li class="cart__product-item cart__product-item--title">
                    <p class="cart__product-title-number">#</p>
                    <p class="cart__product-title-image-wrapper">изображение</p>
                    <p class="cart__product-title-name">название</p>
                    <p class="cart__product-title-color">цвет</p>
                    <p class="cart__product-title-category">тип</p>
                    <p class="cart__product-title-price">цена</p>
                    <p class="cart__product-title-quantity">количество</p>
                    <p class="cart__product-title-sum">сумма</p>
                    <p class="cart__product-title-delete">удалить</p> 
                </li>
                <li class="cart__product-item">
                    <p class="cart__product-number">1</p>
                    <div class="cart__product-image-wrapper">
                        <img class="cart__product-img" src="images\product_images\micro_images\2022-10\композит-1-1.png" alt="delete">
                    </div>
                    <p class="cart__product-name">Алюм Волна</p>
                    <p class="cart__product-color">красный</p>
                    <p class="cart__product-category">композит</p>
                    <p class="cart__product-price">2100 руб.</p>
                    <div class="cart__product-quantity-wrapper">
                        <button class="cart__product-quantity-button cart__product-quantity-button--plus">&#43;</button>
                        <button class="cart__product-quantity-button cart__product-quantity-button--minus">&#8722;</button>
                        <p class="cart__product-quntity">10</p>
                    </div>
                    <p class="cart__product-sum">4200 руб</p>
                    <div class="cart__product-delete-wrapper">
                        <button class="cart__product-delete-button">&#10006;</button>  
                    </div>
                </li>
                
                <li class="cart__product-item">   
                    <div class="cart__product-total cart__product-total--left">
                        <p class="cart__product-total-p">ИТОГО</p>
                    </div>
                    <div class="cart__product-total cart__product-total--right">
                        <p class="cart__product-totalresult">8200 руб</p>
                    </div>
                </li>
            </ul>

            <div class="link link--cart">
                <p class="link__text">Оформить заказ</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
            </div>

        </section>
    </main>
@endsection