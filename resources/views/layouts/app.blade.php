<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Раффир - материалы для ножей</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,200&family=Play&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/app.css">

        @livewireStyles
        
    </head>

    <body>
        <div class="page">
            
            @include('components/common-components/header')

            @yield('content')

            @include('components/common-components/footer')

            <!-- <script src="fslightbox.js"></script> -->
            <script src="{{ mix('/js/app.js') }}"></script>
           

            @livewireScripts
        </div>
    </body>
</html>