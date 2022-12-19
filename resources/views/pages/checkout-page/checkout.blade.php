@extends('layouts.app')
@section('content')
    <main class="checkout">
        <section class="checkout__order">
            <section class="checkout__title-container">
                <h1 class="checkout__title-h1">Оформление заказа</h1>
            </section>
            <form action="{{ route('basket.saveorder') }}" method="post" class="form form--order">
                @csrf
                <div class="checkout__data">
                    <li class="checkout__product-item-title">
                        <p class="checkout__input-title">Пожалуйста, заполните форму заказа:</p> 
                    </li>
                    <li class="checkout__product-item">   
                        <div class="checkout__group-wrapper">
                            <div class="checkout__input-wrapper checkout__input-wrapper--name">
                                <label class="label" for="name">Фамилия Имя Отчество*</label>
                                <input class="input" type="text" name="name" placeholder="например: Кузнецов Степан Афанасьевич" required maxlength="255" value="{{ old('surname') ?? 'Сотников Кирилл Андреевич' }}">
                            </div>
                            <div class="checkout__input-wrapper checkout__input-wrapper--email">
                                <label class="label" for="name">Адрес почты ( E-mail )</label>
                                <input class="input" type="email"  name="email" placeholder="kuznec8@yandex.ru" maxlength="255" value="{{ old('email') ?? 'sotnikovmail@yandex.ru' }}">
                            </div>
                            <div class="checkout__input-wrapper checkout__input-wrapper--phone">
                                <label class="label" for="name">Номер телефона*</label>
                                <input class="input" type="tel" id="phone" name="phone" placeholder="+7 925 505 20 35" required maxlength="255" value="{{ old('phone') ?? '+79626759590' }}">
                            </div>
                        </div>
                        <div class="checkout__group-wrapper">
                            <div class="checkout__input-wrapper checkout__input-wrapper--country">
                                <label class="label" for="country">Страна*</label>
                                <input class="input" type="text" name="country" value="Россия" required maxlength="255" value="{{ old('country') ?? '' }}">
                            </div>
                            <div class="checkout__input-wrapper checkout__input-wrapper--index">
                                <label class="label" for="index">Индекс*</label>
                                <input class="input" type="number" name="index" placeholder="680007" required maxlength="255" value="{{ old('index') ?? '680007' }}">
                            </div>
                            <!-- <div class="checkout__input-wrapper checkout__input-wrapper--address">
                                <label class="label" for="address">Адрес*</label>
                                <textarea class="input" type="text" name="address" placeholder="например: пос. Кавалерово, ул. Кузнечная 11, кв.8" rows="3"  required maxlength="255" value="{{ old('address') ?? 'г.Хабаровск ул.Дикопольцева 74А квартира 6' }}"></textarea>
                            </div> -->

                            <div class="checkout__input-wrapper checkout__input-wrapper--address">
                                <label class="label" for="address">Адрес*</label>
                                <input class="input" type="text" name="address" placeholder="например: пос. Кавалерово, ул. Кузнечная 11, кв.8" required maxlength="255" value="{{ old('addres') ?? 'г.Хабаровск ул.Дикопольцева 74А квартира 6' }}">
                            </div>
                            
                        </div>
                    </li>     
                </div>
                <div class="checkout__button-wrapper">
                    <button type="submit" class="checkout__button">
                        <p class="checkout__button-p">Заказать</p>
                        <img class="checkout__button-icon" src="/images/icons/footer-arrow-circle-right-white.png">
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection