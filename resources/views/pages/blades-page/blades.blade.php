@extends('layouts.app')

@section('content')

    <main class="composites">
        
        @include('/pages/blades-page/includes/blades-1-intro')
        @include('/pages/blades-page/includes/blades-2-blades')
        @include('/pages/blades-page/includes/blades-3-advise')


        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper', {
                lazy: true,
                slidesPerView: 3,

                breakpoints: {
                    640: {
                        slidesPerView: 3,
                    },

                    100: {
                        slidesPerView: 1,
                    },
                },

                centeredSlides: true,
                spaceBetween: 10,
                grabCursor: true,

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
        </script>  

        <!-- <script>
            fsLightboxInstances["first-lightbox"].props.onOpen = function ()
            {
                console.log("The first lightbox has opened.");
            }
        </script> -->
    </main>
@endsection