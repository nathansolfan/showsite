<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ContactController extends Controller

{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
            'honeypot' => 'size:0', // Honeypot should be empty
        ]);


        // Create document content
        $content = "Name: " . $validated['name'] . "\n";
        $content .= "Email: " . $validated['email'] . "\n";
        $content .= "Date: " . now()->format('Y-m-d H:i:s') . "\n";
        $content .= "Message:\n" . $validated['message'] . "\n";

        // Generate a unique filename
        $filename = 'contact_' . now()->format('Y-m-d_H-i-s') . '_' . Str::random(8) . '.txt';

        // Save to storage
        Storage::disk('local')->put('contacts/' . $filename, $content);

        return redirect()->back()->with('success', 'Thank you for your message! We\'ll get back to you soon.');


    }
}
