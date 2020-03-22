<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable=[
        'opening_tank',
        'closign_tank',
        'tank_id',
    ];  
}
