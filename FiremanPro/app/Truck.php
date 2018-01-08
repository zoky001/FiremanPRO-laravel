<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    //
       public function Type_of_truck()
{
        
    return $this->belongsTo('App\Type_of_truck', 'Type_of_truck_id');
    
}
   public function Fireman_patrol()
{
        
    return $this->belongsTo('App\Fireman_patrol', 'fireman_patrol_id');
    
}
}
