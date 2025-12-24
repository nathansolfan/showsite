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

        try {
            $category = Category::firstOrCreate(
                ['slug' => 'streaming'],
                ['name' => 'Streaming']
            );

            $scraper = new NetflixScraper();
            $data = $scraper->scrape();

            $this->info('✅ Netflix scraped successfully!');

            // Salva no banco (código que já temos)
            collect($data)->each(function ($plan) use ($category) {
                Subscription::updateOrCreate(
                    ['slug' => Str::slug('netflix-' . $plan['name'])],
                    [
                        'name' => 'Netflix - ' . $plan['name'],
                        'price' => $plan['price'],
                        'category_id' => $category->id,
                        'website_url' => 'https://netflix.com',
                    ]
                );
            });

            // 🆕 SALVA EM ARQUIVO JSON
            $filename = 'subscriptions-' . now()->format('Y-m-d_H-i-s') . '.json';
            $filepath = storage_path('app/scraped/' . $filename);

            // Cria pasta se não existir
            if (!file_exists(storage_path('app/scraped'))) {
                mkdir(storage_path('app/scraped'), 0755, true);
            }

            file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT));

            $this->info('💾 Saved to: ' . $filepath);
            $this->info('📊 Total plans: ' . count($data));

        } catch (\Exception $exception) {
            $this->error('❌ Error: ' . $exception->getMessage());
            return 1;
        }

        return 0;
    }
}
