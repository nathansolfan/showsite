<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class NetflixScraper implements ScraperInterface
{
    private string $url = 'https://help.netflix.com/en/node/24926/gb';

    public function scrape(): array
    {
        $response = Http::timeout(30)
            ->withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ])
            ->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Netflix');
        }

        // Salva o HTML pra você ver
        file_put_contents(storage_path('app/netflix.html'), $response->body());
        dump('HTML salvo em: ' . storage_path('app/netflix.html'));

        $crawler = new Crawler($response->body());

        // Vamos procurar qualquer coisa relacionada a preço
        dump('Procurando por texto com £...');
        $crawler->filter('*')->each(function (Crawler $node) {
            $text = $node->text();
            if (str_contains($text, '£') && strlen($text) < 50) {
                dump($text);
            }
        });

        return [];
    }

    private function extractPrice(string $text)
    {
        preg_match('/£?([\d.]+)/', $text, $matches);
        return isset($matches[1]) ? (float)$matches[1] : 0.0;

    }
}
