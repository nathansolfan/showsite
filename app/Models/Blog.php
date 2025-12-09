<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'title',
        'budget',
        'content',
        'technologies',
        'attachments',
    ];

    protected $casts = [
        'attachments' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
