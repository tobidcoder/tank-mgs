<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'user_id'
      ];

//Get tank that belong to a particular location      
public function tanks(){
    return $this->hasMany(Tank::class);
}  

}
