<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sort_of_intervention extends Model
{
    //
    
      public function addNewType($name) {

       // $date = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time);
       
       
      
       $house = new Intervention_Type();
       
        $house ->name = $name;
      
        $house -> intervention_id = $this -> id;
        $house -> save();
        
        
        return $house;
     
    }
}
