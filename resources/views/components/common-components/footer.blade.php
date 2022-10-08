<footer>
    <div class="container">
        <div class="fast-links">
            <div class="fast-links__title">
                <p>материалы</p>
                <ul class="fast-links__items">
                    <li>
                        <div class="fast-links__items-li">
                            <a href="#">Композиты</a>
                            <p>+</p>
                        </div>
                    </li>
                    <li>
                        <div class="fast-links__items-li">
                            <a href="#">Стаб.дерево</a>
                            <p>+</p>
                        </div>
                    </li>
                    <li>
                        <div class="fast-links__items-li">
                            <a href="#">Мамонт</a>
                            <p>+</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="fast-links__title">
                <p>сообщество</p>
                <ul class="fast-links__items">

                    <li>
                        <a href="#">Клиенты</a>
                    </li>
                    <li>
                        <a href="#">Примеры работ</a>
                    </li>
                    <li>
                        <a href="#">Условия</a>
                    </li>
                    <li>
                        <a href="#">Реклама</a>
                    </li>
                </ul>

            </div>

            <div class="fast-links__title socials">
                <p>социальные сети</p>
                <ul class="fast-links__items fast-links__items-flex">

                    <li>
                        <a href="https://www.instagram.com/raffir_russia/">
                            <img src="/images/icons/instagram.svg" alt="Инстаграмм">
                        </a>
                    </li>
                    <li>
                        <img src="/images/icons/vk.svg" alt="Вконтакте">
                    </li>
                    <li>
                        <img src="/images/icons/share-facebook.svg" alt="Фейсбук">
                    </li>
                </ul>

            </div>
        </div>
        <div class="footer">
            <div class="footer__low">
                <div class="footer__low copyright">
                    <p>© 2021 Компания "Раффир". Все права защищены.</p>
                </div>
                <div class="footer__low links">
                    <a href="#">Доставка</a>
                    <a href="#">Упаковка</a>
                    <a href="#">Право</a>
                    <a href="map.html">Карта сайта</a>
                </div>
                <div class="footer__low country">
                    <a href="#">Россия</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img class="logo-footer" src="/images/logo/logotype_raffir.svg" alt="logo">
    </div>

    <div class="modal">
        <div class="modal__container order-modal" role="dialog" aria-modal="true" data-graph-target="modal">
            <div class="modal-content order-modal__content">
                <button class="order-modal__closeBtn"></button>
                <div class="order-modal__top">
                    <h2 class="order-modal__title">Оформление заказа</h2>
                    <span class="order-modal__number">Заказ № 3456</span>
                </div>
                <div class="order-modal__info">
                    <div class="order-modal__quantity order-modal__info-item">Товаров в заказе: <span>3 шт</span></div>
                    <div class="order-modal__summ order-modal__info-item">Сумма заказа: <span>568 789 ₽</span></div>
                    <div class="order-modal__delivery order-modal__info-item">
                    </div>


                    <div class="order-modal__products order-modal__info-item">
                        <button class="order-modal__btn">Состав заказа</button>
                        <ul class="order-modal__list">
                        </ul>
                    </div>



                </div>



                <form action="mail.php" enctype="multipart/form-data" class="order-modal__form order" method="POST">
                    <input type="hidden" name="theme" value="Заказ через сайт">
                    <input type="hidden" name="admin_email[]" value="raffirus@yandex.ru">
                    <input type="hidden" name="form_subject" value="Заказ через сайт Raffir.net">


                    <h2 class="order-modal__title">Отправка формы</h2>

                    <label class="order__label">
                        <span class="order__text">Ваше имя</span>
                        <input type="text" name="Имя" class="order__input" placeholder="Ваше имя">
                    </label>

                    <label class="order__label">
                        <span class="order__text">Номер телефона</span>
                        <input type="tel" name="Телефон" class="order__input" data-validate-field="tel"
                            placeholder="+7 (___)___-__-__">
                    </label>

                    <label class="order__label">
                        <span class="order__text">Ваш e-mail</span>
                        <input type="email" name="Email" data-validate-field="email" class="order__input"
                            placeholder="post@gmail.com">
                    </label>



                    <button type="order__btn" style="margin: 70px auto 10px; display: flex;
                    padding: 15px 15px; border: none; border-radius: 5px;">Оформить заказ</button>
                </form>



            </div>
        </div>
    </div>

    <div class="modalPic">
    </div>

    <div class="toTheTop is-closed">
        <div class="toTheTop__triangle"></div>
        <a class="toTheTop__number">Наверх</a>
    </div>

</footer>