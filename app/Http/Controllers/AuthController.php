<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'name'     => ['required', 'string'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);
        dd($validated);

    }
}
