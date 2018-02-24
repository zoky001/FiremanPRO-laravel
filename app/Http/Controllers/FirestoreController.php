<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirestoreController extends Controller
{
    //
    
    
    
    public function login(){
        
        
         return view('firestore.login'); 
    }
    
      public function home() {
            
       return view('firestore.home'); 
    }
    
        public function newHouse() {
            
       return view('firestore.insert_house'); 
    }
    
          public function newIntervention() {
            
       return view('firestore.intervention'); 
    }
    
         public function currentIntervention($id) {
            
       return view('firestore.currentIntervention',compact('id')); 
    }
    
    
}
