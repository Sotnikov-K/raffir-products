<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BasketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home-page/home');
});

Route::get('/store', [PageController::class, 'store'])->name('store');
Route::name('product')->get('/store/{slug}', [PageController::class, 'product']);



Route::get('/cart', [BasketController::class, 'index'])->name('basket.index');
Route::get('/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');

Route::post('/cart/add/{id}', [BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basket.add');

Route::post('/cart/plus/{id}', [BasketController::class, 'plus'])
    ->where('id', '[0-9]+')
    ->name('basket.plus');
Route::post('/cart/minus/{id}', [BasketController::class, 'minus'])
    ->where('id', '[0-9]+')
    ->name('basket.minus');

Route::post('/cart/remove/{id}', [BasketController::class, 'remove'])
    ->where('id', '[0-9]+')
    ->name('basket.remove');
Route::post('/cart/clear', [BasketController::class, 'clear'])->name('basket.clear');


// Route::get('/basket/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Route::get('/checkout', function(){
//     return view('/pages/checkout-page/checkout');
// })->name('basket.checkout');

Route::post('/basket/saveorder', [BasketController::class, 'saveOrder'])->name('basket.saveorder');


Route::get('/basket/success', [BasketController::class, 'success'])->name('basket.success');









Route::get('/contacts', function () {
    return view('pages/contacts-page/contacts');
});


Route::name('user.')->group(function () {
    Route::view('/dashboard', 'pages/dashboard-page/dashboard')->middleware('auth')->name('dashboard');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.dashboard'));
        }
        return view('pages/login-page/login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);


    Route::get('/logout', function () {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/');
        }
    })->name('logout');


    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('user.dashboard'));
        }
        return view('/pages/registration-page/registration');
    })->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);
});




Route::get('/dashboard/create-product-composite', [\App\Http\Controllers\ProductController::class, 'create'])->middleware(['auth'])->name('dashboard-create-product-composite');
Route::post('/dashboard', [\App\Http\Controllers\ProductController::class, 'store']);

Route::get('/dashboard/create-product-wood', function () {
    return view('pages/dashboard-page/create-product/create-product-wood');
});

Route::get('/dashboard/create-product-mammoth', function () {
    return view('pages/dashboard-page/create-product/create-product-mammoth');
});

Route::get('/dashboard/create-product-blade', function () {
    return view('pages/dashboard-page/create-product/create-product-blade');
});

Route::get('/dashboard/edit-products', [\App\Http\Controllers\ProductController::class, 'show'])->middleware(['auth'])->name('dashboardEdit');
Route::get('/dashboard/edit-products/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->middleware(['auth'])->name('dashboard-edit-product');

Route::patch('/dashboard/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->middleware(['auth']);
Route::delete('/dashboard/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->middleware(['auth']);

Route::get('/mail', function () {
    $order = App\Models\Order::find(50);
    return new App\Mail\OrderCreated($order);
});





/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
| 
*/

Route::get('/composite', function () {
    return view('pages/composites-page/composites');
});

Route::get('/wood', function () {
    return view('pages/wood-page/wood');
});

Route::get('/mammoth', function () {
    return view('pages/mammoth-page/mammoth');
});

Route::get('/blades', function () {
    return view('pages/blades-page/blades');
});
