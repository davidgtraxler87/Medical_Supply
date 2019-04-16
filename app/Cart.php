<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'user_cart';

    protected $fillable = [
        'user_id',
        'order_equipment_id',
        'quantity',
    ];
}
