<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Image;
use App\Models\Basket;
use Livewire\Component;

class ProductsTable extends Component
{
    public $basket;
    public $products;
    public $category_name = 'композит';
    public $imagesAll;

    protected $listeners = ['reloadProducts' => 'reloadProducts'];
    
    public function mount()
    {
        $this->basket = Basket::getBasket();
        $this->imagesAll = Image::all();

        $this->getProducts();
    }




    public function add(Request $request, $id) 
    {
        $quantity = $request->input('quantity') ?? 1;
        $this->basket->increase($id, $quantity);
    }

    public function refreshCartCountBar()
    {
        $this->emit('refreshCartCountBar');
    }


    public function getProducts()
    {
        $products = Product::where('product_category', $this->category_name)->get();
        $this->products = $products;
        // dd($products);
    }
    
    public function reloadProducts($category_name)
    {
        $products = Product::query();
    
        $this->category_name = $category_name;
        
        if($category_name){
            $products = $products->where('product_category', $category_name);
            // dd($products);
        } 
        
        
        $this->products = $products->get();
        //  dd($this->products);

        // $this->category_name = $category_name;
    }

    public function render()
    {
        // return view('livewire.products-table', compact('imagesAll'));
        return view('livewire.products-table');
    }
}
