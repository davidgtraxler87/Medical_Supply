<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipment';

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'equipment_id';
}
