<div class="mobile-menu">
    <div class="mobile-menu__wrapper">

        <ul class="mobile-menu__ul">
            <a class="mobile-menu__a" href="/">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Главная страница</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/composite">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Композиты</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/wood">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Древесина</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/mammoth">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Зуб мамонта</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/blades">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p" href="/">Клинки</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/knives">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Ножи</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
            <a class="mobile-menu__a" href="/contacts">
                <li class="mobile-menu__li">
                    <p class="mobile-menu__p">Контакты</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </li>
            </a>
        </ul>

      

        <ul class="mobile-menu__ul-profile">

            <a class="mobile-menu__a" href="/store">
                <div class="mobile-menu__shopping-wrapper mobile-menu__shopping-wrapper--store">
                    <p class="mobile-menu__shopping-name">Магазин</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </div>
            </a>

            <a class="mobile-menu__a" href="/cart">
                <div class="mobile-menu__shopping-wrapper">
                    <p class="mobile-menu__shopping-name">Корзина</p>
                    <img class="mobile-menu__img" src="images/icons/footer-arrow-circle-right-white.png" alt="arrow-img">
                </div>
            </a>
            
            
            



            {{-- <a class="mobile-menu__a" href="/cart">
                <div class="mobile-menu__shopping-wrapper">
                    <p class="mobile-menu__shopping-name">Корзина</p>
                    <p class="mobile-menu__shopping-added">+ 1</p>

                    
                </div>
            </a> --}}

            

            {{-- <a class="mobile-menu__a" href="/login">
                <div class="mobile-menu__shopping-wrapper">
                    @if (Auth::check())

                        @isset(Auth::user()->profile->nickname)
                        <p class="mobile-menu__shopping-name">{{ Auth::user()->profile->nickname }}</p>
                        <p class="mobile-menu__online-status">online</p>
                        @endisset

                        @empty(Auth::user()->profile->nickname)
                        <p class="mobile-menu__shopping-name">account</p>
                        <img class="mobile-menu__shopping-icon" src="/login.svg" alt="login logotype">
                        @endempty

                        @else
                        <p class="mobile-menu__shopping-name">login / registration</p>
                        <img class="mobile-menu__shopping-icon" src="/login.svg" alt="login logotype">

                    @endif

                    
                </div>
            </a> --}}

        </ul>
    </div>
</div>