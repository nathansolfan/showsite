<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextAnalysisController extends Controller
{
    public function analysis(Request $request)
    {
        $text = $request->input('text');
        $words = str_word_count($text, 1);

        //FINN
        $afinn = json_decode(file_get_contents(storage_path('app/afinn/afinn.json.txt')), true);
        $score = 0;

        foreach ($words as $word) {
            if (isset($afinn[$word])) {
                $score += $afinn[$word];
            }
        }
        $feeling = $score > 0 ? 'positive' : ($score < 0 ? 'negative' : 'neutral');

        return response()->json([
            'word_count'    => count($words),
            'chars'         => mb_strlen($text),
            'feeling_score' => $score,
            'feeling'       => $feeling
        ]);

    }
}
