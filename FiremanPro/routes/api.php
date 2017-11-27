<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('houses', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return \App\House::all();
});

Route::get('address', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return \App\Address::all();
});


Route::get('posts', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return \App\Post::all();
});

Route::get('photos', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return \App\Photo::all();
});

Route::get('allEntries', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.

    $address = \App\Address::all()->toJson();
    $house = App\House::all()->toJson();
    $photo = \App\Photo::all()->toJson();
    $photoPhotoTypeHouses = \App\PhotoPhototypeHouse::all()->toJson();
    $photoType = App\PhotoType::all()->toJson();
    $post = \App\Post::
              select('posts.postal_code', 'posts.name')
            ->get()->toJson();

    
    


    $c = array("address" => $address,"houses" => $house,"photo" => $photo, "photoPhotoTypeHouses" => $photoPhotoTypeHouses,"photoType" => $photoType, "post" => $post);





    return $c;
});
