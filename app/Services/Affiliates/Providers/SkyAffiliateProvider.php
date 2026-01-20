<?php

namespace App\Services\Affiliates\Providers;

use App\Contracts\AffiliateProviderInterface;

class SkyAffiliateProvider implements AffiliateProviderInterface
{
    public function getOffers(): array
    {
        return [
            [
                'subscription_slug' => 'netflix-standard',
                'provider' => 'sky',
                'price' => 10.99,
                'affiliate_url' => 'https://www.awin1.com/cread.php?...',
                'network' => 'awin',
                'country' => 'UK'
            ]
        ];
    }

}
