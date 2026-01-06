<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;

class SpotifyScraper implements ScraperInterface
{
    private string $url = 'https://www.spotify.com/uk/premium/';

    public function scrape(): array
    {
        try {
            $plans = $this->scrapeReal();

            if (!empty($plans)) {
                return $plans;
            }
        } catch (\Exception $exception) {
            \Log::warning('Spotify scraping failed: ' . $exception->getMessage());
        }

        return $this->getFallbackPlans();
    }

    private function scrapereal(): array
    {
        $response = Http::timeout(30)

    }
}
