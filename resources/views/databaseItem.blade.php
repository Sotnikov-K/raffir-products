@extends('layouts.app')
@section('content')

    <section class="listing-section">
        <div class="databaseItem-title-section">
            <div class="databaseItem-title">
                <p class="databaseItem-content-date">{{$item->created_at->format('d.m.Y')}} </p>
                <span class="databaseItem-span">index of item: {{$item['id']}}</span>
                <H2 class="databaseItem-title-text"><span class="databaseItem-span databaseItem-span-status">{{$item['lot_status']}}</span> {{ucfirst($item['animal_type'])}} {{$item['lot_type']}} - {{$item['lot_weight']}}kg</H2>
                <p class="databaseItem__paragraph-text">{{ucfirst($item->lot_annotation)}}</p>
            </div>
        </div>
    </section>

    
    <section class="databaseItem-section">
        <div class="databaseItem-wrapper-top">   

          <div class="databaseItem-image-section">
            <div class="databaseItem-image-wrapper">
                <img class="databaseItem-image" src="/{{$item['lot_picture_1']}}" alt="">
            </div>
          </div>


          <div class="databaseItem-description-section">
            <div class="databaseItem-description-text">
                <p class="databaseItem-content-name"><span class="databaseItem-span">type: </span>{{$item['lot_type']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">animal: </span>{{$item['animal_type']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">animal in latin: </span>{{$item['animal_type_latin']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">lot origin: </span>{{$item['lot_origin']}}</p>
                <p class="databaseItem-content-name"><span class="databaseItem-span">size: </span>{{$item['lot_size_length'] . ' x ' . $item['lot_size_width'] . ' x ' . $item['lot_size_height'] }}</p>
                <p class="databaseItem-content-weight"><span class="databaseItem-span">weight: </span>{{$item['lot_weight']}} kg</p>
                <p class="databaseItem-content-grade"><span class="databaseItem-span">grade: </span>{{$item['lot_grade']}} </p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">wet condition: </span>{{$item['wet_condition']}}</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">lot color: </span>{{$item['lot_color']}}</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">lot rarity: </span>{{$item['lot_rarity']}} item</p>
                <p class="databaseItem-content-price"><span class="databaseItem-span">est. price: </span>{{$item['lot_price']}} usd</p>
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
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
                </div>
                <div class="databaseItem-images-wrapper">
                    <img class="databaseItem-images" src="/{{$item['lot_picture_1']}}" alt="">
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