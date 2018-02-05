<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirestoreController extends Controller
{
    //
    
    
    
    public function login(){
        
        
         return view('fireStore.login'); 
    }
    
      public function home() {
            
       return view('firestore.home'); 
    }
    
        public function newHouse() {
            
       return view('firestore.insert_house'); 
    }
    
    
}
