@extends('layouts.app')

@section('content')

    <main class="contacts">

        <section class="contacts__title-container">
            <h1 class="contacts__title-h1">Раффир Россия</h1>
            <p class="contacts__title-p">Интернет-ресурс Датской компании Раффир в России.</p>
        </section>
        

            
           

        <section class="contact">
            <div class="contact__info">
                <p class="contact__info-place">Москва</p>
                <p class="contact__info-email">raffirus@yandex.ru</p>
                <p class="contact__info-person">Сотников Кирилл</p>
                <p class="contact__info-person">Управляющий партнер</p>
                <p class="contact__info-tel">+7 (962) 675-95-90</p>
            </div>
        </section>

        <section class="aboutus">
            <div class="aboutus__info">
                <p>О НАС</p>
                <p>На интернет-ресурсе raffir.net представлен расширенный ассортимент композитных материалов, стабилизированых блоков древесины различных пород, бивня и зуба мамонта. Ведется разработка по прозводсту брендовой нержавеющей стали.</p>
                <p>Наряду с полным ассортиментом для удобства клиентов доступны также <a>консультация по обработке материала</a> и возможность <a>заказать нестандартный размер.</a></p>
            </div>
        </section>

        <section class="feedback__section">

            <div class="aboutus__info aboutus__info-feedback">
                <p>Напишите нам.</p>
                <p>Если у вас возник вопрос или предложение — пожалуйста заполните форму и напишите сообщение.</p>
                <p>Пожалуйста, заполните все требуемые поля.</p>
            </div>

            <div class="feedback__section-textarea">

                <form>
                    <input type="hidden" name="project_name" value="Raffir Russia FeedBack">
                    <input type="hidden" name="admin_email" value="sotnikovmail@yandex.ru">
                    <input type="hidden" name="form_subject" value="Form Subject">

                    <input class="contact__text-area contact__text-area-input" type="text" name="Name"
                        placeholder="Ваше имя"><br>
                    <input class="contact__text-area contact__text-area-input" type="text" name="E-mail"
                        placeholder="Ваш E-mail"><br>



                    <textarea class="contact__text-area" name="FeedBack" id="" rows="10" placeholder="Ваш вопрос..."></textarea>

                    <div class="send__button">
                        <button class="btn" data-callback='onSubmit' data-action='submit'>Отправить
                            сообщение</button>
                    </div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                </form>

            </div>

            <div class="thankyou hide">
                <p class="thankyou__text">Спасибо</p>
            </div>

        </section>

       
    </main>


@endsection