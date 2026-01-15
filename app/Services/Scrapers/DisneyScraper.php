<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use function Symfony\Component\Translation\t;

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
        //variable
        $foundPlans = [];

        $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
            $text = trim($node->text());

            //1st
            if (preg_match('/^([^:]+):\s*£([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                $planName = trim($matches[1]);
                $price = (float)$matches[2];

                if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                    $foundPlans[$planName] = $price;
                }


            }
            elseif (preg_match('/£([\d.]+)\s*(?:\/|per)\s*month/i', $text, $matches)) {
                try {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }


                }
            }

        })
    }

}
