<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
       public function house()
    {
        return $this->belongsToMany('App\House','photo_phototype_houses','photo_id','house_id');
    }
    
        public function photoType()
    {
        return $this->belongsToMany('App\PhotoType','photo_phototype_houses','photo_id','photo_type_id');
    }
    
      public static function addPhoto($imageName, $url) {

       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
        $photo = new Photo;
        $photo->ImageName = $imageName;
        $photo->FileName = $url;
        $photo->url = asset('/house_images/profil'.$imageName);
       $photo->save();
       
       return $photo;
       
       
    }
}
