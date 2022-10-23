<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Basket;

class AddButtom extends Component
{
    

    public function add(Request $request, $id) {
        $quantity = $request->input('quantity') ?? 1;
        Basket::class->increase($id, $quantity);
    }

    public function render()
    {
        return view('livewire.add-buttom');
    }
}
