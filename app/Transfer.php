<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //
    protected $fillable=[
        'opening_volume',
        'closing_volume',
        'tank_id'
    ];  
}
