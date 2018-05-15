<?php

namespace Lira\Course\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package Lira\Course\Delivery\Models
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
