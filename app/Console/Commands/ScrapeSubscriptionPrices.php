<?php

namespace App\Console\Commands;

use App\Services\Scrapers\NetflixScraper;
use Illuminate\Console\Command;

class ScrapeSubscriptionPrices extends Command
{

//    protected $signature = 'app:scrape-subscription-prices'; - original
    protected $signature = 'scrape:prices {service?}';


    protected $description = 'Command description: Scrape';

    public function handle()
    {
        $this->info('Price scraping um dois tres...');

        $service = $this->argument('service');

        try {
            $scraper = new NetflixScraper();
            $data = $scraper->scrape();

            $this->info('Netflix scrapped de boa');
            $this->table(
                ['Plan', 'Price'],
                collect($data)->map(fn($plan) => [
                    $plan['name'],
                    '£' . $plan['price']
                ])
            );
        } catch (\Exception $exception) {
            $this->error('Error: ' . $exception->getMessage());
        }
    }
}
