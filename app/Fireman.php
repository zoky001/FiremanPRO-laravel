<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fireman extends Model
{
    //
       public function Fireman_patrol()
{
        
    return $this->belongsTo('App\Fireman_patrol', 'fireman_patrol_id');
    
}
}
