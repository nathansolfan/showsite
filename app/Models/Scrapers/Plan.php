<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'subscription_id',
        'name',
        'billing_period',
        'features',
    ];

    protected $casts = [
        'features' => 'array'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function currentPrice()
    {
        return $this->hasOne(Price::class)
            ->where('valid_from', '<=', now())
            ->where(function ($q) {
                $q->whereNull('valid_until')
                    ->orWhere('valid_from', '>=', now());
            })
            ->latest('valid_from');

    }
}
