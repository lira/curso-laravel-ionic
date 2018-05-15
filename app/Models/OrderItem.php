<?php

namespace Lira\Course\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * @package Lira\Course\Delivery\Models
 */
class OrderItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'quantity',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
