<div class="store__filter-type">
    <div class="store__filter-data">
        <label class="store__filter-label" for="type">Фильтр по категориям</label>
        <div class="select-wrapper">
            <select class="select" wire:model="category_name" wire:change="filter">
                <option value="">Все категории</option>
                @foreach($categories as $category)
                    <option value="{{$category->product_category}}">{{$category->product_category}}</option>
                @endforeach
            </select>
        </div>



        <!-- <div class="form-group">
            <div class="dropdown">
                <button wire:model="category_name" wire:change="filter" class="dropdown__button">Все категории</button>
                <ul class="dropdown__list">
                    @foreach($categories as $category)
                        <li class="dropdown__list-item" value="{{$category->product_category}} data-value="{{$category->product_category}}">{{$category->product_category}}</li>
                    @endforeach
                </ul>
            </div>
        </div> -->
    
    </div>
</div>

