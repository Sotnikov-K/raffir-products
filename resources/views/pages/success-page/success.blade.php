@extends('layouts.app')

@section('content')

<main class="success">

    <section class="success__order">

        <section class="success__title-container">
            <h1 class="success__title-h1">Заказ размещен!</h1>
        </section>


        <div class="success__data">

            <ul class="success__data-item">
                <li class="success__product-item-title">
                    <p class="success__input-title">Ваш заказ успешно размещен. Наш менеджер скоро свяжется с Вами для уточнения деталей.</p> 
                </li>

                <li class="success__product-item">   
                    
                    <h2 class="success__order-title">Ваш заказ</h2>

                    <div class="success__ordered-item">
                        <div class="success__order-item-column success__order-item-column--number"><p class="success__order-item-title">№</p></div>
                        <div class="success__order-item-column success__order-item-column--name"><p class="success__order-item-title">название</p></div>
                        <div class="success__order-item-column success__order-item-column--color"><p class="success__order-item-title">цвет</p></div>
                        <div class="success__order-item-column success__order-item-column--category"><p class="success__order-item-title">категория</p></div>
                        <div class="success__order-item-column success__order-item-column--price"><p class="success__order-item-title">цена</p></div>
                        <div class="success__order-item-column success__order-item-column--quantity"><p class="success__order-item-title">кол-во</p></div>
                        <div class="success__order-item-column success__order-item-column--sum"><p class="success__order-item-title">сумма</p></div>
                    </div>

                    @foreach($order->items as $item)
                        
                    <div class="success__ordered-item">
                        <div class="success__order-item-column success__order-item-column--number"><p class="success__order-item-p">{{ $loop->iteration }}</p></div>
                        <div class="success__order-item-column success__order-item-column--name"><p class="success__order-item-p">{{ $item->name }}</p></div>
                        <div class="success__order-item-column success__order-item-column--color"><p class="success__order-item-p">{{ $item->color }}</p></div>
                        <div class="success__order-item-column success__order-item-column--category"><p class="success__order-item-p">{{ $item->category }}</p></div>
                        <div class="success__order-item-column success__order-item-column--price"><p class="success__order-item-p">{{ $item->price }}</p></div>
                        <div class="success__order-item-column success__order-item-column--quantity"><p class="success__order-item-p">{{ $item->quantity }}</p></div>
                        <div class="success__order-item-column success__order-item-column--sum"><p class="success__order-item-p">{{ $item->cost }}</p></div>  
                    </div>

                    @endforeach

                    <div class="success__ordered-item success__ordered-item--result">
                        <p class="success__order-item-p success__order-item-p--result-title">Итого</p>
                        <p class="success__order-item-p success__order-item-p--result">{{ $order->amount }} руб.</p>
                    </div>
            
                </li>

                <li class="success__product-item">

                    <h2  class="success__your-data-h2">Ваши данные</h2>
                    
                    <p class="success__your-data-p">Имя: {{ $order->name }}</p>
                    <p class="success__your-data-p">Адрес почты: {{ $order->email }}</p>
                    <p class="success__your-data-p">Номер телефона: {{ $order->phone }}</p>
                    <p class="success__your-data-p">Адрес доставки: {{ $order->address }}</p>
                    @isset ($order->comment)
                        <p class="success__your-data-p">Комментарий: {{ $order->comment }}</p>
                    @endisset
                 
                </li>
            </ul>
        </div>

        <div class="success__link">
            <a class="success__link-a" href="/">
                <div class="link link--cart">
                    <p class="link__text">Вернуться</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                </div>
            </a>
        </div>

    </section>

</main>

@endsection










   