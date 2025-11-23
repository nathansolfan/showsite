<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => ['required','string'],
            'email'  => ['required','email']
        ]);
        $validated['password'] = Hash::make($request['password']);

        $blog = User::create($validated);

        return redirect('/');

    }
}
