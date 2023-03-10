<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;
use App\Mail\OrderReceived;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Cookie;


class BasketController extends Controller
{
    private $basket;
    public function __construct() {
        $this->basket = Basket::getBasket();
    }

    /**
     * Показывает корзину покупателя
     */
    public function index() {
        $products = $this->basket->products;
        
        return view('pages/cart-page/cart', compact('products'));
    }

    /**
     * Форма оформления заказа
     */
    public function checkout() {

        $products = $this->basket->products;
        return view('/pages/checkout-page/checkout', compact('products'));
    }

    /**
     * Добавляет товар с идентификатором $id в корзину
     */
    // public function add(Request $request, $id) {
    //     //?? сокращенный тернарный оператор - если первая переменная установлена то используется она, иначе вторая сравниваемая 
    //     $quantity = $request->input('quantity') ?? 1;

    //     $this->basket->increase($id, $quantity);

    //     // выполняем редирект обратно на ту страницу,
    //     // где была нажата кнопка «В корзину»
    //     return back();
    //     // return redirect(url()->previous().'#targetclass');
    // }

    /**
     * Увеличивает кол-во товара $id в корзине на единицу
     */
    // public function plus($id) {
    //     $this->basket->increase($id);
    //     // выполняем редирект обратно на страницу корзины
    //     return redirect()->route('basket.index');
    // }

    /**
     * Уменьшает кол-во товара $id в корзине на единицу
     */
    // public function minus($id) {
    //     $this->basket->decrease($id);
    //     // выполняем редирект обратно на страницу корзины
    //     return redirect()->route('basket.index');
    // }

     /**
     * Удаляет товар с идентификаторм $id из корзины
     */
    public function remove($id) {
        $this->basket->remove($id);
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }

    /**
     * Полностью очищает содержимое корзины покупателя
     */
    public function clear() {
        $this->basket->delete();
        // выполняем редирект обратно на страницу корзины
        return redirect()->route('basket.index');
    }


    public function saveOrder(Request $request){


        // проверяем данные формы оформления
        $this->validate($request, [
            'name' => 'required|max:255',
            'country' => 'required|max:255',
            'address' => 'required|max:255',

            'index' => 'required|max:255',
            'email' => 'email|max:255',
            'phone' => 'required|max:255',
            'comment' => 'max:255',
        ]);

        
        // валидация пройдена, сохраняем заказ
        $basket = Basket::getBasket();
        $user_id = auth()->check() ? auth()->user()->id : null;
        
        $order = Order::create(
            $request->all() + ['amount' => $basket->getAmount(), 'user_id' => $user_id]
        );

        foreach ($basket->products as $product) {
            $order->items()->create([
                'product_id' => $product->id,
                'name' => $product->product_name,
                'color' => $product->product_color,
                'category' => $product->product_category,

                'price' => $product->product_price,
                'quantity' => $product->pivot->quantity,
                'cost' => $product->product_price * $product->pivot->quantity,
            ]);
        }

        // dd($order->items);
        // dd($order->id);
        // dd($request->name);
        
        // Mail::to($request->email)->send(new OrderCreated($request->name));
        Mail::to($request->email)->send(new OrderReceived(
            $request->name,
            $order->items,
            $request->country,
            $request->address,
            $order->id,
            $order->created_at,
            $order->amount  
        ));
        // Mail::to('raffirus@yandex.ru')->send(new OrderCreated($request->name));

        // уничтожаем корзину
        $basket->delete();

        return redirect()->route('basket.success')->with('order_id', $order->id);
    }

    /**
     * Сообщение об успешном оформлении заказа
     */
    public function success(Request $request) {
        if ($request->session()->exists('order_id')) {
            // сюда покупатель попадает сразу после успешного оформления заказа
            $order_id = $request->session()->pull('order_id');
            $order = Order::findOrFail($order_id);
            
            return view('pages.success-page.success', compact('order'));
        } else {
            // если покупатель попал сюда случайно, не после оформления заказа,
            // ему здесь делать нечего — отправляем на страницу корзины
            return redirect()->route('basket.index');
        }
    }
}



