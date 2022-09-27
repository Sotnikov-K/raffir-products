<section class="listing">
        
    <div class="listing__data">
        

        <div class="listing__text-wrapper">

            <H2 class="listing__title" >Listing of the <span>latest</span></H2>
            <p class="listing__paragraph">Short list of goods from last added to the most interesting thing in the mammoth sphere in region of Yakutia, the Far East.</p>

        </div>
   
        <div class="swiper">
        
            <div class="swiper-wrapper">
                

            @foreach($lots as $lot)

                <div class="swiper-slide">
                    <div class="swiper-slide-content">
                        <div class="swiper-slide-content-date-wrapper">
                            <div><p class="swiper-slide-content-date">{{$lot->created_at->format('d.m.Y')}}</p></div>
                            <div class="swiper-slide-content-date-rigth"></div>
                        </div>
                        <div class="swiper-slide-image-wrapper">
                            <img class="swiper-slide-content-image" src="/images/product_images/thumbnail_images/{{$lot->getImageTime()}}/{{$lot->getImage()}}" alt="">
                        </div>
                        <div class="swiper-slide-content-text">
                            <p class="swiper-slide-content-name">{{$lot->slug}} @ {{$lot->lot_weight}}kg.</p>
                           
                            <p class="swiper-slide-content-price">count of items inside: {{$lot->lot_count}}</p>
                            <p class="swiper-slide-content-price">est. price: {{$lot->lot_price}}</p>
                            <a class="swiper-slide-content-link" href="database/{{$lot->slug}}"> > Open item</a>
                        </div>
                    </div>                      
                </div>

            @endforeach


            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div> 

        <a class="link link--listing" href="/database">
            <button class="btn btn--seemore">see more</button>
        </a>


    </div>
            
        
</section>