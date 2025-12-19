<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class NetflixScraper implements ScraperInterface
{
    private string $url = 'https://www.netflix.com/gb/';

    public function scrape(): array
    {
        //request
        $response = Http::timeout(30)->withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ])->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Netflix');
        }

        //crawler
        $crawler = new Crawler($response->body());

        //data
        $plans = [];

        try {
            $crawler->filter('.plan-card')->each(function (Crawler $node) use (&$plans) {
                $plans[] = [
                    'name' => $node->filter('.plan-name')->text(),
                    'price' => $this->extractPrice($node->filter('.price')->text()),
                    'features' => $node->filter('.feature-list li')->each(fn($n) => $n->text()),
                ];
            });

        } catch (\Exception $exception) {
            throw new \Exception('failed to parse Netflix: ' . $exception->getMessage());

        }
        return $plans;
    }

    private function extractPrice(string $text)
    {
        preg_match('/£?([\d.]+)/', $text, $matches);
        return isset($matches[1]) ? (float)$matches[1] : 0.0;

    }
}
