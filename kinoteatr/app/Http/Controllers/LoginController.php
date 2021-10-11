<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

//use App\Web\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if (Auth::check()) {
            return redirect()->intended(route('user.private'));
        }

//        $formFilds = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
        $formFilds = $request->only(['email', 'password']);
//        dd($formFilds);

//        $email = $request->email;
//        $password = $request->password;

//        dd($email);

//        if (Auth::attempt(['email' => $email, 'password' => $password, ])) {
////                    dd($formFilds);
////            $request->session()->regenerate();
//
//            return redirect()->intended(route('user.private'));
//        }

//        if (Auth::attempt([
//            'email' => $request->get('email'),
//            'password' => $request->get('password'),
//        ])){
//            return redirect()->intended(route('user.private'));
//        }

        if (Auth::attempt($formFilds)) {
            return redirect()->intended(route('user.private'));
        }
//        dd($formFilds);
        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось авторизоваться']);
    }
}
