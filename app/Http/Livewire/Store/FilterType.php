<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use App\Models\Product;


class FilterType extends Component
{

    public $category_name;
    public $query;


    public function filter(){
        $this->emitTo('products-table', 'reloadProducts', $this->category_name, $this->query);
    }


    public function render()
    {
        $categories = Product::distinct()->get(['product_category']);
        // $products = Product::all();

        return view('livewire.store.filter-type', compact('categories'));
    }
}
