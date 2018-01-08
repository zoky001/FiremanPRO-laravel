<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    
      public function photos()
    {
        return $this->belongsToMany('App\Photo','photo_phototype_houses','house_id','photo_id');
    }
    
        public function photoType()
    {
        return $this->belongsToMany('App\PhotoType','photo_phototype_houses','house_id','photo_type_id');
    }
    
    public function address()
{
        
    return $this->belongsTo('App\Address', 'address_id');
    
}

    public static function addNewHouse($streetName,$streetNumber,$place,Post $post,$longitude,$latitude, $name_owner,$surname_owner, $number_of_tenants, $number_of_floors, $list_of_floors, $number_of_children, $year_children, $number_of_adults, $years_adults, $number_of_powerless_and_elders, $years_powerless_elders, $disability_person, $power_supply, $gas_connection, $type_of_heating, $number_of_gas_bottle, $type_of_roof, $hydrant_distance, $high_risk_object, $HRO_type_of_roof, $HRO_power_supply, $HRO_content,$HRO_animals, $telNumber, $mobNumber) {

       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
       $address = Address::addAddress($streetName, $streetNumber, $place, $post, $longitude, $latitude);
      
       $house = new House();
   $house ->address_id = $address->id;
        $house -> name_owner = $name_owner;
        $house -> surname_owner = $surname_owner;
        $house -> number_of_tenants = $number_of_tenants;
        $house -> number_of_floors = $number_of_floors;
        $house -> list_of_floors = $list_of_floors;
        $house -> number_of_children = $number_of_children;
        $house -> year_children = $year_children;
        $house -> number_of_adults = $number_of_adults;
        $house -> years_adults = $years_adults;
        $house -> number_of_powerless_and_elders = $number_of_powerless_and_elders;
        $house -> years_powerless_elders = $years_powerless_elders;
        $house -> disability_person = $disability_person;
        $house -> power_supply = $power_supply;
        $house -> gas_connection = $gas_connection;
        $house -> type_of_heating = $type_of_heating;
        $house -> number_of_gas_bottle = $number_of_gas_bottle;
        $house -> type_of_roof = $type_of_roof;
        $house -> hydrant_distance = $hydrant_distance;
        $house -> high_risk_object = $high_risk_object;
        $house -> HRO_type_of_roof = $HRO_type_of_roof;
        $house -> HRO_power_supply= $HRO_power_supply;
        $house -> HRO_content = $HRO_content;
        $house -> HRO_animals = $HRO_animals;
        $house -> telNumber = $telNumber;
        $house -> mobNumber = $mobNumber;
        $house -> save();
        
        
        return $house;
     
    }
    
    public function addProfilPhoto($photoName) {
        
        $photo = Photo::addPhoto($photoName, asset('/house_images/profil'.$photoName));
        
        PhotoPhototypeHouse::addProfilPhoto($photo, $this);
       
    }
    
     public function addProfilPhotoFullParametar($imageName, $url) {
        
         $photo = Photo::addPhoto($imageName, asset('/house_images/profil'.$imageName));
         
        PhotoPhototypeHouse::addProfilPhoto($photo, $this);
       
    }
    
      public function addGndPlanPhoto(Photo $photo) {
        
        PhotoPhototypeHouse::addGndPlanPhoto($photo, $this);
       
    }
    
      public function addGndPlanPhotoFullParametar($imageName) {
          
        $photo = Photo::addPhoto($imageName,asset('/house_images/gnd_plan'.$imageName));
        
        
        PhotoPhototypeHouse::addGndPlanPhoto($photo, $this);
       
    }
    
    
    public function getAllGroundPlans(){
        
        $photos = PhotoPhototypeHouse::
                
                  leftJoin('photos', 'photo_phototype_houses.photo_id', '=', 'photos.id')
                -> leftJoin('photo_types', 'photo_phototype_houses.photo_type_id', '=', 'photo_types.id')
            ->select('photos.*')
            ->where('photo_phototype_houses.photo_type_id','=','101')
                 ->where('photo_phototype_houses.house_id','=', $this->id)
        
                    
            ->get();
        
    foreach ($photos as $p) {
        $p -> url = asset("house_images/gnd_plan".$p->FileName);
        
    }
        
        return $photos;
               
        
    }
    
      public function getProfilPic(){
        
        $photos = PhotoPhototypeHouse::
                
                  leftJoin('photos', 'photo_phototype_houses.photo_id', '=', 'photos.id')
                -> leftJoin('photo_types', 'photo_phototype_houses.photo_type_id', '=', 'photo_types.id')
            ->select('photos.*')
            ->where('photo_phototype_houses.photo_type_id','=','100')
                 ->where('photo_phototype_houses.house_id','=', $this->id)
        
                    
            ->first();
        
        $photos -> url = asset("house_images/profil".$photos->FileName);
    //    $photos -> url ="https://www.webgradnja.hr/images/katalog/popup/domprojekt-niskoenergetske-montazne-kuce-doris-prizemnica-s-potkrovljem-128-40-m-6584-1.jpg";
        return $photos;
               
        
    }
    
    
    
    

}
