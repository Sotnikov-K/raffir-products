<div class="store__filter-type">

    <div class="store__filter-data">
        <label class="store__filter-label" for="type">Фильтр по категориям</label>
        <div class="select-wrapper">
            <select class="select" wire:model="selected_category" wire:change="filter">
                    <option wire:key="category-0"  value="all">Все категории</option>
                @foreach($categories as $category)
                    <option wire:key="category-{{ $loop->index + 1 }}" value="{{$category->product_category}}">{{$category->product_category}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="store__filter-data">
        <label class="store__filter-label">Фильтр по цвету</label>
        <div class="select-wrapper">
            <select class="select" wire:model="selected_color" wire:change="filter">
                    <option wire:key="color-0" value="all">все цвета</option>
                @foreach($colors as $color)
                    <option wire:key="color-{{ $loop->index + 1 }}" value="{{$color->product_color}}">{{$color->product_color}}</option>
                @endforeach
            </select>

            <!-- {{ $selected_color }} -->
           
        </div> 
    </div>

    <div class="store__filter-data">
        <label class="store__filter-label">Сортировка по цене</label>
        <div class="select-wrapper">
            <select class="select" wire:model="selected_price" wire:change="filter">
                    <option wire:key="price-0" value="">Не выбрано</option>
                    <option wire:key="price-1" value="low">Cначала дешевле</option>
                    <option wire:key="price-2" value="high">Cначала дороже</option>
            </select>
        </div>
    </div>

</div>