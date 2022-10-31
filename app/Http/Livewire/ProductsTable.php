<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Basket;
use Livewire\Component;

class ProductsTable extends Component
{
    public $basket;
    public function mount()
    {
        $this->basket = Basket::getBasket();
    }

    public function add(Request $request, $id) 
    {
        $quantity = $request->input('quantity') ?? 1;
        $this->basket->increase($id, $quantity);
    }

    public function refreshCartCountBar(){
        $this->emit('refreshCartCountBar');
    }


    public function render()
    {
        // $products = Product::all();

        $products = Product::where('product_category', 'композит')->get();
        // $products = Product::where('product_category', 'брусок')->get();

        $imagesAll = Image::all();

        // dd($products);

        return view('livewire.products-table', compact('products', 'imagesAll'));
    }
}
