<div class="database-filter__wrapper">

    <div class="database-filter__top">
        <div class="database-filter__top-left">
            <p class="database-filter__title">filter</p>
        </div>
        <div class="database-filter__top-right">
            <div class="database-filter__close">
                <p class="database-filter__close-text">close</p>
            </div>
        </div>
    </div>

    <div class="database-filter__middle">

        <!-- 1 filter --type -->
        <div class="database-filter__data database-filter__data--type">
            <p class="database-filter__current-value">item type: <span class="database-filter__current-value--span">all types</span></p>

            <div class="database-filter__options-data">

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="all types" type="radio" name="lot_type" value="all types" checked>
                    <label class="database-filter__options-label" for="all types">all types</label>
                </div>

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="tusk" type="radio" name="lot_type" value="tusk">
                    <label class="database-filter__options-label" for="tusk">tusk</label>
                </div>

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="molar" type="radio" name="lot_type" value="molar">
                    <label class="database-filter__options-label" for="molar">tooth</label>
                </div>

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="splint" type="radio" name="lot_type" value="splint">
                    <label class="database-filter__options-label" for="splint">splint</label>
                </div>

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="bark" type="radio" name="lot_type" value="bark">
                    <label class="database-filter__options-label" for="bark">bark</label>
                </div>

                <div class="database-filter__options">
                    <input class="database-filter__options-input custom-checkbox" form="" id="skull" type="radio" name="lot_type" value="skull">
                    <label class="database-filter__options-label" for="skull">skull</label>
                </div>

            </div>

        </div> 


        <!-- 2 filter --weight -->
        <div class="database-filter__data database-filter__data--weight">
            <p class="database-filter__current-value">weight: <span class="database-filter__current-value--span">from 5 to 50 kg</span></p>

            <div class="database-filter__options-data">

                <div class="database-filter__options-text">

                    <label class="database-filter__options-text-label">
                        <p class="database-filter__options-text-range">from</p>
                        <input class="database-filter__options-input" id="input-0" type="number" min="0" max="500" step="50" placeholder="0">
                    </label>
                
                    <label class="database-filter__options-text-label">
                        <p class="database-filter__options-text-range">to</p>
                        <input class="database-filter__options-input" id="input-1" type="number" min="50" max="500" step="50" placeholder="450">
                        <p class="database-filter__options-text-range">( weight in kilograms )</p>
                    </label>

                </div>

                <div class="database-filter__filters">
                    <div class="database-filter__filters-item">
                        <div class="database-filter__slider" id="range-slider__weight"></div>
                    </div>
                </div> 

            </div>

        </div> 


        <!-- 3 filter --price -->
        <div class="database-filter__data database-filter__data--price">
            <p class="database-filter__current-value">price: <span class="database-filter__current-value--span">from 0 to 1000 usd</span></p>

            <div class="database-filter__options-data">

                <div class="database-filter__options-text">

                    <label class="database-filter__options-text-label">
                        <p class="database-filter__options-text-range">from</p>
                        <input class="database-filter__options-input" id="input-price-1" type="number" min="0" max="500000" step="100" placeholder="0">
                    </label>
            
                    <label class="database-filter__options-text-label">
                        <p class="database-filter__options-text-range">to</p>
                        <input class="database-filter__options-input" id="input-price-2" type="number" min="0" max="100000" step="1000" placeholder="100000">
                        <p class="database-filter__options-text-range">( all prices in USD )</p>
                    </label>

                </div>

                <div class="database-filter__filters">
                    <div class="database-filter__filters-item">   
                        <div class="database-filter__slider" id="range-slider__price"></div>
                    </div>
                </div> 

            </div>

        </div> 

    </div>
</div>