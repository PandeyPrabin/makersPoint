<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Route::get("welcome2", "test@index");
Route::post("store", "test@store");
Route::get("showall", "test@showall");

   // return view('welcome2');

