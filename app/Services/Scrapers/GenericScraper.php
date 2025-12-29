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

            //try
            $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
                $text = trim($node->text());

                //1st
                if (preg_match('/^([^:]+):\s*' . preg_quote($this->currency) .  '([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    if (!isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                }

                //2nd
                elseif (preg_match('/^([A-Za-z\s]+)\s+' . preg_quote($this->currency) .  '([\d.]+)\s*(?:\/|per)\s*month/i', $text, $matches)) {
                    try {
                        $parent = $node->ancestors();
                        $planName = null;

                        foreach ($parent as $ancestor) {
                            $ancestorCrawler = new Crawler($ancestor);
                            $titles = $ancestorCrawler->filter('h1, h2, h3, h4, .title, .plan-name, [class*="plan"], [class*="title"]');

                            if ($titles->count() > 0) {
                                $planName = trim($titles->first()->text());
                                break;
                            }
                        }
                    }
                }

            })
        }

    }
}
