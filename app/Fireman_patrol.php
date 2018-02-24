<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fireman_patrol extends Model
{
    //
    
           public function Cost()
{
        
    
      return $this->hasOne('App\Cost');
      
}

     public function trucks()
    {
        return $this->belongsToMany('App\Truck');//,'photo_phototype_houses','house_id','photo_type_id');
    }
    
    
      public function fireman()
    {
        return $this->belongsToMany('App\Fireman');//,'photo_phototype_houses','house_id','photo_type_id');
    }
    
     public function getAllTrucks(){
        
        $photos = Truck::
           
            select('trucks.*')
            ->where('trucks.fireman_patrols_id','=', $this->id)
          
                    
            ->get();
        

        
        return $photos;
               
        
    }
     public function getAllFiremans(){
        
        $photos = Fireman::
           
            select('firemen.*')
            ->where('firemen.fireman_patrols_id','=', $this->id)
          
                    
            ->get();
        

        
        return $photos;
               
        
    }


}
