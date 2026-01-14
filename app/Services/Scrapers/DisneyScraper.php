<?php

namespace App\Services\Scrapers;

class DisneyScraper
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
        }

    }

}
