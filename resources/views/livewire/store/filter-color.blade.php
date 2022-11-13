<div class="store__filter-type">
    <div class="store__filter-data">
        <label class="store__filter-label">Фильтр по цвету</label>
        <div class="select-wrapper">
            <select class="select" wire:model="product_color" wire:change="filter">
                <option value="">все цвета</option>
                @foreach($colors as $color)
                    <option wire:key="item-{{ $loop->index }}" value="{{$color->product_color}}">{{$color->product_color}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>