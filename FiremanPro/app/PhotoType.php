<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoType extends Model
{
    //
        public function house()
    {
        return $this->belongsToMany('App\House','photo_phototype_house','photo_type_id','house_id');
    }
    
        public function photos()
    {
        return $this->belongsToMany('App\Photo','photo_phototype_house','photo_type_id','photo_id');
    }
    
    
    public static function getProfilType() {
        
           $type= PhotoType::
                 select('photo_types.*')
                ->where('photo_types.type', '=', 'PROFIL')
            
                ->get();
        return($type[0]);
    }
    
      public static function getGndPlanType() {
        
           $type= PhotoType::
                 select('photo_types.*')
                ->where('photo_types.type', '=', 'GND_PLAN')
            
                ->get();
           
        return($type[0]);
    }
    
    
   
}
