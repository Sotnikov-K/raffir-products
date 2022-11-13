<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use App\Models\Product;

class FilterColor extends Component
{
    public $product_color;
    public $colors;
    public $colorArray;

    protected $listeners = ['currentColors' => 'currentColors'];

    public function currentColors($colorArray){
        $this->colors = $colorArray;
        // dd($this->colors);
    }

    public function mount(){
        // $this->colors = Product::distinct()->get(['product_color']);
    }


    public function filter()
    {
        $this->emitTo('products-table', 'reloadColors', $this->product_color);
        
        // $this->emitTo('products-table', 'reloadProducts', $this->product_color);
    }
   
    public function render()
    {

        // $this->colors = Product::distinct()->get(['product_color']);
        // $colors = $this->colors;
       



        // dd(is_null($this->colorArray));
        if(is_null($this->colorArray))
        {
            $this->colors = Product::distinct()->get(['product_color']);
            
        }
        if($this->colorArray)
        {
            dd($this->colorArray);
        }
        // else $this->colors = $this->colorArray;


        

        
        return view('livewire.store.filter-color');
    }

}
