<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Basket;

// $basketCost = $basketCost + $itemCost;

class CartTable extends Component
{
    public $basket;
    public $products;
    
    
    public function mount() 
    {
        $this->basket = Basket::getBasket(); 
        
    }

  

    private function change($id, $count = 0) {
        // получаем объект строки таблицы `basket_product`
        $pivotRow = $this->basket->products()->where('product_id', $id)->first()->pivot;
        
        $quantity = $pivotRow->quantity + $count;
        if ($quantity > 0) {
            // обновляем количество товара $id в корзине
            $pivotRow->update(['quantity' => $quantity]);
        } else {
            // кол-во равно нулю — удаляем товар из корзины
            $pivotRow->delete();
        }
       

        // обновляем поле `updated_at` таблицы `baskets`
        // Basket::touch();
    }



    public function plus($id, $count = 1)
    {
        $this->change($id, $count);
    }

    public function render()
    {
        // dd($this->basket->products()->where('product_id', $id)->first()->pivot);
        

        $products = $this->basket->products;
        $this->products = $products;
        
        return view('livewire.cart.cart-table');
    }
}
