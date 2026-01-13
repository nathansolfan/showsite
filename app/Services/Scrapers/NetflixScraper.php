<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class NetflixScraper implements ScraperInterface
{
    private string $url = 'https://help.netflix.com/en/node/24926/gb';

    public function scrape(): array
    {
        $response = Http::timeout(30)
            ->withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ])
            ->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Netflix');
        }

        $crawler = new Crawler($response->body());
        $plans = [];
        $foundPlans = [];

        try {
            // Anything
            $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
                $text = trim($node->text());

                // Standard
                if (preg_match('/^([^:]+):\s*£([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    // DUPES
                    if (!isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // per month without :
                elseif (preg_match('/^([A-Za-z\s]+)\s+£([\d.]+)\s*(?:per|\/)\s*month/i', $text, $matches)) {

                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    if (!isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // name
                elseif (preg_match('/£([\d.]+)\s*(?:\/|per)\s*month/i', $text, $matches)) {
                    try {
                        $parent = $node->ancestors();
                        $planName = null;

                        foreach ($parent as $ancestor) {
                            $ancestorCrawler = new Crawler($ancestor);
                            $titles = $ancestorCrawler->filter('h1, h2, h3, h4, .title, .plan-name');

                            if ($titles->count() > 0) {
                                $planName = trim($titles->first()->text());
                                break;
                            }
                        }
                        if ($planName && strlen($planName) < 50 && !isset($foundPlans[$planName])) {
                            $foundPlans[$planName] = (float)$matches[1];
                        }
                    } catch (\Exception $exception) {
                        //ignore
                    }
                }
            });

            // Convert
            foreach ($foundPlans as $name => $price) {
                $plans[] = [
                    'name' => $name,
                    'price' => $price,
                    'features' => [],
                ];
            }

        } catch (\Exception $exception) {
            throw new \Exception('Failed to parse Netflix: ' . $exception->getMessage());
        }

        return $plans;
    }

    private function extractPrice(string $text): float
    {
        preg_match('/£?([\d.]+)/', $text, $matches);
        return isset($matches[1]) ? (float)$matches[1] : 0.0;
    }
}
