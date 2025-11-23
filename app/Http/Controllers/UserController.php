<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => ['required','string'],
            'email'  => ['required','email']
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $blog = Blog::create($validated);

        return redirect('/');

    }
}
