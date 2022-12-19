@component('mail::layout')

    @slot('header')
        @component('mail::header', ['name' => $name, 'country' => $country, 'address' => $address])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    @slot('congratulation')
        @component('mail::congratulation', ['url' => 'http://raffir-products.net'])     
        @endcomponent
    @endslot


    @slot('listingtitle')
        @component('mail::listingtitle')  
        @endcomponent
    @endslot

    @slot('listing')
        @component('mail::listing', ['items' => $items])  
        @endcomponent
    @endslot

    @slot('orderinfo')
        @component('mail::orderinfo', ['orderid' => $orderid, 'orderdate' => $orderdate])  
        @endcomponent
    @endslot

    @slot('counter')
        @component('mail::counter', ['orderamount' => $orderamount])  
        @endcomponent
    @endslot

    @slot('help')
        @component('mail::help')  
        @endcomponent
    @endslot

    @slot('helpdata')
        @component('mail::helpdata')  
        @endcomponent
    @endslot


    @slot('fastlinkstitle')
        @component('mail::fastlinkstitle')  
        @endcomponent
    @endslot

    @slot('policy')
        @component('mail::policy')  
        @endcomponent
    @endslot

    @slot('footer')
        @component('mail::footer')
        © {{ date('Y') }} Компания Раффир. @lang('Все права защищены.')
        @endcomponent
    @endslot



@endcomponent

