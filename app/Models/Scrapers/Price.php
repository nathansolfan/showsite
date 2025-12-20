<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'plan_id',
        'amount',
        'currency',
        'valid_from',
        'valid_until'
    ];

    protected $casts = [
        'valid_from' => 'datetime',
        'valid_until' => 'datetime'
    ];

    public function plan()
    {
        return $this->belongsTo(Price::class);
    }
}
