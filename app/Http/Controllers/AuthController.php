<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login-form');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if(!auth()->attempt($credentials)){

            return redirect()
            ->back(fallback: route('auth.login.form'))
            ->withInput()
            ->with('feedback.message', 'las credenciales son incorrectas');
        }

        return redirect()
            ->route('products.all-products')
            ->with('feedback.message', 'inicio de sesion exitoso');

    }

    public function logoutProcess(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
        ->route('auth.login.form')
        ->with('feedback.message', 'Cierre de sesion exitoso');
    }
}
