<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllianceAd extends Model
{
    protected $fillable = [
        'image',
        'link',
        'alt',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
