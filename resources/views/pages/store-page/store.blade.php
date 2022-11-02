@extends('layouts.app')

@section('content')

    <main class="store">

        <section class="store__title-container">
            <h1 class="store__title-h1">Магазин Раффир</h1>
        </section>

        <section class="store__filter-container">



            @livewire('store.filter-type')
            

            <div class="store__filter-color">
                <div class="store__filter-data">
                    <label class="store__filter-label" for="color">Фильтр по цвету</label>
                    <input class="store__filter-input" type="text" id="color" name="color" list="color" required size="10" placeholder="Все цвета">
                    <datalist id="color">
                        <option>Все цвета</option>
                        <option>Черный</option>
                        <option>Синий</option>
                        <option>Красный</option>
                        <option>Зеленый</option>
                        <option>Желтый</option>
                    </datalist>
                </div>
            </div>

            <div class="store__filter-price">
                <div class="store__filter-data">
                    <label class="store__filter-label" for="color">Сортировка по цене</label>
                    <input class="store__filter-input" type="text" id="price" name="price" list="price" required size="10" value="Cначала дешевле">
                    <datalist id="price">
                        <option>Cначала дешевле</option>
                        <option>Cначала дороже</option>
                    </datalist>
                </div>
            </div>

        </section>

        @livewire('products-table')

    </main>
@endsection

