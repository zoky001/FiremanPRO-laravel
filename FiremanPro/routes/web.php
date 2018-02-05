<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/house/new', 'HouseController@addNewHouse')->name('addNewHouse');
Route::get('/house/all', 'HouseController@showAllHouses')->name('showAllHouses');

Route::get('/firestore/', 'FirestoreController@home')->name('firestore');

Route::get('/firestore/login', 'FirestoreController@login')->name('firestore_login');

Route::get('/firestore/newHouse', 'FirestoreController@newHouse')->name('newHouse');