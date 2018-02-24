<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    
       public function post()
    {
        return $this->belongsTo('App\Post');
    }
    
    
        public function house()
{
        
    return $this->hasOne('App\House', 'address_id');
    
}

        public function hydrant()
{
        
    return $this->hasOne('App\Hydrant', 'address_id');
    
}


   public static function addAddress($streetName,$streetNumber,$place, Post $post, $longitude, $latitude) {
 
       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
       
        $address = new Address();
        $address -> streetName = $streetName;
        $address -> streetNumber=$streetNumber;
        $address -> place = $place;
        $address -> post_id = $post->id;
        $address -> longitude = $longitude;
        $address -> latitude = $latitude;
        
        
       $address->save();
       return $address;
     
    }


}
