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


    public function render()
    {
        $products = Product::all();
        $imagesAll = Image::all();

        return view('livewire.products-table', compact('products', 'imagesAll'));
    }
}
