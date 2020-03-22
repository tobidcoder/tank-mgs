<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    //
    protected $fillable=[
        'tank_name',
        'tank_type_id',
        'volume',
        'location_id',
    ];
}
