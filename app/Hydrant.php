<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hydrant extends Model
{
    //
        public function address()
{
        
    return $this->belongsTo('App\Address', 'address_id');
    
}
 
  public static function addNewHydrant($type_of_hydrant,$description,$streetName,$streetNumber,$place,Post $post,$longitude,$latitude) {

       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
       $address = Address::addAddress($streetName, $streetNumber, $place, $post, $longitude, $latitude);
      
       $hydrant = new Hydrant();
   $hydrant ->address_id = $address->id;
     
   $hydrant -> type_of_hydrant = $type_of_hydrant;
   $hydrant -> description = $description;
        $hydrant -> save();
        
        
        return $hydrant;
     
    }


}
