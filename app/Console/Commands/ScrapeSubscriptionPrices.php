<?php

namespace App\Console\Commands;

use App\Models\Scrapers\Category;
use App\Models\Scrapers\Subscription;
use App\Services\Scrapers\NetflixScraper;
use App\Services\Scrapers\SpotifyScraper;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ScrapeSubscriptionPrices extends Command
{
    protected $signature = 'scrape:prices {service?}';
    protected $description = 'Scrape subscription prices and save to database';

    // 🆕 Configuração centralizada
    private array $services = [
        'netflix' => [
            'scraper' => NetflixScraper::class,
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
    ];

    public function handle()
    {
        $serviceName = $this->argument('service');

        // Se não passou argumento, scrape TODOS
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
            $scraper = new $scraperClass();
            $data = $scraper->scrape();

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
