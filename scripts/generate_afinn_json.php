<?php

$afinnPath  = __DIR__ . '/../storage/app/afinn';
$outputFile = __DIR__ . '/../storage/app/afinn.json';

$afinn = [];

$files = glob($afinnPath . '/*txt');

foreach ($files as $file) {

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $wordParts = preg_split('/\s+/', $line);
        $word = strtolower(trim($wordParts[0]));
        $score = (int) $wordParts[1];

        $afinn[$word] = $score;
    }
    file_put_contents($outputFile, json_encode($afinn, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "afinn.json has been created" . count($afinn) . " words\n";
}
