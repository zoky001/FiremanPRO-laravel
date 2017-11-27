<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    
    
    
    
    
    
     public function addNewHouse() {
/*
        $messages = [
            'date' => 'Datum nije pravilnog oblika',
            'numeric' => 'Polje mora sadržavati samo brojeve.',
            'alpha' => 'Polje smije sadržavati samo slova.',
            'required' => 'Polje mora biti upisano.',
            'min' => 'Polje mora sadržavati minimalno :min znakaova.',
        ];



        $this->validate(request(), [
            'visina' => 'required|numeric',
            'tezina' => 'required|numeric',
            'ime' => 'required',
            'prez' => 'required',
            'oib' => 'required|numeric',
            'datumRodjenja' => 'required|date',
            'spol' => 'required',
            'imeOca' => 'required',
            'drzavljanstvo' => 'required',
            'jmbg' => 'required',
            'mjestoRodjenja' => 'required',
            'brOsobne' => 'required',
            'adresa' => 'required',
            'bracnoStanje' => 'required',
            'sprema' => 'required',
            'imeSkrbnika' => 'required',
            'prezimeSkrbnika' => 'required',
            'adresaSkrbnika' => 'required',
            'srodstvoSkrbnika' => 'required',
            'datumPrijema' => 'required',
            'zdravstvenoStanje' => 'required',
            'kontakt' => 'required',
                ], $messages);
*/



        // $this->validate(request(), ['body'=>'required|min:2']);

       // echo request('postal_code');
        
        
        $post = \App\Post::where('postal_code', '=', request('postal_code'))->firstOrFail();
        
      //  \Symfony\Component\VarDumper\VarDumper::dump($post);
$house = \App\House::addNewHouse(
        request('streetName'), 
        request('streetNumber'), 
        request('place'), 
        $post, 
        request('longitude'), 
        request('latitude'), 
        request('name_owner'), 
        request('surname_owner'), 
        request('number_of_tenants'), 
 request('number_of_floors'), 
 request('list_of_floors'), 
 request('number_of_children'), 
 request('year_children'), 
 request('number_of_adults'), 
 request('years_adults'), 
 request('number_of_powerless_and_elders'), 
 request('years_powerless_elders'), 
 request('disability_person'), 
 request('power_supply'), 
 request('gas_connection'), 
 request('type_of_heating'), 
 request('number_of_gas_bottle'), 
 request('type_of_roof'), 
 request('hydrant_distance'), 
 request('high_risk_object'), 
 request('HRO_type_of_roof'), 
 request('HRO_power_supply'), 
 request('HRO_content'), 
 request('HRO_animals'), 
 request('telNumber'), 
 request('mobNumber')
        );
       
        
        
         
       
         

          session()->flash('message','Uspješno dodan novi korisnik!!');
return back();

  
    }
}
