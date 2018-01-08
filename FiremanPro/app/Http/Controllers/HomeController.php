<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*
        $post = new \App\Post();
        $post->id = 42208;
        
     
        
        $house = \App\House::addNewHouse("Varaždinska ulica", "14", "Kolarovec", $post, 46.6161, 16.155, "Ante", "Gotovina", 2, 2, "prvi, drugi, treći", 1, "1995, 1998, 1999", 3, "1959, 1959", 0, 0, FALSE, "Nadzemni priključak", FALSE, "Plin", 0, "lim", 30, FALSE, "nema ", FALSE, "nema", FALSE, "0995982910", "095982910");
       
        $house ->addGndPlanPhotoFullParametar("GND PRve kuće", "www.url.com");
        $house ->addProfilPhotoFullParametar("profil picc", "www.faca.sas");
        */
        
        $posts = \App\Post::all();
        
 
        
     
        
       return view('home',compact('posts'));
    }
}
