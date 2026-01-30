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

                        // ✅ VALIDAÇÃO ADICIONADA
                        if ($planName && strlen($planName) < 50 && !$this->isSuspiciousText($planName) && !isset($foundPlans[$planName])) {
                            $foundPlans[$planName] = (float)$matches[1];
                        }
                    } catch (\Exception $e) {
                        // Ignora
                    }
                }
            });

            // Converte para formato esperado
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
     * 🎯 Validação: Filtra textos suspeitos
     */
    private function isSuspiciousText(string $text): bool
    {
        // Validações rápidas
        if (strlen($text) > 40 || strlen($text) < 3) return true;
        if (str_word_count($text) > 5) return true;
        if (preg_match('/[?!;]/', $text)) return true;

        $lower = strtolower($text);

        // ❌ Blacklist: Palavras que NÃO são nomes de planos
        $bad = [
            'pricing',
            'plans',
            'british pound',
            'pound',
            'currency',
            'price',
            'click',
            'learn',
            'more',
            'faq',
            'question',
            'how much',
            'cost',
            'subscription',
            'choose',
            'select',
        ];

        foreach ($bad as $word) {
            if (stripos($lower, $word) !== false) return true;
        }

        // ✅ Whitelist: Palavras que SÃO nomes de planos
        $good = [
            'standard',
            'premium',
            'basic',
            'advert',
            'ad',
            'family',
            'individual',
        ];

        foreach ($good as $word) {
            if (stripos($lower, $word) !== false) return false;
        }

        // Se não passou em nenhuma validação, aceita palavras simples e curtas
        return !(str_word_count($text) <= 2 && strlen($text) <= 20);
    }
}
