<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users] );
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required','string'],
            'email'    => ['required','email'],
            'password' => ['required', 'min:3', 'string']
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return redirect('/');
    }

    public function show($id)
    {
//        dd($id);
        $user = User::findOrFail($id);

        return view('user.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
//        dd($user);
    }

    public function update(User $user, Request $request)
    {
        dd();
        $validated = $request->validate([
            'name'  => ['required', 'string'],
            'email' => ['required', 'email', 'string']
        ]);
        $validated['password'] = Hash::make($request['password']);

        $user->update($validated);

        return redirect('/');



    }




}
