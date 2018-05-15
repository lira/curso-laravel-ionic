<?php

namespace Lira\Course\Delivery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package Lira\Course\Delivery\Models
 */
class Client extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
