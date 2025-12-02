<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Invalid Email'
        ]);


    }

    public function logout()
    {
        Auth::logout();
        return redirect('/blog');

    }
}
