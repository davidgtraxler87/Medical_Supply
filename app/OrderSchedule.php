<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderSchedule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_schedule';

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'order_schedule_id';
}
