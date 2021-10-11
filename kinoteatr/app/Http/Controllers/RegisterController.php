<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }

        $validateFild = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
//            'name' => 'required',
        ]);

        if(User::where('email', $validateFild['email'])->first()){
            return redirect(route('user.registration'))
                ->withErrors(['email' => 'Пользователь с таким email уже есть']);
        }


        $user = User::create($validateFild);
        if ($user) {
            Auth::login($user);
            return redirect(route('user.private'));
        }
        return redirect(route('user.login'))
            ->withErrors([' formError' => 'Ошибка при сохрании пользователя']);
    }


}
