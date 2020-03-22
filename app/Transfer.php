<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //
    protected $fillable=[
        'volume',
        'from_tank',
        'to_tank'
    ];  
}
