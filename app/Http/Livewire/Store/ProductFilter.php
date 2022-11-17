<?php

namespace App\Http\Livewire\Store;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Product;

class ProductFilter extends Component
{
    // Выбранные опции из инпута
    public $selected_category;
    public $selected_color;
    public $selected_price;

    // все доступные опции в инпутах
    public $categories;
    public $colors;
    
    public function mount(){
        $this->categories = Product::distinct()->get(['product_category']);
        $this->colors = Product::distinct()->get(['product_color']);
    }
   
    public function filter(){
        $this->emitTo('products-table', 'reloadProducts', $this->selected_category, $this->selected_color, $this->selected_price);
    }

    public function render()
    {

        // Определить Список всех категорий в инпуте категорий
        $this->categories = Product::distinct()->get(['product_category']);
    
        if(is_null($this->selected_category)){

            $this->colors = Product::distinct()->get(['product_color']);

        } elseif ($this->selected_category == "all") {

            // $this->resetSelectedColor();

            $this->colors = Product::distinct()->get(['product_color']);

        } else {

            // $this->resetSelectedColor();

            $this->colors = Product::select('product_color')->where('product_category', '=', $this->selected_category)->distinct()->get();

        }

        

        return view('livewire.store.product-filter');
    }
}