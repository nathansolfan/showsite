<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static withCount(string $string)
 */
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
