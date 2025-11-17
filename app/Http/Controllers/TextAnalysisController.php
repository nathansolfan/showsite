<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextAnalysisController extends Controller
{
    public function analysis(Request $request)
    {
//        $text = strtolower($request->input('text'))
        $text = strtolower($request->input('text'));
        if (empty($text)) {
            return response()->json([
                'error' => 'No text provided'
            ], 400);
        }

        //get words
        $words = str_word_count($text, 1);

        //load afinn
        $afinn = json_decode(file_get_contents(storage_path('app/afinn/afinn.json')), true);
        $score = 0;
        $positiveWords = 0;
        $negativeWords = 0;


        foreach ($words as $word) {
            $word = trim($word, "\t\n\r\0\x0B.,;:!?'\"()[]{}");
            if (isset($afinn[$word])) {
                $score += $afinn[$word];
                if ($afinn[$word] > 0) $positiveWords++;
                if ($afinn[$word] < 0) $positiveWords++;
            }
        }
        $feeling = $score > 0 ? 'positive' : ($score < 0 ? 'negative' : 'neutral');

        //NRC file i generated
        $nrc = json_decode(file_get_contents(storage_path('app/nrc.json')), true);

        $emotions = [
            'joy' => 0,
            'anger' => 0,
            'fear' => 0,
            'sadness' => 0,
            'disgust' => 0,
            'trust' => 0,
            'anticipation' => 0,
            'surprise' => 0
        ];

        //count emotions
        foreach ($words as $word) {
            $word = trim(strtolower($word),  " \t\n\r\0\x0B.,;:!?'\"()[]{}");

            if (isset($nrc[$word])) {
                foreach ($nrc[$word] as $emotion => $v ) {
                    if (isset($emotions[$emotion])) {
                        $emotions[$emotion] += 1;
                    }
                }
            }
        }

        return response()->json([
            'word_count'     => count($words),
            'chars'          => mb_strlen($text),
            'feeling_score'  => $score,
            'feeling'        => $feeling,
            'positive_words' => $positiveWords,
            'negative_words' => $negativeWords,
            'emotions'       => $emotions
        ]);
    }

}
