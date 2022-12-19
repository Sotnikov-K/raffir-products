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
        $this->getProducts();
        // $this->getSelectedFiters();
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
        $session = session();

        if($selected_category){
            $session->put(['category' => $selected_category]);
        } 

        if($selected_color){
            $session->put(['color' => $selected_color]);
        }

        if($selected_price){
            $session->put(['price' => $selected_price]);
        }

        $this->getProducts();
    }


    public function getProducts()
    {
        if(session()->has('category') || session()->has('color') || session()->has('price') )
        {

            $selected_category = session()->get('category');
            // dd($selected_category);

            $selected_color = session()->get('color');
            $selected_price = session()->get('price');
           
            $products = Product::query();
       
            if(!is_null($selected_category) && $selected_category !== 'all' ){
                $products = $products->where('product_category', '=', $selected_category);
            } else $products->where('product_category', '!=', '');
    
            if(!is_null($selected_color) && $selected_color !== 'all'){
                $products = $products->where('product_color', '=', $selected_color);
            } else $products->where('product_color', '!=', '');
    
            
    
            // фильтр по цене
            if($selected_price == 'low'){
                $this->products = $products->orderBy('product_price', 'ASC')->get();
            } elseif ($selected_price == 'high') {
                $this->products = $products->orderBy('product_price', 'DESC')->get();
            } else $this->products = $products->get();


        } else $this->products = Product::all();

    }

    public function getSelectedFilters()
    {

    }



    public function render()
    { 
        return view('livewire.products-table');
    }
}
