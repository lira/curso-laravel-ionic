<?php

namespace Lira\Course\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package Lira\Course\Delivery\Models
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
