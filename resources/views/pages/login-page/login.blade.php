@extends('layouts.app')

@section('content')


<main class="login">


    <section class="dashboard__control-panel">

        <div class="dashboard__control-title">
            <p>Логин</p>
        </div>

        <div class="dashboard__control-item">
        
            <div class="intro__data intro__data--login">
                
                <div class="intro__text-wrapper">
                    <form class="form" method="POST" action="{{ route('user.login') }}">
                        @csrf

                        <!-- Почта -->
                        <div class="login__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Почта</label>
                            <input type="text" id="email" class="product-input dashboard-create__product-input" name="email" placeholder="your-mail@yandex.ru">
                        </div>

                        <!-- Пароль -->
                        <div class="login__input-wrapper">
                            <label for="product_name" class="dashboard-create__product-title">Пароль</label>
                            <input type="password" id="password" class="product-input dashboard-create__product-input" name="password" placeholder="Ra18-c2H5OHnz">
                        </div>

                        <div class="login__input-wrapper">
                            <button class="button button--login" type="submit" name="sendMe">
                                <p class="link__text">Войти</p>
                                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>

    </section>


</main>

@endsection




