<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



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

// Route::name('home')->get('/', function () {
//     return view('home');
// });

Route::name('home')->get('/', [PagesController::Class, 'home']);
Route::name('cultHeritage')->get('/cultural-heritage', [PagesController::Class, 'cultHeritage']);

Route::name('contacts')->get('/contacts', function () {
    return view('contacts');
});

Route::get('/login', function () {
    return view('login');
});


Route::name('database')->get('/database', [PagesController::class, 'database']);
Route::name('databaseItem')->get('database/{slug}', [PagesController::class, 'databaseItem']);






Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/private/create', [\App\Http\Controllers\LotController::class, 'create'] )->middleware('auth')->name('private/create');
    Route::post('/private', [\App\Http\Controllers\LotController::class, 'store'] );

    Route::get('/login', function(){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
        })->name('logout');

    Route::get('/registration', function(){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        return view('registration');

    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

});
