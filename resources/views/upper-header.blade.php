<section class="upper-header">
   


            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->



        <ul class="upper-header__info">

            <li class="upper-header__info-item">
                <a class="upper-header__link" href="/login">Log In</a>
            </li>

            <li class="upper-header__info-item">
                <a class="upper-header__link" href="/registration">Sign Up</a>
            </li>
           
        </ul>

</section>