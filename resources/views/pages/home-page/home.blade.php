@extends('layouts.app')

@section('content')
<div class="page">
    <main class="main">
        <div class="container">

<section class="work-offer">
    <article class="work">
        <div class="work__data">




            <!-- <img class="work__data-image" src="/images/1. MainSliderPicture/test.png"  alt=""> -->

            <picture>
                <!-- <source srcset="https://place-hold.it/500x300 1x, https://place-hold.it/500x300 2x"> -->
                <img class="work__data-image" src="/images/1. MainSliderPicture/test.png" loading="lazy">
            </picture>


            











            <div class="work__data-title">
                <h1 class="work__data-title-h1">Композиты Раффир</h1>
                <p class="work__data-title-p1">Раффир Нобл - Желтая бронза</p>
                <p class="work__data-title-p2">Нож Станислава Стругунова</p>
            </div>
            <a href="#" class="link link--offer">
                <p class="link__text">Смотреть</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
            </a>
        </div>
    </article>
    <article class="work">
        <div class="work__data">
           <img class="work__data-image" src="/images/1. MainSliderPicture/test2.png" loading="lazy" alt="">
            <div class="work__data-title">
                <h2 class="work__data-title-h1">Информация</h2>
                <p class="work__data-title-p1">по работе с материалом</p>
                <p class="work__data-title-p2">Обработка, шлифовка, полировка</p>
            </div>
            <a href="#" class="link link--offer">
                <p class="link__text">Подробнее</p>
                <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
            </a>
        </div>
    </article>
</section>

<div class="iconsnavwraper">
    <a data-link="composites" class="iconsnav scroll_link">
        <div class="iconsnav-content">
            <img src="/images/navimages/categoriesComposites.svg">
            <div class="icon__title"><strong>Композиты</strong></div>
            <div class="icon__info">
                <p class="icon__text">Композитные материалы с микросеткой и разными текстурами</p>
            </div>
        </div>
    </a>
    <a data-link="wood" class="iconsnav scroll_link">
        <div class="iconsnav-content">
            <img src="/images/navimages/categoriesPoplarBurl.svg">
            <div class="icon__title"><strong>Древесина</strong></div>
            <div class="icon__info">
                <p class="icon__text">Стабилизированные блоки разных пород дерева и окрашенные в 10 цветов.</p>
            </div>
        </div>
    </a>
    <a data-link="mammoth" class="iconsnav scroll_link">
        <div class="iconsnav-content">
            <img src="/images/navimages/categoriesWasp.svg">
            <div class="icon__title"><strong>Мамонт</strong></div>
            <div class="icon__info">
                <p class="icon__text">Бивень и зуб мамонта в блоках и небольших фрагментах в разных цветах.</p>
            </div>
        </div>
    </a>
    <a data-link="divisionss" class="iconsnav scroll_link">
        <div class="iconsnav-content">
            <img src="/images/navimages/categoriesSFX.svg">
            <div class="icon__title"><strong>Примеры</strong></div>
            <div class="icon__info">
                <p class="icon__text">Примеры ножей с использованием наших материалов.</p>
            </div>
        </div>
    </a>
</div>

<section class="product-description" id="composites">
    <p class="product-description__title">
        1. Композиты Раффир.
    </p>
    <p class="product-description__main">
        Первая серия композитов компании с применением декоративных металлических сеток Раффир. Сам композит состоит из
        двух частей: набор сеток, упорядочено уложенных либо скрученых внутрь, которые придают блоку отличный 3д-эффект
        глубины,
        и смола - прочное средство фиксации этих сеток
        внутри блока и обеспечивающее полупрозрачность материала.
    </p>
</section>

<section class="divisions">
    <div class="divisions__wrapper">
        <div class="divisions__wrapper-left">
            <div class="divisions__text-title">
                <p class="divisions__text-title-one">Композиты</p>
                <p class="divisions__text-title-two">Современный и технологичный материал для изготовления рукоятей ножей</p>
                <a href="https://raffir.net/wave.html" class="link link--category">
                    <p class="link__text">Смотреть раздел</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="divisions__wrapper-right">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->


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

<section class="product-description" id="wood">
    <p class="product-description__title">
        2. Древесина Раффир.
    </p>
    <p class="product-description__main">
        Высококачественные стабилизированные блоки древесины Раффир - наш основной продукт компании. Мы имеем 15-летний
        опыт в разработке и производстве стабилизированной древесины Раффир. Все производственные процессы по
        изготовлению материала проходят в Даннии по фирменной технологии. И это непрекращающийся цикл, и только так
        можно сделать материал еще лучше, прочнее и просто красивее…
    </p>
</section>

<section class="divisions">
    <div class="divisions__wrapper">
        <div class="divisions__wrapper-left">
            <div class="divisions__text-title">
                <p class="divisions__text-title-one">Стаб. дерево</p>
                <p class="divisions__text-title-two">Классика жанра. Знакомый материал на все времена</p>
                <a href="https://raffir.net/wave.html" class="link link--category">
                    <p class="link__text">Смотреть раздел</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="divisions__wrapper-right">
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

<section class="product-description" id="mammoth">
    <p class="product-description__title">
        3. Зуб Мамонта Раффир.
    </p>
    <p class="product-description__main">
        Материал, сочетающий в себе древнейшую историю существования Мамонтов и современную фирменную технологию Раффир
        по стабилизации зуба и бивня мамонта, дающий возможность украсить ваш нож по-настоящему изысканно и стильно.
        Редкий, красивый материал доступный в шести основных цветах.
    </p>

</section>

<section class="divisions">
    <div class="divisions__wrapper">
        <div class="divisions__wrapper-left">
            <div class="divisions__text-title">
                <p class="divisions__text-title-one">Зуб мамонта</p>
                <p class="divisions__text-title-two">Один из самых красивых и престижных материалов для ножа</p>
                <a href="https://raffir.net/wave.html" class="link link--category">
                    <p class="link__text">Смотреть раздел</p>
                    <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="divisions__wrapper-right">
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

<!-- <section id="textures" class="product-description">
    <p class="product-description__title">
        Некоторые текстуры...
    </p>
    <p class="product-description__main">
        Небольшая подборка текстур наших материалов для инициализации фантазий и проверки сочетаний цветов в Ваших
        ножевых проектах.
    </p>
</section> -->

<!-- <div class="textures_navwraper">
    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img1.jpg">
        <div class="textures_title"><strong>Кап тополя</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img2.jpg">
        <div class="textures_title"><strong>Тополь Оранжевый</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img3.jpg">
        <div class="textures_title"><strong>Тополь</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img4.jpg">
        <div class="textures_title"><strong>Бук Натуральный</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img5.jpg">
        <div class="textures_title"><strong>Красный тополь</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img6.jpg">
        <div class="textures_title"><strong>Зуб мамонта</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img7.jpg">
        <div class="textures_title"><strong>Композит Луна</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img8.jpg">
        <div class="textures_title"><strong>Стаб. набор</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img9.jpg">
        <div class="textures_title"><strong>Платан</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img10.jpg">
        <div class="textures_title"><strong>Бивень мамонта</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img11.jpg">
        <div class="textures_title"><strong>Зуб мамонта</strong></div>
    </div>

    <div class="textures_nav">
        <img src="assets/images/21.IndexGallery2/thumbs/img12.jpg">
        <div class="textures_title"><strong>Кап тополя</strong></div>
    </div>

</div> -->

<section class="product-description" id="divisionss">
    <p class="product-description__title">
        Примеры
    </p>
    <p class="product-description__main">
        Фотографии готовых ножей с использованием материалов Раффир от наших клиентов и друзей.
    </p>
</section>


<div class="example">

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1001.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1002.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1003.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1004.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1005.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1006.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1007.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
        </div>
    </div>

    <div class="example__item">
        <div class="example__item-content">
            <img class="example__item-image" src="/images/21.IndexGallery2/thumbs/img1008.jpg" alt="" srcset="">
        </div>
        <div class="example__item-description">
           <p class="example__item-description-text">Нож Кулкова Алексея</p>
           <p class="example__item-description-text">материал - sfx синий уран</p>
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
    

</div>
    </main>
</div>

@endsection