<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextAnalysisController extends Controller
{
    public function analysis(Request $request)
    {
        $text = strtolower($request->input('text'));
        if (empty($text)) {
            return back()->with('error', 'Provide Text');
        }

        $words = str_word_count($text, 1);

        $afinn = json_decode(file_get_contents(resource_path('afinn/afinn.json')), true);
        $score = 0;
        $positiveWords = [];
        $negativeWords = [];
        $yea = [];

        foreach ($words as $word) {
            $word = trim($word, "\t\n\r\0\x0B.,;:!?'\"()[]{}");
            if (isset($afinn[$word])) {

                $score += $afinn[$word]; //add total - or +
                if ($afinn[$word] > 0) {
                    $positiveWords[] = $word;
                }

                if ($afinn[$word] < 0 ) {
                    $negativeWords[] = $word;
                }
            }
        }

        $feeling = $score > 0 ? 'positive' : ($score < 0 ? 'negative' : 'neutral');

        return view('analyze.analyze', [
            'result' => [
                'word_count' => count($words),
                'chars' => mb_strlen($text),
                'feeling_score' => $score,
                'feeling' => $feeling,
                'positive_words' => implode(', ', $positiveWords),
                'negative_words' => implode(', ', $negativeWords),
            ]
        ]);
    }
}
