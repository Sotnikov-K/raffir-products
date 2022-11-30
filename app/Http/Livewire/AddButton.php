<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use Livewire\Component;


class AddButton extends Component
{
    public $basket;
    public $product_id = 5;
    
    public function mount()
    {
        $this->basket = Basket::getBasket();
    }

    public function add() {

        $product_id = $this->product_id;
        $quantity = 1;
        
        // dd($product_id, $quantity);
     
        $this->basket->increase($product_id, $quantity);
        
        $this->refreshCartCountBar();


    }

    public function refreshCartCountBar()
    {
        $this->emit('refreshCartCountBar');
    }

    public function render()
    {
        return view('livewire.add-button');
    }
}
