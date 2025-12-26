<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class SpotifyScraper implements ScraperInterface
{
    private string $url = 'https://www.spotify.com/uk/premium/';

    public function scrape(): array
    {
        $response = Http::timeout(30)
            ->withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ])
            ->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Spotify');
        }

        $crawler = new Crawler($response->body());
        $plans = [];

        $plans[] = [
            'name' => 'Indivual',
            'price' => '11'
        ];

        return $plans;
    }

}
