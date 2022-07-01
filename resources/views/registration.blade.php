@extends('layouts.app')

@section('slider-main')
    <div class="slider-main">
        <div class="">
            <!-- <img class="slider-main__image" src="/images/home-3.jpg" alt=""> -->
            <h1 class="slider-main__title-text slider-main__title-text-contacts">Login page</h1>
            <p class="slider-main__paragraph-text slider-main__paragraph-text-contacts">please enter your email and password</p>
        </div>

        <div class="">
            <ul>
                <li>

                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="form-wrapper">
            <h1 class="form-header">registration</h1>
            <form class="form" method="POST" action="{{ route('user.registration') }}">
                @csrf
                <div class="form-group">
                    <label class="" for="email">enter your email</label>
                    <input class="form-group-text" id="email" name="email" type="text" value="" placeholder="email">
                    @error('email')
                        <div class="">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="" for="password">enter your password</label>
                    <input class="form-group-text" id="password" name="password" type="password" value="" placeholder="password">
                    @error('password')
                        <div class="">{{ $message }}</div>
                    @enderror
                </div>

                <div class="">
                    <button class="btn btn-listing" type="submit" name="sendMe" value="1">Register</button>
                </div>
            </form>
        </div>

        
    </section>
@endsection


