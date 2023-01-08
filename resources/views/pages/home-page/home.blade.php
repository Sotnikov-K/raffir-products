@extends('layouts.app')

@section('content')
<main class="home">
        <section class="caption">
            <article class="caption__item caption__item--left">
                <div class="caption__data">   
                    <img class="caption__image" src="/images/1. MainSliderPicture/test.png" loading="lazy" alt="Композиты Раффир">
                    <div class="caption__title">
                        <h1 class="caption__title-h1">Композиты Раффир</h1>
                        <p class="caption__title-p1">Раффир Нобл - Желтая бронза</p>
                        <p class="caption__title-p2">Нож Станислава Стругунова</p>
                    </div>
                    <a href="#" class="link link--offer">
                        <p class="link__text">Смотреть</p>
                        <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                    </a>
                </div>
            </article>
            <article class="caption__item caption__item--right">
                <div class="caption__data">
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
                    <img class="mover__link-img" src="/images/navimages/categoriesComposites.svg">
                    <div class="mover__link-title"><strong>Композиты</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Композитные материалы с микросеткой и разными текстурами</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--two scroll_link" data-link="wood">
                <div class="mover__link-data">
                    <img class="mover__link-img" src="/images/navimages/categoriesPoplarBurl.svg">
                    <div class="mover__link-title"><strong>Древесина</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Стабилизированные блоки разных пород дерева и окрашенные в 10 цветов.</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--three scroll_link" data-link="mammoth">
                <div class="mover__link-data">
                    <img class="mover__link-img" src="/images/navimages/categoriesWasp.svg">
                    <div class="mover__link-title"><strong>Мамонт</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Бивень и зуб мамонта в блоках и небольших фрагментах в разных цветах.</p>
                    </div>
                </div>
            </a>
            <a class="mover__link mover__link--four scroll_link" data-link="divisionss">
                <div class="mover__link-data">
                    <img class="mover__link-img" src="/images/navimages/categoriesSFX.svg">
                    <div class="mover__link-title"><strong>Примеры</strong></div>
                    <div class="mover__link-desc-wrapper">
                        <p class="mover__link-desc">Примеры ножей с использованием наших материалов.</p>
                    </div>
                </div>
            </a>
        </div>

        <section class="home__product-lead" id="composites">
            <p class="home__product-lead-title">1. Композиты Раффир.</p>
            <p class="home__product-lead-text">
                Первая серия композитов компании с применением декоративных металлических сеток Раффир. Сам композит состоит из
                двух частей: набор сеток, упорядочено уложенных либо скрученых внутрь, которые придают блоку отличный 3д-эффект
                глубины,
                и смола - прочное средство фиксации этих сеток
                внутри блока и обеспечивающее полупрозрачность материала.
            </p>
        </section>

        <section class="home__product-category">
            <div class="home__product-category-wrapper">
                <div class="home__product-category-left">
                    <div class="home__product-category-data">
                        <p class="home__product-category-text-a">Композиты</p>
                        <p class="home__product-category-text-b">Современный и технологичный материал для изготовления рукоятей ножей</p>
                        <a href="https://raffir.net/composites" class="link link--category">
                            <p class="link__text">Смотреть раздел</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                        </a>
                    </div>
                </div>
                <div class="home__product-category-right">

                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave1.jpg" loading="lazy" alt="">
                                    <p>нож от Берёzа найфс</p>
                                    <p>нобл латунь</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave2.jpg" loading="lazy" alt="">
                                    <p>нож от АИР Златоуст</p>
                                    <p>нобл бронза латунь</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave3.jpg" loading="lazy" alt="">
                                    <p>нож от SpiderCo</p>
                                    <p>нобл бронза латунь</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>
            </div>
            <a href="https://raffir.net/wave.html" class="link link--category-mobile">
                <p class="link__text">Смотреть раздел</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
            </a>
        </section>

        <section class="home__product-lead" id="wood">
            <p class="home__product-lead-title">
                2. Древесина Раффир.
            </p>
            <p class="home__product-lead-text">
                Высококачественные стабилизированные блоки древесины Раффир - наш основной продукт компании. Мы имеем 15-летний
                опыт в разработке и производстве стабилизированной древесины Раффир. Все производственные процессы по
                изготовлению материала проходят в Даннии по фирменной технологии. И это непрекращающийся цикл, и только так
                можно сделать материал еще лучше, прочнее и просто красивее…
            </p>
        </section>

        <section class="home__product-category">
            <div class="home__product-category-wrapper">
                <div class="home__product-category-left">
                    <div class="home__product-category-data">
                        <p class="home__product-category-text-a">Стаб. дерево</p>
                        <p class="home__product-category-text-b">Классика жанра. Знакомый материал на все времена</p>
                        <a href="https://raffir.net/wave.html" class="link link--category">
                            <p class="link__text">Смотреть раздел</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                        </a>
                    </div>
                </div>
                <div class="home__product-category-right">
                    <div class="swiper">
                        <div class="swiper-wrapper">          
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave22.jpg" alt="">
                                    <p>нож от Стругунова</p>
                                    <p>бук синий цвет</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <a href="https://raffir.net/wave.html" class="link link--category-mobile">
                <p class="link__text">Смотреть раздел</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
            </a>
        </section>

        <section class="home__product-lead" id="mammoth">
            <p class="home__product-lead-title">
                3. Зуб Мамонта Раффир.
            </p>
            <p class="home__product-lead-text">
                Материал, сочетающий в себе древнейшую историю существования Мамонтов и современную фирменную технологию Раффир
                по стабилизации зуба и бивня мамонта, дающий возможность украсить ваш нож по-настоящему изысканно и стильно.
                Редкий, красивый материал доступный в шести основных цветах.
            </p>

        </section>

        <section class="home__product-category">
            <div class="home__product-category-wrapper">
                <div class="home__product-category-left">
                    <div class="home__product-category-data">
                        <p class="home__product-category-text-a">Зуб мамонта</p>
                        <p class="home__product-category-text-b">Один из самых красивых и престижных материалов для ножа</p>
                        <a href="https://raffir.net/wave.html" class="link link--category">
                            <p class="link__text">Смотреть раздел</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                        </a>
                    </div>
                </div>
                <div class="home__product-category-right">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave19.jpg" alt="">
                                    <p>нож от R.Kappeller</p>
                                    <p>зуб мамонта</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <img class="slider-wrapper-img" src="/images/pages/wave/offer/slidewave20.jpg" alt="">
                                    <p>нож от R.Kappeller</p>
                                    <p>зуб мамонта</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <a href="https://raffir.net/wave.html" class="link link--category-mobile">
                <p class="link__text">Смотреть раздел</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
            </a>
        </section>

        <section class="home__product-lead" id="divisionss">
            <p class="home__product-lead-title">
                Примеры
            </p>
            <p class="home__product-lead-text">
                Фотографии готовых ножей с использованием материалов Раффир от наших клиентов и друзей.
            </p>
        </section>

        <div class="home__example">

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1001.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1002.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1003.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1004.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1005.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1006.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1007.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>

            <div class="home__example-item">
                <div class="home__example-item-content">
                    <img class="home__example-item-image" src="/images/21.IndexGallery2/thumbs/img1008.jpg" alt="" srcset="">
                </div>
                <div class="home__example-item-description">
                    <p class="home__example-item-description-text">Нож Кулкова Алексея</p>
                    <p class="home__example-item-description-text">материал - sfx синий уран</p>
                </div>
            </div>
            
            
        </div>

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper', {
                lazy: true,
                slidesPerView: 1,
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

    
</main>


@endsection