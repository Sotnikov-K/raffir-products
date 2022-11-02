<div class="store__filter-type">
    <div class="store__filter-data">
        <label class="store__filter-label" for="type">Фильтр по категориям</label>


        <input wire:model="query" wire:keyup.debounce="filter" class="store__filter-input" type="text" id="name" name="name" list="type" required minlength="4" maxlength="18" size="10" placeholder="Все категории">

        <div class="select-wrapper">
            <select class="select" wire:model="category_name" wire:change="filter" >   
                <option value="">Выбрать категорию...</option>
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
                        <li class="dropdown__list-item" data-value="{{$category->product_category}}">{{$category->product_category}}</li>
                    @endforeach
                </ul>

                <input wire:model="query" wire:keyup.debounce="filter" class="dropdown__input-hidden" type="hidden" name="select-category" value="">
            </div>
        </div> -->

        
       

    </div>
</div>

