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
        $this->selected_category = session()->get('selectedCategory');
        $this->selected_color = session()->get('selectedColor');
        $this->selected_price = session()->get('selectedPrice');
    }
   
    public function filter(){

        $session = session();

        if($this->selected_category){
            $session->put(['selectedCategory' => $this->selected_category]);
        } 
        $this->selected_category = $session->get('selectedCategory');

        if($this->selected_color){
            $session->put(['selectedColor' => $this->selected_color]);
        } 
        $this->selected_color = $session->get('selectedColor');

        if($this->selected_price){
            $session->put(['selectedPrice' => $this->selected_price]);
        } 
        $this->selected_price = $session->get('selectedPrice');

        // dd($this->selected_price);

        $this->emitTo('products-table', 'reloadProducts', $this->selected_category, $this->selected_color, $this->selected_price);
    }

    public function render()
    {

        // Определить Список всех категорий в инпуте категорий
        $this->categories = Product::distinct()->get(['product_category']);

        if(is_null($this->selected_category)){
            $this->colors = Product::distinct()->get(['product_color']);
        } elseif ($this->selected_category == "all") {
            $this->colors = Product::distinct()->get(['product_color']);
        } else {
            $this->colors = Product::select('product_color')->where('product_category', '=', $this->selected_category)->distinct()->get();
        }

        

        return view('livewire.store.product-filter');
    }
}