<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'title' => ['required'],
            'content' => ['required'],
        ]);
        $validated['user_id'] = auth()->id();

        Blog::create($validated);
        return redirect('/blog');

    }

    public function create()
    {
        return view('blog.create');
    }

    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        // Here, $id could be a slug. For now, check if it's 'dogProject'
        if ($id === 'dogProject') {
            return view('blog.dogProject');
        }
        return view('blog.show', ['blog' => $blog]);
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function article()
    {
        return view('blog.article');

    }
}
