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
}
