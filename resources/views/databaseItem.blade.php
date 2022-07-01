@extends('layouts.app')
@section('content')

    <section class="listing-section">
        <div class="databaseItem-title-section">
            <div class="databaseItem-title">
                <p class="databaseItem-content-date">{{$lot->created_at->format('d.m.Y')}} </p>
                <span class="databaseItem-span">index of item: {{$lot['id']}}</span>
                <H2 class="databaseItem-title-text"><span class="databaseItem-span databaseItem-span-status">{{$lot['lot_status']}}</span> {{ucfirst($lot['animal_type'])}} {{$lot['lot_type']}} - {{$lot['lot_weight']}}kg</H2>
                <p class="databaseItem__paragraph-text">{{ucfirst($lot->lot_annotation)}}</p>
            </div>
        </div>
    </section>

    
    <section class="databaseItem-section">
        <div class="databaseItem-wrapper-top">   

          <div class="databaseItem-image-section">
            <div class="databaseItem-image-wrapper">
                <img class="databaseItem-image" src="/{{$lot['lot_picture_1']}}" alt="">
            </div>
          </div>


          <div class="databaseItem-description-section">
            <div class="databaseItem-description-text">
                <p class="databaseItem-content-name"><span class="databaseItem-span">type: </span>{{$lot['lot_type']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">animal: </span>{{$lot['animal_type']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">animal in latin: </span>{{$lot['animal_type_latin']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">lot origin: </span>{{$lot['lot_origin']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">size: </span>{{$lot['lot_size_length'] . ' x ' . $lot['lot_size_width'] . ' x ' . $lot['lot_size_height'] }}</p>
                <p class="databaseItem-content-weight"><span class="databaseItem-span">weight: </span>{{$lot['lot_weight']}} kg</p>
                <p class="databaseItem-content-grade"><span class="databaseItem-span">grade: </span>{{$lot['lot_grade']}} </p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">wet condition: </span>{{$lot['wet_condition']}}</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">lot color: </span>{{$lot['lot_color']}}</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">lot rarity: </span>{{$lot['lot_rarity']}} item</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">est. price: </span>{{$lot['lot_price']}} usd</p>
                <div class="databaseItem-content-noticeWrapper">
                    <p class="databaseItem-content-notice"><span class="databaseItem-span">Yakutia is a region of Russia. All sizes (length x width x height) are in cm. </span></p>
                    <p class="databaseItem-content-notice"><span class="databaseItem-span">Estimated price depends on delivery cost and time of the year.</span></p>
                    <p class="databaseItem-content-notice"><span class="databaseItem-span"><a class="databaseItem-content-notice-link" href="/">More info about classification and grades of quality.</a></span></p>
                </div>   
            </div>
          </div>

        </div>

        <div class="databaseItem-wrapper-middle">   
          <div class="databaseItem-images-section">
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$lot['lot_picture_1']}}" alt="">
                </div>
          </div>


          <div class="databaseItem-button-section">
            <div class="databaseItem-button">
                <button class="btn btn-listing">Contact us</button>
            </div>
          </div>

        </div>
    </section>


    



@endsection