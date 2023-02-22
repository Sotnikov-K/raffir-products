@extends('layouts.app')

@section('content')

    <main class="composites">
        
        @include('/pages/wood-page/includes/wood-1-intro')
        @include('/pages/wood-page/includes/wood-2-poplar')
        @include('/pages/wood-page/includes/wood-3-beech')
        @include('/pages/wood-page/includes/wood-4-platan')
        @include('/pages/wood-page/includes/wood-5-oak')


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