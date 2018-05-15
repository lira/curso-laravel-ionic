<?php

namespace Lira\Course\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package Lira\Course\Delivery\Models
 */
class Order extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_deliveryman_id',
        'total',
        'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function deliveryman()
    {
        return $this->belongsTo(User::class);
    }

}
