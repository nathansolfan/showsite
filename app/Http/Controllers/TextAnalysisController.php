<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextAnalysisController extends Controller
{
    public function analysis(Request $request)
    {
        $text = $request->input('text');

        return response()->json([
            'word_count' => str_word_count($text),
            'chars' => mb_strlen($text)
        ]);

    }
}
