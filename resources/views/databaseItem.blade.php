@extends('layouts.app')
@section('content')
    <section class="database-single-item">
        <div class="database-single-item__data">

            <div class="database-single-item__text-wrapper">
                <H2 class="database-single-item__title">
                    {{ucfirst($lot['type'])}}
                    
                    <span class="database-single-item__status database-single-item__status--new">{{$lot['lot_status']}}</span>
                </H2>
        
                <p class="database-single-item__paragraph">{{ucfirst($lot->lot_annotation)}}</p>

                <p class="database-single-item__date">{{$lot->created_at->format('d.m.Y')}} </p>
                <span class="database-single-item__span">index of lot: {{$lot['id']}}</span>

            </div>

        <div class="databaseItem__data-wrapper">  

            <div class="databaseItem-visual-section">

                <div class="databaseItem-image-section">
                    <div class="databaseItem-image-wrapper">
                        <a class="databaseItem-gallery">
                            <img class="databaseItem-image" src="https://imgholder.ru/500x500/f8f8f8/adb9ca&text=Raffir+Mammoth+Sourcing&font=kelson&fz=20" alt="">
                        </a>
                    </div>
                </div>

                <div class="databaseItem-images-section">
                    @foreach($imageArray as $image)
                        <div class="databaseItem-images-wrapper">
                                <img class="databaseItem-images" src="/images/product_images/micro_images/{{$lot->getImageTime()}}/{{$image}}" alt="">       
                        </div>
                    @endforeach
                </div>
            </div>
              
            <div class="databaseItem-description-section">
                <div class="databaseItem-description-text">

                    <div class="databaseItem-content-lotWrapper">
                          
                        <div class="databaseItem__content-lot-title">
                            <div class="databaseItem__content-lot-title-wrapprer">
                                <p class="databaseItem__content-lot-paragraph-title">{{$lot['type'] . ' # ' . $lot['id']}}</p>
                            </div>

                            <p class="databaseItem__content-lot-paragraph"><span class="databaseItem__content-lot-span">total weight</span> {{$lot['lot_weight']}} kg.</p>
                            <p class="databaseItem__content-lot-paragraph"><span class="databaseItem__content-lot-span">lot price</span> {{$lot['lot_price']}} usd</p>
                        </div>
                        
                    </div>
                   
                    
                    @foreach($lot->items as $item)

                        <div class="databaseItem-content-itemWrapper">

                            <div class="databaseItem__content-item-title">

                                <div class="databaseItem__content-item-title-wrapprer">
                                    <p class="databaseItem__content-item-paragraph-title">----- item # {{$loop->iteration}}</p>
                                </div>

                                <p class="databaseItem__content-item-paragraph">{{$item['animal_type']}} {{$item['item_type']}} {{$item['item_grade']}} gr.</p>
                                <p class="databaseItem__content-item-paragraph"><span class="databaseItem__content-lot-span">item weight</span> {{$item['item_weight']}} kg.</p>

                                <div class="expander--item">
                                    <img class="expander__icon--item" src="/images/icons/expand/expand_more.png" alt="" srcset="">
                                </div>
                            
                            </div>


                            <div class="databaseItem__content-item-more">

                                <div class="databaseItem__content-item-more-pharagraph-wrapper">
                                    <p class="databaseItem__content-item-more-pharagraph-title">wet condition</p>
                                    <p class="databaseItem__content-item-more-pharagraph-value">{{$item['item_condition']}}</p>
                                    <!-- <span class="databaseItem__content-item-more-pharagraph-line"></span> -->
                                </div>

                                <div class="databaseItem__content-item-more-pharagraph-wrapper">
                                    <p class="databaseItem__content-item-more-pharagraph-title">color</p>
                                    <p class="databaseItem__content-item-more-pharagraph-value">{{$item['item_color']}}</p>
                                </div>

                                <div class="databaseItem__content-item-more-pharagraph-wrapper">
                                    <p class="databaseItem__content-item-more-pharagraph-title">rarity</p>
                                    <p class="databaseItem__content-item-more-pharagraph-value">{{$item['item_rarity']}} item</p>
                                </div>

                                <div class="databaseItem__content-item-more-pharagraph-wrapper">
                                    <p class="databaseItem__content-item-more-pharagraph-title">size</p>
                                    <p class="databaseItem__content-item-more-pharagraph-value">{{$lot['lot_size_length'] . ' x ' . $lot['lot_size_width'] . ' x ' . $lot['lot_size_height'] }} item</p>
                                </div>
                               
                            </div>

                        </div>

                    @endforeach
                    
                    <div class="databaseItem__content-noticeWrapper">
                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Yakutia is a region of Russia.</span></p>
                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">All sizes (length x width x height) are in cm.</span></p>
                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span">Estimated price depends on delivery cost and time of the year.</span></p>
                        <p class="databaseItem__content-notice"><span class="databaseItem__content-notice-span"><a class="databaseItem__content-notice-link" href="/">More info about classification and grades of quality.</a></span></p>
                    </div>   

                    <div class="databaseItem-contact">
                        <button class="btn--database-item">Contact us</button> 
                        <p class="databaseItem-contact-text">or</p>
                        <a class="databaseItem-contact-link" href="#">write a message</a>
                    </div>

                </div>
            </div>
            
        </div> 

        </div> 
    </section>

@endsection


