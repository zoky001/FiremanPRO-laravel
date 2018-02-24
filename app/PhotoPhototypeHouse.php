<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoPhototypeHouse extends Model
{
    //
    
    
         public static function addProfilPhoto(Photo $photos, House $house) {
//
      //  $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
        $photo = new PhotoPhototypeHouse();
        $photo->house_id = $house->id;
        $photo->photo_id = $photos->id;
        $photo->photo_type_id = PhotoType::getProfilType()->id;
       $photo->save();
     
    }
    
        public static function addGndPlanPhoto($photos, House $house) {

       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
      // \Symfony\Component\VarDumper\VarDumper::dump($photo);
      // echo $photo -> id;
       $photo = new PhotoPhototypeHouse();
        $photo -> house_id = $house -> id;
        $photo -> photo_id = $photos -> id;
        $phototip = PhotoType::getGndPlanType();
        $photo -> photo_type_id =  $phototip -> id;
       $photo -> save();
     
    }
}
