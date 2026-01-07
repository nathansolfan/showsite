<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

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
            ->withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ])
            ->get($this->url);

        if (!$response->successful()) {
            throw new \Exception('Failed to fetch Spotify');
        }

        $crawler = new Crawler($response->body());
        $foundPlans = [];

        $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
            $text = trim($node->text());

            if (preg_match('/^(Individual|Duo|Family|Student)\s+£([\d.]+)/i', $text, $matches)) {
                $planName = trim($matches[1]);
                $price = (float)$matches[2];

                if (!isset($foundPlans[$planName])) {
                    $foundPlans[$planName] = $price;
                }
            } elseif (preg_match('/£([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                try {
                    $parent = $node->ancestors();
                    foreach ($parent as $ancestor) {
                        $ancesterCrawler = new Crawler($ancestor);
                        $titles = $ancesterCrawler->filter('h1, h2, h3, h4');

                        if ($titles->count() > 0) {
                            $planName = trim($titles->first()->text());
                            if (strlen($planName) < 30 && !isset($foundPlans[$planName])) {
                                $foundPlans[$planName] = (float)$matches[1];
                                break;
                            }
                        }
                    }
                } catch (\Exception $exception) {

                }
            }
        });

        $plans = [];
        foreach ($foundPlans as $name => $price) {
            $plans[] = [
                'name' => $name,
                'price' => $price,
                'features' => []
            ];
        }
        return $plans;
    }

    private function getFallbackPlans(): array
    {

    }
}
