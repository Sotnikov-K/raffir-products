@extends('layouts.app')

@section('content')

<main class="checkout">

    <section class="checkout__order">

        <section class="checkout__title-container">
            <h1 class="checkout__title-h1">Оформление заказа</h1>
        </section>


        <div class="checkout__data">

            <ul class="checkout__data-item">
                <li class="checkout__product-item-title">
                    <p class="checkout__input-title">Пожалуйста, заполните форму заказа:</p> 
                </li>

                <li class="checkout__product-item">   
                    
                    <form action="{{ route('basket.clear') }}" method="post" class="form form--order">
                        @csrf


                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="surname">Фамилия*</label>
                                <input class="input" type="text" placeholder="Кузнецов">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="name">Имя*</label>
                                <input class="input" type="text" placeholder="Степан">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="name">Отчество</label>
                                <input class="input" type="text" placeholder="Афанасьевич">
                            </div>
                        </div>

                        <div class="input-group-wrapper">

                            <div class="input-wrapper">
                                <label class="label" for="name">Страна</label>
                                <input class="input" type="text" name="country" value="Россия">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="region">Регион</label>
                                <input class="input" type="text" name="region" placeholder="Регион">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="city">Город</label>
                                <input class="input" type="text" name="city" placeholder="Город">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="name">Улица</label>
                                <input class="input" type="text" placeholder="Улица">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="name">Дом</label>
                                <input class="input" type="number" placeholder="Дом №">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="name">Квартира</label>
                                <input class="input" type="number" placeholder="Квартира №">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="name">Индекс</label>
                                <input class="input" type="number" placeholder="680007">
                            </div>

                        </div>


                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="name">E-mail</label>
                                <input class="input" type="text" placeholder="kuznec8@yandex.ru">
                            </div>

                            <div class="input-wrapper">
                                <label class="label" for="name">Номер телефона</label>
                                <input class="input" type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="+7 925 505 20 35" required>
                            </div>
                        </div>

                    
                    </form>



                </li>

            </ul>

            <ul class="checkout__data-item--right">
                <li class="checkout__product-item-title checkout__product-item-title--order">
                    <p class="checkout__input-title">Информация о заказе</p> 
                </li>




                <li class="checkout__product-item checkout__product-item--order">

                    <div class="checkout__order-listing">
        
                        <div class="checkout__order-column checkout__order-column--name">
                            <p class="checkout__order-list-item">Композит Нобл Уран Синий</p>
                            <p class="checkout__order-list-item">Композит Нобл Уран</p>
                            <p class="checkout__order-list-item">Композит Нобл Уран Синий</p>
                        </div>

                        <div class="checkout__order-column checkout__order-column--quantity">
                            <p class="checkout__order-list-item checkout__order-list-item--quantity">1</p>
                            <p class="checkout__order-list-item checkout__order-list-item--quantity">2</p>
                            <p class="checkout__order-list-item checkout__order-list-item--quantity">5</p>
                        </div>


                    </div>

                    <div class="checkout__order-product-price">
                            <p class="checkout__order-list-item">Стоимость доставки</p>
                    </div>

                    <div class="checkout__order-product-price">
                            <p class="checkout__order-list-item">Общая стоимость</p>
                    </div>
                    
                    
                </li>





            </ul>

        </div>

        

       

        
        <div class="cart__link-checkout">
            <a class="cart__link-a" href="/checkout">
                <div class="link link--cart">
                    <p class="link__text">Заказать</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            </a>
        </div>

    </section>

</main>

@endsection