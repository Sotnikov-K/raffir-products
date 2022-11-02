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
    public $products;

    protected $listeners = ['reloadProducts' => 'reloadProducts'];


    public function mount()
    {
        $this->basket = Basket::getBasket();
        $this->products = Product::all();
        
    }

    public function add(Request $request, $id) 
    {
        $quantity = $request->input('quantity') ?? 1;
        $this->basket->increase($id, $quantity);
    }

    public function refreshCartCountBar(){
        $this->emit('refreshCartCountBar');
    }

    public function reloadProducts($category_name, $query){
        $this->products = Product::query();

        // dd($this->products);

        if($category_name){
            // dd($category_name);
            $this->products = $this->products->where('product_category', $query);
            // dd($this->products);
            $this->products = $this->products->get();
        }
    }


    public function render()
    {
        // $products = Product::all();

        $products = $this->products;

        // $products = Product::where('product_category', 'композит')->get();
        // $products = Product::where('product_category', 'брусок')->get();

        $imagesAll = Image::all();

        // dd($products);

        // return view('livewire.products-table', compact('products', 'imagesAll'));
        return view('livewire.products-table', compact('imagesAll'));
    }
}
