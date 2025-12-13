<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'name',
        'subtitle',
        'image',
        'description',
        'content',
        'is_active',
        'sort_order',
        'category_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'category_id' => 'integer',
    ];

    /**
     * 取得廣告所屬的分類
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
