<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'url',
        'stats',
    ];

    protected $casts = [
        'stats' => 'array',
    ];
}
