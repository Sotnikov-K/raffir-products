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
                        
                       

                    <form action="{{ route('basket.saveorder') }}" method="post" class="form form--order">
                        @csrf

                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="surname">Фамилия*</label>
                                <input class="input" type="text" name="surname" placeholder="Кузнецов" required maxlength="255" value="{{ old('surname') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="name">Имя*</label>
                                <input class="input" type="text" name="name" placeholder="Степан" required maxlength="255" value="{{ old('name') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="patronymic">Отчество</label>
                                <input class="input" type="text" name="patronymic" placeholder="Афанасьевич" maxlength="255" value="{{ old('patronymic') ?? '' }}">
                            </div>
                        </div>

                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="country">Страна*</label>
                                <input class="input" type="text" name="country" value="Россия" required maxlength="255" value="{{ old('country') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="region">Регион*</label>
                                <input class="input" type="text" name="region" placeholder="Регион" required maxlength="255" value="{{ old('region') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="city">Город*</label>
                                <input class="input" type="text" name="city" placeholder="Город" required maxlength="255" value="{{ old('city') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="street">Улица*</label>
                                <input class="input" type="text" name="street" placeholder="Улица" required maxlength="255" value="{{ old('street') ?? '' }}">
                            </div>
                            <div class="input-wrapper input-wrapper--home">
                                <label class="label" for="building">Дом*</label>
                                <input class="input" type="text" name="building" placeholder="Номер" required maxlength="255" value="{{ old('building') ?? '' }}">
                            </div>
                            <div class="input-wrapper input-wrapper--flat">
                                <label class="label" for="flat">Квартира</label>
                                <input class="input" type="text" name="flat" placeholder="Номер" maxlength="255" value="{{ old('flat') ?? '' }}">
                            </div>
                        </div>


                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="index">Индекс*</label>
                                <input class="input" type="number" name="index" placeholder="680007" required maxlength="255" value="{{ old('index') ?? '' }}">
                            </div>
                        </div>

                        <div class="input-group-wrapper">
                            <div class="input-wrapper">
                                <label class="label" for="name">Адрес почты (E-mail)</label>
                                <input class="input" type="email"  name="email" placeholder="kuznec8@yandex.ru" maxlength="255" value="{{ old('email') ?? '' }}">
                            </div>
                            <div class="input-wrapper">
                                <label class="label" for="name">Номер телефона*</label>
                                <input class="input" type="tel" id="phone" name="phone" placeholder="+7 925 505 20 35" required maxlength="255" value="{{ old('phone') ?? '' }}">
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="">Оформить</button>
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
            <a type="submit" class="cart__link-a" href="/checkout">
                <div class="link link--cart">
                    <p class="link__text">Заказать</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            </a>
        </div>

    </section>

</main>