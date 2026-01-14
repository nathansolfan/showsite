<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class DisneyScraper implements ScraperInterface
{
    private string $url = 'https://www.disneyplus.com/en-gb/welcome/plans';

    public function scrape(): array
    {
        try {
            //1st try
            $plans = $this->scrapeReal();

            //try if plans ok
            if (!empty($plans) && $this->plansLookValid($plans)) {
                return $plans;
            }
        } catch (\Exception $exception) {
            \Log::warning('Disney failed: ' . $exception->getMessage());
        }
        //if fail get fallback
        return $this->getFallbackPlans();
    }

    private function scrapeReal()
    {
        $response = Http::timeout(30)
            ->withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ])
            ->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Disney+');
        }

        $crawler = new Crawler($response->body());
        $foundPlans = [];

        $crawler->filter('*')
    }

}
