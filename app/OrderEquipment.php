<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderEquipment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_equipment';

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'order_equipment_id';
}
