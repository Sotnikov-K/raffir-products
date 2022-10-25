<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use Livewire\Component;

class CartCounter extends Component
{
    public $counter = 0;
    public $basket;
    public $products;

    public function mount()
    {
        $this->basket = Basket::getBasket();
    }

   


    //метод должен получить все товары в корзине
    //посчитать количество каждого товара в корзине
    //метод возвращает сумму количества каждого товара в корзине пользователя
    public function quantityCounter()
    {
        $quantity = 0;
        // dd($this->products);
        // foreach ($this->products as $product) {
        //     $quantity = $quantity + $product->pivot->quantity;
        // }
        return $quantity;
    }

    public function render()
    {
        $counter = $this->quantityCounter();

        // dd($counter);
        return view('livewire.cart-counter', compact(['counter']));
    }
}



// public function getAmount() {
//     $amount = 0.0;
//     foreach ($this->products as $product) {
//         $amount = $amount + $product->product_price * $product->pivot->quantity;
//     }
//     return $amount;
// }