<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Basket;

class CartTable extends Component
{

    public $product_id;
    public $basket;

    public function mount() {
        $this->basket = Basket::getBasket();
    }

    public function increment($product_id){
        $this->basket->increase($product_id);
    }


    public function render()
    {
        return view('livewire.cart.cart-table');
    }
}
