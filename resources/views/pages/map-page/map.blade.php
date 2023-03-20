@extends('layouts.app')

@section('content')
    <div class="map-wrapper">
        <div class="map-wrapper_left">
            <div class="map">
                <div class="map__home">
                    <p class="map__title">Дом</p>
                    <a class="map__link" href="https://raffir.net">Главная страница Раффир</a>
                    <p class="map__border"></p>
                </div>

                <div class="map__composites">
                    <p class="map__title">Композиты</p>
                    <p class="map__subtitle">по рисунку</p>
                    <a class="map__link" href="https://raffir.net">Волна</a>
                    <a class="map__link" href="https://raffir.net">Луна</a>
                    <a class="map__link" href="https://raffir.net">Васп</a>
                    <a class="map__link" href="https://raffir.net">SFX</a>
                    <div class="spacer"></div>
                    <p class="map__subtitle">по сетке</p>
                    <a class="map__link" href="https://raffir.net">сетка Нобл (Noble)</a>
                    <a class="map__link" href="https://raffir.net">сетка Алюм (Alume)</a>
                    <p class="map__border"></p>
                </div>

                <div class="map__community">
                    <p class="map__title">Сообщество</p>
                    <a class="map__link" href="https://raffir.net">Клиенты</a>
                    <a class="map__link" href="https://raffir.net">Примеры работ</a>
                    <div class="spacer"></div>
                    <p class="map__subtitle">Инфо</p>
                    <a class="map__link" href="https://raffir.net">Условия</a>
                    <a class="map__link" href="https://raffir.net">Реклама</a>
                    <p class="map__border"></p>
                </div>
            </div>
        </div>
        <div class="map-wrapper_right">
            <div class="map">
                <div class="map__delivery">
                    <p class="map__title">Доставка</p>
                    <a class="map__link" href="https://raffir.net">Доставка</a>
                    <a class="map__link" href="https://raffir.net">Упаковка</a>
                    <p class="map__border"></p>
                </div>

                <div class="map__items">
                    <p class="map__title">Все Алюмы</p>
                    <p class="map__subtitle">Волна</p>
                    <div class="map__link-wrapper">
                        <a class="map__link" href="https://raffir.net">Волна Алюм Чёрный</a>
                        <a class="map__link" href="https://raffir.net">Волна Алюм Синий</a>
                        <a class="map__link" href="https://raffir.net">Волна Алюм Красный</a>
                        <a class="map__link" href="https://raffir.net">Волна Алюм Зеленый</a>
                        <a class="map__link" href="https://raffir.net">Волна Алюм Жёлтый</a>
                        <a class="map__link" href="https://raffir.net">Волна Алюм Коричневый</a>
                    </div>

                    <div class="spacer"></div>
                    <p class="map__subtitle">Луна</p>
                    <div class="map__link-wrapper">
                        <a class="map__link" href="https://raffir.net">Луна Алюм Чёрный</a>
                        <a class="map__link" href="https://raffir.net">Луна Алюм Синий</a>
                        <a class="map__link" href="https://raffir.net">Луна Алюм Красный</a>
                        <a class="map__link" href="https://raffir.net">Луна Алюм Зеленый</a>
                        <a class="map__link" href="https://raffir.net">Луна Алюм Жёлтый</a>
                        <a class="map__link" href="https://raffir.net">Луна Алюм Коричневый</a>
                    </div>

                    <div class="spacer"></div>
                    <p class="map__subtitle">Васп</p>
                    <div class="map__link-wrapper">
                        <a class="map__link" href="https://raffir.net">Васп Алюм Чёрный</a>
                        <a class="map__link" href="https://raffir.net">Васп Алюм Синий</a>
                        <a class="map__link" href="https://raffir.net">Васп Алюм Красный</a>
                        <a class="map__link" href="https://raffir.net">Васп Алюм Зеленый</a>
                        <a class="map__link" href="https://raffir.net">Васп Алюм Жёлтый</a>
                        <a class="map__link" href="https://raffir.net">Васп Алюм Коричневый</a>
                    </div>
                    <p class="map__border"></p>
                </div>
            </div>
        </div>
    </div>
@endsection