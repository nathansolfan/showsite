<?php
$afinnPath  = __DIR__ . '/../storage/app/afinn';
$outputFile = __DIR__ . '/../storage/app/afinn/afinn.json';

$afinn = [];
$files = glob($afinnPath . '/*.txt');

foreach ($files as $file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $parts = preg_split('/\s+/', $line);
        $word = strtolower(trim($parts[0]));
        $score = (int)$parts[1];
        $afinn[$word] = $score;
    }
}

// salva JSON
file_put_contents($outputFile, json_encode($afinn, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "✅ AFINN JSON criado com " . count($afinn) . " palavras.\n";
