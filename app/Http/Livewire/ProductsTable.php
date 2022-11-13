<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;
use App\Models\Image;
use App\Models\Basket;
use Livewire\Component;

class ProductsTable extends Component
{
    public $basket;
    public Collection $products;
    public string $selected_category;


    public string $color_name = '';
    public array $colorArray;
    public $product_color;
    

    public $imagesAll;
    protected $listeners = ['reloadProducts' => 'reloadProducts'];
   

    public function mount()
    {
        $this->basket = Basket::getBasket();
        $this->imagesAll = Image::all();
        $this->products = Product::all();
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

    public function reloadProducts($selected_category, $selected_color, $selected_price)
    {
        $products = Product::query();

        if(!is_null($selected_category) && $selected_category !== 'all'){
            $products = $products->where('product_category', '=', $selected_category);
        } else $products->where('product_category', '!=', '');
       
        if(!is_null($selected_color) && $selected_color !== 'all'){
            $products = $products->where('product_color', '=', $selected_color);
        } else $products->where('product_color', '!=', '');

        if($selected_price == 'low'){
            $this->products = $products->orderBy('product_price', 'ASC')->get();
        } elseif ($selected_price == 'high') {
            $this->products = $products->orderBy('product_price', 'DESC')->get();
        } else $this->products = $products->get();
    }

    public function render()
    { 
        return view('livewire.products-table');
    }
}
