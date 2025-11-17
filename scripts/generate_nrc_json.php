<?php
$lexiconPath = __DIR__ . '/../storage/app/lexicons';
$outputFile  = __DIR__ . '/../storage/app/nrc.json';

$nrc = [];
$files = glob($lexiconPath . '/*.txt');

foreach ($files as $file) {
    //get emotion from the file. 1- file without path. 2- divide string into parts. 3- $parts[0]=emotion
    $filename = basename($file);
    $parts = explode('-', $filename);
    $emotion = strtolower($parts[0]);

    //read lines
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $wordParts = preg_split('/\s+/', $line);
        $word = strtolower($wordParts[0]);

        if (!isset($nrc[$word])) {
            $nrc[$word] = [];
        }
        $nrc[$word][$emotion] = 1;
    }
}
file_put_contents($outputFile, json_encode($nrc, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "nrc.json generated great :" . count($nrc) . "\n";
