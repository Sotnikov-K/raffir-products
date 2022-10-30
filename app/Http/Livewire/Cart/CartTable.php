<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Basket;

class CartTable extends Component
{
    public $basket;
    public $products;

    public function mount() 
    {
        $this->basket = Basket::getBasket();  
    }

    
    public function change($id, $count) 
    {
        $this->emit('refreshCartCountBar');
        $pivotRow = $this->basket->products()->where('product_id', $id)->first()->pivot;
        $this->quantity = $pivotRow->quantity + $count;
        
        if ($this->quantity > 0) {
            // обновляем количество товара $id в корзине
            $pivotRow->update(['quantity' => $this->quantity]);
            $this->basket = Basket::getBasket();

        } else {
            // кол-во равно нулю — удаляем товар из корзины
            $this->basket = Basket::getBasket();
            $pivotRow->delete();
        }
        
        // обновляем поле `updated_at` таблицы `baskets`
        $this->basket->touch();
        // Basket::touch();
    }

    public function plus($id, $count = 1)
    {
        $this->change($id, $count);
    }

    public function minus($id, $count = 1)
    {
        $this->change($id, -1 * $count);
    }

    public function remove($id) {
        $this->basket = Basket::getBasket();
        // удаляем товар из корзины (разрушаем связь)
        $this->basket->products()->detach($id);
        // обновляем поле `updated_at` таблицы `baskets`
        $this->basket->touch();
    }

    public function render()
    {
        // dd($this->basket->products()->where('product_id', $id)->first()->pivot);
        
        $products = $this->basket->products;
        $this->products = $products;
 
        return view('livewire.cart.cart-table');
    }
}
