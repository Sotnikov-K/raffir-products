@extends('layouts.app')

@section('content')
    <section class="database">
        <div class="database__data">

            <div class="database__text-wrapper">
                <H2 class="database__title" >Database</H2>
                <p class="database__paragraph">Full collection of pleistocene items as a single lot or a lot which combining a set of items with one price.</p>

                <section class="database-section">
                    {{$lots->links('\vendor\pagination\pagination-test-upp')}}
                </section>

            </div>
   
            @include('/partials/database-page/database-filter')
            
            <div class="database__wrapper">
                @foreach($lots as $lot)
                    <div class="database-item">
                        <a href="/database/{{$lot->slug}}">
                            <div class="database__item-content">

                                <div class="database__item-content-date-wrapper">
                                    <div class="database__item-content-date-left">
                                        <p class="database__item-content-date">{{$lot->created_at->format('d.m.Y')}}</p>
                                        <div class="database__item-status"></div>      
                                    </div>
                                    <div class="database__item-content-date-rigth">  
                                    </div>
                                </div>

                                <div class="database__item-image-wrapper">
                                    <img class="database__item-content-image" src="/images/product_images/thumbnail_images/{{$lot->getImageTime()}}/{{$lot->getImage()}}" alt="">
                                </div>

                                <div class="database__item-content-text">
                                    <p class="database__item-content-name">type: {{$lot->type}} @ {{$lot['lot_weight']}}kg</p>
                                    <p class="database__item-content-status">status: <span>{{$lot->lot_status}}</span></p>
                                    <p class="database__item-content-quantity">items quantity: {{$lot->lot_count}}</p>
                                    <p class="database__item-content-price">price: {{$lot['lot_price']}} usd</p>
                                    <p class="database__item-content-link"> > Open item</p>
                                </div>

                            </div> 
                        </a>       
                    </div>
                @endforeach
            </div>

            <div class="database__pagination-wrapper">  
                {{$lots->links('\vendor\pagination\pagination-test')}}
            </div>
        
        </div>
    </section>
@endsection

