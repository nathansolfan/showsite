<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // $project = Project::create($validatedData)
    // fields can be mass-assigned
    protected $fillable = [
        'name',
        'description',
        'image',
        'url',
        'github_url',
    ];
}
