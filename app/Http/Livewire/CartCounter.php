<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use Livewire\Component;

class CartCounter extends Component
{


    protected $listeners = [
        'refreshCartCountBar' => 'refresher',
    ];

    public function refresher(){

        $quantity = 0;
        $basket = Basket::getBasket();

        foreach ($basket->products as $product) {
            $quantity = $quantity + $product->pivot->quantity;
        }
    
    } 


    public function render()
    {
        $quantity = 0;
        $basket = Basket::getBasket();

        foreach ($basket->products as $product) {
            $quantity = $quantity + $product->pivot->quantity;
        }

        return view('livewire.cart-counter', compact('quantity'));
    }
}