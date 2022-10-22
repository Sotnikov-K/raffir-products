<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\Basket;

use Livewire\Component;

class AddButtom extends Component
{

    public $name = "Kirill";

    public $count = 0;

    public function add(Request $request, $id) {
        $quantity = $request->input('quantity') ?? 1;
        Basket::class->increase($id, $quantity);
    }

    public function test() {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.add-buttom');
    }
}
