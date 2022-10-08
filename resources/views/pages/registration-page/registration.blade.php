@extends('layouts.app')

@section('content')

<section class="intro" style="margin: 100px;">

    <div class="intro__data intro__data--login">
        
        <div class="intro__text-wrapper">
            <h1 class="intro__title">Registration</h1>
            <p class="intro__paragraph intro__paragraph--login">Please enter your email and password</p>
        </div>

        <div class="intro__text-wrapper">
            <form class="form" method="POST" action="{{ route('user.registration') }}">
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

    

</section>


@endsection