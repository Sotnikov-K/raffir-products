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
    public $category_name;
    protected $listeners = ['reloadProducts' => 'reloadProducts'];
    

    public function mount()
    {
        $this->basket = Basket::getBasket();
        // $this->products = Product::all();
        // $this->products = Product::where('product_category', '=', 'композит')->get();
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

    public function hydrate(){
        // $this->cat
    }


    public function reloadProducts($category_name)
    {
        // $this->products = Product::query();
        // dd($this->products);
        // if($category_name){
        //     $this->products = $this->products->where('product_category', $category_name);
        //     $this->products = Product::where('product_category', '=', $category_name)->get();
        //     dd($this->products);
        // } 
        
        // $this->products = $this->products->get();
        // dd($this->products);

        $this->category_name = $category_name;
    }


    public function render()
    {
        // dd($this->products);
        
        $this->products = Product::where('product_category', '=', $this->category_name)->get();

        $imagesAll = Image::all();
        return view('livewire.products-table', compact('imagesAll'));
    }
}
