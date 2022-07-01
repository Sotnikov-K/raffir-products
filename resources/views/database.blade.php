@extends('layouts.app')

@section('slider-main')
    <div class="slider-main">
        <!-- <div class="">
            <img class="slider-main__image" src="/images/home-3.jpg" alt="">
            <h1 class="slider-main__title-text slider-main__title-text-contacts">Contacts and company details</h1>
            <p class="slider-main__paragraph-text slider-main__paragraph-text-contacts">For those about to mammoth realm - we salute you and welcome to our internet home</p>
        </div> -->

        <div class="">
            <ul>
                <li>

                </li>
            </ul>
        </div>
    </div>
@endsection


@section('content')

    <section class="listing-section">
        <div class="listing">
            <div class="listing__title">
                <H2 class="listing__title-text" >Database</H2>
                <p class="listing__paragraph-text">Full collection of pleistocene items as a single item or as a lot combining a set of items with one price</p>
            </div>
        </div>
    </section>

    <section class="database-section">
        <div class="database-wrapper">

            @foreach($lots as $lot)
            
                <div class="database-item">
                <a href="/database/{{$lot->id}}">
                    <div class="database-item-content">
                        <div class="database-item-content-date-wrapper">
                            <div><p class="database-item-content-date">{{$lot->created_at->format('d.m.Y')}}</p></div>
                            <div class="database-item-content-date-rigth"></div>
                        </div>
                        <div class="database-item-image-wrapper">
                            <img class="database-item-content-image" src="{{$lot['lot_picture_1']}}" alt="">
                        </div>
                        <div class="database-item-content-text">
                            <p class="database-item-content-name">type: {{$lot['lot_type']}}</p>
                            <p class="database-item-content-weight">weight: {{$lot['lot_weight']}} kg</p>
                            <p class="database-item-content-grade">grade: {{$lot['lot_grade']}}</p>
                            <p class="database-item-content-price">est. price: {{$lot['lot_price']}} usd</p>
                            <a class="database-item-content-link" href="/database/{{$lot->id}}"> > Open item</a>
                        </div>
                    </div> 
                    </a>       
                </div>
            
            @endforeach
        </div>
    </section>









    


@endsection