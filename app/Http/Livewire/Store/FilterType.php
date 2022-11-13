<?php

namespace App\Http\Livewire\Store;
use Livewire\Component;
use App\Models\Product;

class FilterType extends Component
{
    // public $category_name;
    // public $categories;
   

    public function render()
    {
        // $this->categories = Product::distinct()->get(['product_category']);
       
        // dd($this->colors);

        // return view('livewire.store.filter-type');
    }

    public function filter(){
        $this->emitTo('products-table', 'reloadProducts', $this->category_name);
        $this->emitTo('products-table', 'getCurrentColors', $this->category_name);
    }

    // public function currentColor(){
    //     $this->emitTo('products-table', 'getCurrentColors', $this->category_name);
    // }

}
