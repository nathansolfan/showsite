<?php

namespace App\Http\Controllers;

use App\Models\LoadUp\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3', 'string']
        ]);
        
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        auth()->login($user);

        return redirect('/');
    }

    public function create()
    {
        return view('user.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $blogs = $user->blogs;

        return view('user.show', [
            'user' => $user,
            'blogs' => $blogs,
        ]);
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }
    

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/');
    }

    public function makeAdmin(User $user)
    {
        $user->update(['is_admin' => true]);
        return redirect()->back()->with('User is now an Admin');
    }

    public function update(User $user, Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string']
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request['password']);
        };

        $user->update($validated);

        return redirect('/');
    }

    public function changeStatus(Booking $booking, Request $request)
    {
        $status = $booking->update(['status' => $request->status]);
        return redirect()->back();
    }

    //Shows user list of blogs
    public function blogs(User $user)
    {
        $blogs = $user->blogs;
        return view('user.blogs', [
            'blogs' => $blogs,
            'user' => $user
        ]);
    }
}
