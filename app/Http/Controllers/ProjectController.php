<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('projects.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
        ]);

        // check if user uploaded img
        if ($request->hasFile('image')) {
            // access file(), then store it in a variable, and ->store()
            $validatedData['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($validatedData);

        return redirect()->route('projects.index')->with('success', 'Project has been stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // $project = Project::findOrFail($id); - not needed since Project $project
        return view('projects.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'url' => 'nullable|url',
            'github_url' => 'nullable|url',
        ]);

        $project->update($validatedData);

        return redirect()->route('projects.index')->with('success', 'Project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted');
    }
}
