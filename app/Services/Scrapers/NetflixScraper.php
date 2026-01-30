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
        $foundPlans = [];

        try {
            $crawler->filter('*')->each(function (Crawler $node) use (&$foundPlans) {
                $text = trim($node->text());

                // Padrão 1: "Nome: £X.XX / month"
                if (preg_match('/^([^:]+):\s*£([\d.]+)\s*\/\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    // ✅ VALIDAÇÃO ADICIONADA
                    if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // Padrão 2: "Nome £X.XX per month"
                elseif (preg_match('/^([A-Za-z\s]+)\s+£([\d.]+)\s*(?:per|\/)\s*month/i', $text, $matches)) {
                    $planName = trim($matches[1]);
                    $price = (float)$matches[2];

                    // ✅ VALIDAÇÃO ADICIONADA
                    if (!$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                        $foundPlans[$planName] = $price;
                    }
                } // Padrão 3: "£X.XX / month" + busca no pai
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

                        // ✅ VALIDATION
                        if ($planName && strlen($planName) < 50 && !$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                            $foundPlans[$planName] = (float)$matches[1];
                        }
                    } catch (\Exception $e) {
                        // Ignore
                    }
                }
            });

            // Convert to desired format
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
            throw new \Exception('Failed to parse Netflix: ' . $exception->getMessage());
        }
    }

    /**
     * 🎯 VALIDATION: Filter suspicious text
     */
    private function isSuspiciousText(string $text): bool
    {
        // 1. Tamanho: Nomes de planos são curtos
        if (strlen($text) > 30 || strlen($text) < 3) return true;

        // 2. Muitas palavras = provavelmente uma frase, não um plano
        if (str_word_count($text) > 4) return true;

        // 3. Pontuação estranha = não é nome de plano
        if (preg_match('/[?!;(),]/', $text)) return true;

        // 4. Aceita palavras simples e curtas (ex: "Premium", "Standard")
        return !(str_word_count($text) <= 3 && strlen($text) <= 25);
    }
}
