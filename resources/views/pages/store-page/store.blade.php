@extends('layouts.app')

@section('content')

    <main class="store">

        <section class="store__title-container">
            <h1 class="store__title-h1">Магазин Раффир</h1>
        </section>

        <section class="store__filter-container">

            <div class="store__filter-type">
                <div class="store__filter-data">
                    <label class="store__filter-label" for="type">Фильтр по категории</label>
                    <input class="store__filter-input" type="text" id="name" name="name" list="type" required minlength="4" maxlength="8" size="10" placeholder="Все категории">
                    <datalist id="type">
                        <option>Все типы</option>
                        <option>Композиты</option>
                        <option>Деревянные блоки</option>
                        <option>Бивень мамонта</option>
                        <option>Зуб мамонта</option>
                        <option>Клинки</option>
                    </datalist>
                </div>
            </div>

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
                    <input class="store__filter-input" type="text" id="price" name="price" list="price" required size="10" placeholder="не выбрано">
                    <datalist id="price">
                        <option>не выбрано</option>
                        <option>сначало дешевле</option>
                        <option>сначало дороже</option>
                    </datalist>
                </div>
            </div>

        </section>

        @livewire('products-table')

    </main>
@endsection

