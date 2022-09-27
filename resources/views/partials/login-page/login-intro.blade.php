<section class="intro">

    <div class="intro__data intro__data--login">
        
        <div class="intro__text-wrapper">
            <h1 class="intro__title">Login</h1>
            <p class="intro__paragraph intro__paragraph--login">Please enter your email and password</p>
        </div>

        <div class="intro__text-wrapper">
            <form class="form" method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="form-group">   
                    <input class="login-intro__input-email" id="email" name="email" type="text" value="" placeholder="email">
                    @error('email')
                        <div class="">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input class="login-intro__input-email" id="password" name="password" type="password" value="" placeholder="password">
                    @error('password')
                        <div class="">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <button class="btn btn--login" type="submit" name="sendMe" value="1">log in
                        <img class="registration-intro__arrow" src="/images/icons/arrow-black.png" alt="" srcset="">
                    </button>
                </div>

            </form>
        </div>

    </div>

    <div class="intro__image-description">
        <p class="intro__image-description-text">item</p>
    </div>

</section>