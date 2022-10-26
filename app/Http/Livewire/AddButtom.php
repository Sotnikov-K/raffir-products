<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Basket;
use Livewire\Component;


class AddButtom extends Component
{
    public $product_id = 3456;

    public function add(Request $request, $product_id) {
        $this->product_id = $product_id;
        $quantity = $request->input('quantity') ?? 1;
        
        Basket::class->increase($product_id, $quantity);
    }

    public function render()
    {
        return view('livewire.add-buttom');
    }
}
