<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
