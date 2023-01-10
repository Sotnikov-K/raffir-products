@extends('layouts.app')

@section('content')

    <main class="composites">
        
        <section class="caption">
            <article class="caption__item caption__item--left">
                <div class="caption__data caption__data--composites">   
                    <img class="caption__image" src="/images/1. MainSliderPicture/wood_2.jpg" loading="lazy" alt="Древесина Раффир">
                    <div class="caption__title">
                        <h1 class="caption__title-h1">Стаб. дерево Раффир</h1>
                        <p class="caption__title-p1">Кап тополя - синий цвет.</p>
                        <p class="caption__title-p2">Нож Станислава Стругунова</p>
                    </div>
                    <a href="#" class="link link--offer">
                        <p class="link__text">Смотреть</p>
                        <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                    </a>
                </div>
            </article>
            <article class="caption__item caption__item--right">
                <div class="caption__data caption__data--composites">
                    <img class="caption__image" src="/images/1. MainSliderPicture/test2.png" loading="lazy" alt="Информация">
                    <div class="caption__title">
                        <h2 class="caption__title-h1">Информация</h2>
                        <p class="caption__title-p1">по работе с материалом</p>
                        <p class="caption__title-p2">Обработка, шлифовка, полировка</p>
                    </div>
                    <a href="#" class="link link--offer">
                        <p class="link__text">Подробнее</p>
                        <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                    </a>
                </div>
            </article>
        </section>

        <div class="mover__link-wrapper">
            <a class="mover__link mover__link--one scroll_link" data-link="composites">
                <div class="mover__link-data">
                    
                    <div class="mover__link-title"><strong>Тополь</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Стабилизированый тополь и кап тополя в 10 цветах.</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--two scroll_link" data-link="wood">
                <div class="mover__link-data">
                   
                    <div class="mover__link-title"><strong>Бук</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Стабилизированный шпальт бука продольной и поперечной распиловки</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--three scroll_link" data-link="mammoth">
                <div class="mover__link-data">
                    
                    <div class="mover__link-title"><strong>Платан</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Стабилизированный платан продольной и поперечной распиловки</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--four scroll_link" data-link="divisionss">
                <div class="mover__link-data">
                   
                    <div class="mover__link-title"><strong>Дуб</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Стабилизированный мореный дуб</p>
                    </div>
                </div>
            </a>
        </div>

        <section class="title" id="">
            <div class="title__wrapper">
                <p class="title__h2">Тополь</p>
                <p class="title__p">
                    Бруски тополя и капа тополя - самый популярный материал компании, превосходно застабилизирован и окрашен в широкую гамму цветов.   
                </p>
            </div>
        </section>

        <section class="texture">
            <div class="texture__title">
                <p class="texture__title-h3">
                    Полный список брусков тополя
                </p>
            </div>
            <div class="texture__category">
                <div class="texture__data">
                    <div class="texture__data-left">
                        <div class="texture__item-wrapper texture__item-wrapper--title">
                            <div class="texture__item">
                                <p class="texture__item-p">Пламенный тополь</p>
                            </div>
                        </div>
                    </div>
                    <div class="texture__data-right">
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_natural_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Натуральный цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_yellow_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Жёлтый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_orange_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Оранжевый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_green_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Зеленый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_lime_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Лаймовый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_purple_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Фиолетовый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_red_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Красный цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_blue_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Синий цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_brown_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Коричневый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_black_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Чёрный цвет</p>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="texture__data">
                    <div class="texture__data-left">
                        <div class="texture__item-wrapper texture__item-wrapper--title">
                            <div class="texture__item">
                                <p class="texture__item-p">Кап тополя</p>
                            </div>
                        </div>
                    </div>
                    <div class="texture__data-right">
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_natural_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Натуральный цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_yellow_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Желтый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_orange_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Оранжевый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_green_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Зелёный цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_lime_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Лаймовый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_purple_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Фиолетовый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_red_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Красный цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_blue_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Синий цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_brown_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Коричневый цвет</p>
                            </div>
                        </div>
                        <div class="texture__item-wrapper">
                            <div class="texture__item">
                                <img class="texture__picture" src="images/textures/wood/poplar/poplar_burl_black_texture_300.jpg" alt="" srcset="">
                                <p class="product-description__texture">Чёрный цвет</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section class="title-swiper" id="">
            <div class="title-swiper__wrapper">
                <p class="title-swiper__h2">Ножи + стаб. тополь Раффир</p>
                <p class="title-swiper__p">
                    Стабилизированный тополь крупным планом в ножах 
                </p>
            </div>
        </section>

        <div class="swiper swiper--productslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-wrapper">
                        <img src="images/pages/wave/offer/slidewave1.jpg" alt="">
                        <p>Нож от Берёzа найфс</p>
                        <p>Нобл латунь</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-wrapper">
                        <img src="images/pages/wave/offer/slidewave2.jpg" alt="">
                        <p>Нож от АИР Златоуст</p>
                        <p>Нобл бронза латунь</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-wrapper">
                        <img src="images/pages/wave/offer/slidewave5.jpg" alt="">
                        <p>Нож Станислава Стругунова.</p>
                        <p>Алюм зелёный цвет.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-wrapper">
                        <img src="images/pages/wave/offer/slidewave3.jpg" alt="">
                        <p>Нож от SpiderCo</p>
                        <p>Нобл бронза латунь</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-wrapper">
                        <img src="images/pages/wave/offer/slidewave4.jpg" alt="">
                        <p>Нож от Kappeller</p>
                        <p>Нобл бронза латунь</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <section class="title-gallery" id="">
            <div class="title-gallery__wrapper">
                <p class="title-gallery__h2">Примеры</p>
                <p class="title-gallery__p">Фотографии готовых ножей с использованием Тополя Раффир от наших Клиентов.</p>
            </div>
        </section>

        <div class="gallery">
            <div class="gallery-item">
                <a data-fslightbox="first-lightbox" href="/images/gallery/composites/wave/wave-1.jpg">
                    <div class="gallery-item-content">
                        <img class="gallery-item-image" src="/images/21.IndexGallery2/thumbs/img1001.jpg" alt="" srcset="">
                    </div>
                    <div class="gallery-item-description">
                        <p class="gallery-item-description-text">Нож Кулкова Алексея</p>
                        <p class="gallery-item-description-text">материал - волна sfx - синий уран</p>
                    </div>
                </a>
            </div>
        </div>





      





       




      

        

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper', {
                lazy: true,
                slidesPerView: 3,
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