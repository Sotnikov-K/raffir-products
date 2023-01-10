<header class="header">
    <div class="header__left">
        
        <nav class="nav">

            <ul class="nav__list">

                <li class="nav__item">
                    <a class="nav__link" href="/">
                        <img class="logo" src="/images/logo/logotype_raffir.svg" alt="logo of the company">
                    </a>
                </li>

                <li class="nav__item">
                    <a class="nav__link has-subnav" href="/">Материалы</a>

                    <ul class="subnav">
                        <li><a class="subnav__link" href="/composite">Композиты</a></li>
                        <li><a class="subnav__link" href="/wood">Древесина</a></li>
                        <li><a class="subnav__link" href="/mammoth">Бивень и зуб мамонта</a></li>
                        <li><a class="subnav__link" href="/blade">Ножевые клинки</a></li>
                        <li><a class="subnav__link" href="/info">О материалах</a></li>
                        <li><a class="subnav__link" href="/dashboard">Админ панель </a></li>
                    </ul>

                </li>

                
                <li class="nav__item">
                    <a class="nav__link" href="/knives">Ножи</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="/store">Магазин</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="/contacts">Контакты</a>
                </li>

            </ul>

        </nav>

        <a class="nav__link1" href="index.html">
            <img class="logo" src="/images/logo/logotype_raffir.svg" alt="logo">
        </a>

        <button class="burger active" type="button" id="sidebarToggle">
            <span>
                открыть навигацию
            </span>
        </button>

    </div>

    <div class="header__right">
        <nav class="nav">
            <ul class="nav__list">
                
                <li class="nav__item">
                    <a class="nav__link" href="index.html">
                        <img class="logo" src="/images/flag/flag-ru.jpg" style="width: 20px;">
                    </a>
                </li>

                @livewire('cart-counter')

            </ul>
        </nav>

            
    </div>
</header>
 
