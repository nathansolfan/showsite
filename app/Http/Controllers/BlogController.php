<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required'],
            'email' => ['required', 'email'],
            'title' => ['required'],
            'content' => ['required'],
        ]);

        Blog::create($validated);
        return redirect('/blog');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::all();
        // Here, $id could be a slug. For now, check if it's 'dogProject'
        if ($id === 'dogProject') {
            return view('blog.dogProject');
        }
        return view('blog.show');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function article()
    {
        return view('blog.article');

    }
}
