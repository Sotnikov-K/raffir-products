<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){

        if(Auth::check()){
            return redirect(route('user.dashboard'));
        }

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

    if(User::where('email', $validatesFields['email'])->exists()){
        return redirect(route('registration'))->withErrors([
            'formError' => 'Такой пользователь уже существует'
        ]);
    }

    $user = User::create($data);

    if($user){
        Auth::login($user);
        return redirect(route('user.dashboard'));
    }
    return redirect(route('login'))->withErrors([
        'formError' => 'Произошла ошибка при сохранении пользователя'
    ]);

}
}
