<?php

namespace App\Console\Commands;

use App\Models\Scrapers\Category;
use App\Models\Scrapers\Subscription;
use App\Services\Scrapers\GenericScraper;
use App\Services\Scrapers\SpotifyScraper;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ScrapeSubscriptionPrices extends Command
{
    protected $signature = 'scrape:prices {service?} {--url=} {--category=streaming}';
    protected $description = 'Scrape subscription prices and save to database';

    // 🆕 Configuração centralizada com fallback
    private array $services = [
        'netflix' => [
//            'scraper' => NetflixScraper::class,
            'scraper' => GenericScraper::class,


            'category' => 'streaming',
            'category_name' => 'Streaming',
            'url' => 'https://netflix.com',
        ],
        'spotify' => [
            'scraper' => SpotifyScraper::class,

            'category' => 'musica',
            'category_name' => 'Música',
            'url' => 'https://spotify.com',
        ],
        // Exemplo com GenericScraper + fallback
        'disney' => [
            'scraper' => GenericScraper::class,
            'scraper_url' => 'https://www.disneyplus.com/en-gb/welcome/plans',
            'fallback' => [
                ['name' => 'Monthly', 'price' => 7.99, 'features' => []],
                ['name' => 'Annual', 'price' => 79.90, 'features' => []],
            ],
            'category' => 'streaming',
            'category_name' => 'Streaming',
            'url' => 'https://disneyplus.com',
        ],
    ];

    public function handle()
    {
        $serviceName = $this->argument('service');
        $customUrl = $this->option('url');

        // 🆕 Scrape de URL customizada
        if ($customUrl) {
            $this->scrapeCustomUrl($customUrl);
            return 0;
        }

        // Scrape TODOS os serviços
        if (!$serviceName) {
            $this->info('🔍 Scraping ALL services...');
            foreach (array_keys($this->services) as $service) {
                $this->scrapeService($service);
                $this->newLine();
            }
            return 0;
        }

        // Scrape específico
        if (!isset($this->services[$serviceName])) {
            $this->error("❌ Service '{$serviceName}' not found!");
            $this->info('📋 Available services: ' . implode(', ', array_keys($this->services)));
            return 1;
        }

        $this->scrapeService($serviceName);
        return 0;
    }

    private function scrapeCustomUrl(string $url): void
    {
        $serviceName = parse_url($url, PHP_URL_HOST);
        $categorySlug = $this->option('category');

        $this->info("🔍 Scraping custom URL...");
        $this->info("📍 URL: {$url}");

        try {
            $category = Category::firstOrCreate(
                ['slug' => $categorySlug],
                ['name' => ucfirst($categorySlug)]
            );

            $scraper = new GenericScraper($url);
            $plans = $scraper->scrape();

            if (empty($plans)) {
                $this->warn('⚠️  No plans found!');
                return;
            }

            $this->info("✅ Found " . count($plans) . " plans!");

            // Mostra tabela
            $this->table(
                ['Plan', 'Price'],
                collect($plans)->map(fn($p) => [$p['name'], '£' . number_format($p['price'], 2)])
            );

            // Pergunta se quer salvar
            if ($this->confirm('💾 Save to database?', true)) {
                foreach ($plans as $plan) {
                    Subscription::updateOrCreate(
                        ['slug' => Str::slug("{$serviceName}-{$plan['name']}")],
                        [
                            'name' => ucfirst($serviceName) . ' - ' . $plan['name'],
                            'price' => $plan['price'],
                            'category_id' => $category->id,
                            'website_url' => $url,
                        ]
                    );
                }
                $this->info('✅ Saved to database!');
            }

        } catch (\Exception $e) {
            $this->error('❌ Error: ' . $e->getMessage());
        }
    }

    // 🆕 Método para scrape de URL customizada

    private function scrapeService(string $serviceName): void
    {
        $config = $this->services[$serviceName];
        $this->info("🔍 Scraping {$serviceName}...");

        try {
            // 1. Busca ou cria categoria
            $category = Category::firstOrCreate(
                ['slug' => $config['category']],
                ['name' => $config['category_name']]
            );

            // 2. Instancia scraper dinamicamente
            $scraperClass = $config['scraper'];

            // Se for GenericScraper, passa URL e fallback
            if ($scraperClass === GenericScraper::class) {
                $scraper = new $scraperClass(
                    $config['scraper_url'] ?? $config['url'],
                    '£',
                    $config['fallback'] ?? []
                );
            } else {
                $scraper = new $scraperClass();
            }

            $data = $scraper->scrape();

            if (empty($data)) {
                $this->warn("⚠️  {$serviceName}: No plans found!");
                return;
            }

            $this->info("✅ {$serviceName} scraped successfully!");

            // 3. Salva no banco
            foreach ($data as $plan) {
                Subscription::updateOrCreate(
                    ['slug' => Str::slug("{$serviceName}-{$plan['name']}")],
                    [
                        'name' => ucfirst($serviceName) . ' - ' . $plan['name'],
                        'price' => $plan['price'],
                        'category_id' => $category->id,
                        'website_url' => $config['url'],
                    ]
                );
            }

            // 4. Salva JSON
            $filename = "{$serviceName}-" . now()->format('Y-m-d_H-i-s') . '.json';
            $filepath = storage_path('app/scraped/' . $filename);

            if (!file_exists(storage_path('app/scraped'))) {
                mkdir(storage_path('app/scraped'), 0755, true);
            }

            file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT));

            $this->info("💾 Saved to: {$filepath}");
            $this->info("📊 Total plans: " . count($data));

        } catch (\Exception $exception) {
            $this->error("❌ {$serviceName} failed: " . $exception->getMessage());
        }
    }
}
