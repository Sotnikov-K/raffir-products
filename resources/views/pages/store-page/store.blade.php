@extends('layouts.app')

@section('content')

    <main class="store">

        <section class="store__title-container">
            <h1 class="store__title-h1">Магазин Раффир</h1>
        </section>

        <section class="store__filter-container">

            {{-- @livewire('store.filter-type') --}}
            {{-- @livewire('store.filter-color')  --}}
            
            @livewire('store.product-filter')
           
        </section>

        @livewire('products-table')

    </main>
@endsection

