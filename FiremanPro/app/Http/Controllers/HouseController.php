<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManagerStatic;

class HouseController extends Controller {

    //







    public function addNewHouse(Request $request) {
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



        $image = $request->user_photo;
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time() . "_" . $this->RandomString(10) . '.' . $request->user_photo->getClientOriginalExtension();

        /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
         */

        $path = public_path('house_images/profil' . $photoName);

        // $request->user_photo->move(public_path('avatars'), $photoName);
        //Image::configure(array('driver' => 'imagick'));
        ImageManagerStatic::make($image->getRealPath())->resize(200, 200)->save($path);



        session()->flash('message', 'Uspješno promjenjena slika profila!!');


        $post = \App\Post::where('id', '=', request('postal_code'))->firstOrFail();

        //  \Symfony\Component\VarDumper\VarDumper::dump($post);
        $house = \App\House::addNewHouse(
                        request('streetName'), request('streetNumber'), request('place'), $post, request('longitude'), request('latitude'), request('name_owner'), request('surname_owner'), request('number_of_tenants'), request('number_of_floors'), request('list_of_floors'), request('number_of_children'), request('year_children'), request('number_of_adults'), request('years_adults'), request('number_of_powerless_and_elders'), request('years_powerless_elders'), request('disability_person'), request('power_supply'), request('gas_connection'), request('type_of_heating'), request('number_of_gas_bottle'), request('type_of_roof'), request('hydrant_distance'), request('high_risk_object'), request('HRO_type_of_roof'), request('HRO_power_supply'), request('HRO_content'), request('HRO_animals'), request('telNumber'), request('mobNumber')
        );


        $house->addProfilPhoto($photoName);


        //add gnd images
        foreach ($request->gnd_photo as $value) {
            // echo 
            $photoName = time() . "_" . $this->RandomString(10) . '.' . $value->getClientOriginalExtension();

            $path = public_path('house_images/gnd_plan' . $photoName);

            // $request->user_photo->move(public_path('avatars'), $photoName);
            //Image::configure(array('driver' => 'imagick'));
            ImageManagerStatic::make($value->getRealPath())->resize(800, 600)->save($path);

            $house->addGndPlanPhotoFullParametar($photoName);
        }




        session()->flash('message', 'Uspješno dodan novi korisnik!!');
        return back();
    }

    public function showAllHouses() {


        $posts = \App\Post::all();
        $houses = \App\House::all();
        return view('allHouses', compact('houses'));
    }

    private function housesWithAddress() {
        $houses = \App\House::
                leftJoin('addresses', 'addresses.id', '=', 'houses.address_id')
                ->select('houses.*', 'houses.id as house_ID', 'addresses.*')
                ->get();


        // $houses = $houses->toArray();

        $kuca = new \App\House();
        $housesRET = array();

        foreach ($houses as $h) {

            $h = $h->toArray();

            //    \Symfony\Component\VarDumper\VarDumper::dump($h);
            $kuca = \App\House::find($h['house_ID']);

            $sli['slike_planova'] = $kuca->getAllGroundPlans()->toArray();
            $profil['profilPicture'] = $kuca->getProfilPic();
            $result = array_merge($h, $sli);

            $result = array_merge($result, $profil);
            array_push($housesRET, $result);


            // \Symfony\Component\VarDumper\VarDumper::dump($result);
        }



        return $housesRET;
    }

    private function patrolsWithAll() {
        $houses = \App\House::
                leftJoin('addresses', 'addresses.id', '=', 'houses.address_id')
                ->select('houses.*', 'houses.id as house_ID', 'addresses.*')
                ->get();

        $patrols = \App\Fireman_patrol::
                leftJoin('costs', 'fireman_patrols.id', '=', 'costs.fireman_patrol_id')
                ->select('fireman_patrols.id as PATROL_ID' ,'fireman_patrols.*', 'costs.*')
                ->get();

        // $houses = $houses->toArray();

        $kuca = new \App\Fireman_patrol();
        $housesRET = array();

        foreach ( $patrols as $h) {

            $h = $h->toArray();

        //   \Symfony\Component\VarDumper\VarDumper::dump($h);
         //   $kuca = \App\House::find($h['house_ID']);
$kuca = \App\Fireman_patrol::find($h['PATROL_ID']);
           
         //   \Symfony\Component\VarDumper\VarDumper::dump($kuca);
            $profil['trucks'] = $kuca->getAllTrucks()->toarray();
            
             // \Symfony\Component\VarDumper\VarDumper::dump($profil['fireman']);
            
             $sli['firemans'] = $kuca->getAllFiremans()->toarray();
            $result = array_merge($h, $sli);

            $result = array_merge($result, $profil);
            array_push($housesRET, $result);


            // \Symfony\Component\VarDumper\VarDumper::dump($result);
        }



        return $housesRET;
    }

    public function APIallEntries() {

// If the Content-Type and Accept headers are set to 'application/json', 
        // this will return a JSON structure. This will be cleaned up later.
        // $address = \App\Address::all();//->toJson();
        $house = $this->housesWithAddress(); //\App\House::all();//->toJson();//App\House::all()->toJson();
        //  $photo = \App\Photo::all();//->toJson();
        //  $photoPhotoTypeHouses = \App\PhotoPhototypeHouse::all();//->toJson();
        $photoType = \App\PhotoType::all(); //->toJson();

        $post = \App\Post::
                select('posts.id', 'posts.name')
                ->get(); //->toJson();

        $intervention_types = \App\Intervention_Type::
                select('intervention__types.id', 'intervention__types.name', 'intervention__types.intervention_id')
                ->get();

        $outdoor_types = \App\Outdoor_type::
                select('outdoor_types.id', 'outdoor_types.name', 'outdoor_types.description')
                ->get();

        $size_of_fire = \App\Size_of_fire::
                select('size_of_fires.id', 'size_of_fires.name', 'size_of_fires.description')
                ->get();

        $sort_of_intervention = \App\Sort_of_intervention::
                select('sort_of_interventions.id', 'sort_of_interventions.name')
                ->get();
        $spatial_spread = \App\Spatial_spread::
                select('spatial_spreads.id', 'spatial_spreads.name', 'spatial_spreads.description')
                ->get();

        $spreading_smokes = \App\Spreading_smoke::
                select('spreading_smokes.id', 'spreading_smokes.name', 'spreading_smokes.description')
                ->get();

        $time_spread = \App\Time_spread::
                select('time_spreads.id', 'time_spreads.name', 'time_spreads.description')
                ->get();

        $type_of_truck = \App\Type_of_truck::
                select('type_of_trucks.id', 'type_of_trucks.type_name')
                ->get();

        $type_of_units = \App\Type_of_unit::
                select('type_of_units.id', 'type_of_units.name')
                ->get();

        $hydrants = \App\Hydrant::
                join('addresses', 'addresses.id', '=', 'hydrants.address_id')
                ->select('hydrants.id as hydrantID', 'hydrants.*', 'addresses.*')
                ->get();

        $patr = $this->patrolsWithAll();
     
        $c = array(
            "housesWS" => $house,
            "photoTypeWS" => $photoType,
            "postWS" => $post,
            "sort_of_interventionWS" => $sort_of_intervention,
            "intervention_typeWS" => $intervention_types,
            "outdoor_typeWS" => $outdoor_types,
            "size_of_fireWS" => $size_of_fire,
            "spatial_spreadWS" => $spatial_spread,
            "spreading_smokeWS" => $spreading_smokes,
            "time_spreadWS" => $time_spread,
            "type_of_truckWS" => $type_of_truck,
            "type_of_unitWS" => $type_of_units,
            "hydrants" => $hydrants,
            "patrolsWS" =>$patr
        );





        return $c;
    }

    function RandomString($length) {
        $keys = array_merge(range(0, 9), range('a', 'z'));

        $key = "";
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[mt_rand(0, count($keys) - 1)];
        }
        return $key;
    }

}
