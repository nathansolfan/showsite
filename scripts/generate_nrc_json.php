<?php
$lexiconPath = __DIR__ . '/../storage/app/lexicons';
$outputFile  = __DIR__ . '/../storage/app/nrc.json';

$nrcTemp = [];
$files = glob($lexiconPath . '/*.txt');

// Passo 1: carrega todas as palavras com suas emoções
foreach ($files as $file) {
    $filename = basename($file);
    if (stripos($filename,'positive')!==false || stripos($filename,'negative')!==false) continue;

    $parts = explode('-', $filename);
    $emotion = strtolower($parts[0]);

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $word = strtolower(trim(preg_split('/\s+/', $line)[0]));
        if (empty($word)) continue;

        if (!isset($nrcTemp[$word])) $nrcTemp[$word] = [];
        $nrcTemp[$word][$emotion] = 1;
    }
}

// Passo 2: remove palavras ambíguas (que aparecem em mais de 1 emoção)
$nrc = [];
foreach ($nrcTemp as $word => $emotions) {
    if (count($emotions) === 1) {
        $nrc[$word] = $emotions; // só mantém palavras com uma emoção clara
    }
}

// Passo 3: opcional, remove palavras muito curtas (1-2 letras)
foreach ($nrc as $word => $emotions) {
    if (mb_strlen($word) <= 2) {
        unset($nrc[$word]);
    }
}

// Salva JSON final
file_put_contents($outputFile, json_encode($nrc, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "✅ NRC JSON dinâmico gerado com " . count($nrc) . " palavras.\n";
