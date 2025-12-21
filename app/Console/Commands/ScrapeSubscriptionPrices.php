<?php

namespace App\Console\Commands;

use App\Models\Scrapers\Category;
use App\Models\Scrapers\Subscription;
use App\Services\Scrapers\NetflixScraper;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ScrapeSubscriptionPrices extends Command
{
    protected $signature = 'scrape:prices {service?}';
    protected $description = 'Scrape subscription prices and save to database';

    public function handle()
    {
        $this->info('🔍 Price scraping started...');

        $service = $this->argument('service');

        try {
            // 1. Busca ou cria a categoria Streaming
            $category = Category::firstOrCreate(
                ['slug' => 'streaming'],
                ['name' => 'Streaming']
            );

            // 2. Faz o scraping
            $scraper = new NetflixScraper();
            $data = $scraper->scrape();

            $this->info('✅ Netflix scraped successfully!');

            // 3. Mostra a tabela no terminal
            $this->table(
                ['Plan', 'Price', 'Status'],
                collect($data)->map(function ($plan) use ($category) {
                    // 4. Salva no banco de dados
                    $subscription = Subscription::updateOrCreate(
                        ['slug' => Str::slug('netflix-' . $plan['name'])],
                        [
                            'name' => 'Netflix - ' . $plan['name'],
                            'price' => $plan['price'],
                            'category_id' => $category->id,
                            'website_url' => 'https://netflix.com',
                            'logo' => 'netflix.png', // Você pode adicionar depois
                        ]
                    );

                    return [
                        $plan['name'],
                        '£' . number_format($plan['price'], 2),
                        $subscription->wasRecentlyCreated ? '🆕 Created' : '♻️  Updated'
                    ];
                })
            );

            $this->info('💾 All plans saved to database!');
            $this->info('📊 Total plans: ' . count($data));

        } catch (\Exception $exception) {
            $this->error('❌ Error: ' . $exception->getMessage());
            return 1; // Retorna código de erro
        }

        return 0; // Retorna sucesso
    }
}
