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
                return $this->useFallback('HTTP request failed');
            }

            $crawler = new Crawler($response->body());
            $foundPlans = [];

            // standard
            $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
                $text = trim($node->text());

                // 1st - £/month
                if (preg_match('/^([^:]+):\s*' . preg_quote($this->currency) . '([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    if (!isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // 2nd - £/month
                elseif (preg_match('/^([A-Za-z\s]+)\s+' . preg_quote($this->currency) . '([\d.]+)\s*(?:per|\/)\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    if (!isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // 3rd - £/month - parent
                elseif (preg_match('/' . preg_quote($this->currency) . '([\d.]+)\s*(?:\/|per)\s*month/i', $text, $matches)) {
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

                        if ($planName && strlen($planName) < 50) {
                            $price = (float)$matches[1];
                            if (!isset($foundPlans[$planName])) {
                                $foundPlans[$planName] = $price;
                            }
                        }
                    } catch (\Exception $e) {
                        // Ignore
                    }
                }
            });

            // FALLBACK
            if (empty($foundPlans)) {
                return $this->useFallback('No plans found with patterns');
            }

            // Convert
            $plans = [];
            foreach ($foundPlans as $name => $price) {
                $plans[] = [
                    'name' => $name,
                    'price' => $price,
                    'features' => [],
                ];
            }

            return $plans;

        } catch (\Exception $exception) {
            return $this->useFallback($exception->getMessage());
        }
    }

    private function useFallBack(string $reason): array
    {
        if (!empty($this->fallbackPlans)) {
            \Log::warning("GenericScraper fallback used for {$this->url}: {$reason}");
            return $this->fallbackPlans;
        }
        throw new \Exception("Failed {$this->url}: {$reason}");

    }
}
