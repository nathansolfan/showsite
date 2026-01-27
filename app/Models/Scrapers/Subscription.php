<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'website_url',
        'logo',
        'category_id',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
