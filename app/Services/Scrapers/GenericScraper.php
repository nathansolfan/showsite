<?php

namespace App\Services\Scrapers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class GenericScraper
{
    private string $url;
    private string $currency;
    private array $fallbackPlans;

    public function __construct(string $url, string $currency = '£', array $fallbackPlans = [])
    {
        $this->url = $url;
        $this->currency = $currency;
        $this->fallbackPlans = $fallbackPlans;
    }

    public function scrape(): array
    {
        try {
            $response = Http::timeout(30)
                ->withoutVerifying()
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
                ])
                ->get($this->url);


            if (!$response->successful()) {
                return $this->useFallback('Http request failed');
            }

            $crawler = new Crawler($response->body());
            $foundPlans = [];
        }

    }
}
