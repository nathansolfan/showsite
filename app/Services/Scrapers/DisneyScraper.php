<?php

namespace App\Services\Scrapers;

use App\Contracts\ScraperInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class DisneyScraper implements ScraperInterface
{
    private string $url = 'https://www.disneyplus.com/en-gb/welcome/plans';

    public function scrape(): array
    {
        try {
            $plans = $this->scrapeReal();

            if (!empty($plans) && $this->plansLookValid($plans)) {
                return $plans;
            }
        } catch (\Exception $e) {
            \Log::warning('Disney+ scraping failed: ' . $e->getMessage());
        }

        return $this->getFallbackPlans();
    }

    private function scrapeReal(): array
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
        $foundPlans = [];

        $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
            $text = trim($node->text());

            if (preg_match('/^([^:]+):\s*£([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                $planName = trim($matches[1]);
                $price = (float)$matches[2];

                if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                    $foundPlans[$planName] = $price;
                }
            } elseif (preg_match('/^([A-Za-z\s]+)\s+£([\d.]+)\s*(?:per|\/)\s*month/i', $text, $matches)) {
                $planName = trim($matches[1]);
                $price = (float)$matches[2];

                if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                    $foundPlans[$planName] = $price;
                }
            } elseif (preg_match('/£([\d.]+)\s*(?:\/|per)\s*month/i', $text, $matches)) {
                try {
                    $parent = $node->ancestors();
                    $planName = null;

                    foreach ($parent as $ancestor) {
                        $ancestorCrawler = new Crawler($ancestor);
                        $titles = $ancestorCrawler->filter('h1, h2, h3, h4, .title, .plan-name, [class*="plan"]');

                        if ($titles->count() > 0) {
                            $planName = trim($titles->first()->text());
                            break;
                        }
                    }

                    if ($planName && strlen($planName) < 50 && !$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = (float)$matches[1];
                    }
                } catch (\Exception $e) {
                    // Ignora
                }
            }
        });

        $plans = [];
        foreach ($foundPlans as $name => $price) {
            $plans[] = [
                'name' => $name,
                'price' => $price,
                'features' => [],
            ];
        }

        return $plans;
    }

    private function isSuspiciousText(string $text): bool
    {
        if (strlen($text) > 40 || strlen($text) < 3) return true;
        if (str_word_count($text) > 5) return true;
        if (preg_match('/[?!;]/', $text)) return true;

        $lower = strtolower($text);

        $bad = ['faq', 'frequently', 'question', 'click', 'learn', 'sign', 'login', 'subscribe', 'get started', 'choose', 'top'];
        foreach ($bad as $word) {
            if (stripos($lower, $word) !== false) return true;
        }

        $good = ['plan', 'standard', 'premium', 'basic', 'family', 'duo', 'annual', 'monthly', 'student', 'ad'];
        foreach ($good as $word) {
            if (stripos($lower, $word) !== false) return false;
        }

        return !(str_word_count($text) <= 2 && strlen($text) <= 20);
    }

    private function plansLookValid(array $plans): bool
    {
        if (empty($plans) || count($plans) > 6) {
            return false;
        }

        foreach ($plans as $plan) {
            if ($this->isSuspiciousText($plan['name'])) {
                return false;
            }
        }

        return true;
    }

    private function getFallbackPlans(): array
    {
        return [
            [
                'name' => 'Standard with ads',
                'price' => 4.99,
                'features' => [],
            ],
            [
                'name' => 'Standard',
                'price' => 7.99,
                'features' => [],
            ],
            [
                'name' => 'Premium',
                'price' => 10.99,
                'features' => [],
            ],
        ];
    }
}
