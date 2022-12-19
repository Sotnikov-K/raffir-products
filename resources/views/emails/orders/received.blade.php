@component('mail::message', [
    'items' => $items,
    'name' => $name,
    'country' => $country,
    'address' => $address,
    'orderid' => $orderid,
    'orderdate' => $orderdate,
    'orderamount' => $orderamount
    ])

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->
<!-- {{ config('app.name') }} -->
@endcomponent
