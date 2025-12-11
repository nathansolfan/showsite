<?php

namespace App\Models\LoadUp;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',

        'pickup_address',
        'pickup_postcode',
        'pickup_date',
        'delivery_address',
        'delivery_postcode',

        'item_description',
        'item_size',
        'move_type',
        'floor_level',

        'status',
        'notes',
        'extra_fields'
    ];

    protected $casts = [
        'pickup_date' => 'date',
        'extra_fields' => 'array'
    ];

    //RELATION
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
