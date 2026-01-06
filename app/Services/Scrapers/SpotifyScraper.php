<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;

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
        }


    }
}
