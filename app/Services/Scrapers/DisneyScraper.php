<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;

class DisneyScraper implements ScraperInterface
{
    private string $url = 'https://www.disneyplus.com/en-gb/welcome/plans';

    public function scrape()
    {
        try {
            //1st try
            $plans = $this->scrapeReal();

            if (!empty($plans) && $this->plansLookValid($plans)) {
                return $plans;
            }
        } catch (\Exception $exception) {
            \Log::warning('Disney failed: ' . $exception->getMessage());
        }

    }

}
