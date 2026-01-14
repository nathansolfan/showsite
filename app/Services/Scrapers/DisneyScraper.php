<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;

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

}
