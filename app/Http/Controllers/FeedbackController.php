<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        // fetch feedback to display
        $feedbacks = Feedback::latest()->take(6)->get();
        return view('pages.feedback', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // save
        Feedback::create($request->all());

        return redirect()->route('feedback')->with('success', 'Thank you for your feedback');
    }
}
