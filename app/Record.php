<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable=[
        'from_opening_tank',
        'from_closign_tank',
        'from_tank_id',
        'to_opening_tank',
        'to_closign_tank',
        'to_tank_id',
    ];  
}
