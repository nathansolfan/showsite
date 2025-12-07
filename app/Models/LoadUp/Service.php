<?php

namespace App\Models\LoadUp;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'base_price',
        'is_active'
    ];
}
