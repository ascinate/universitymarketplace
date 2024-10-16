<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','home');
Route::view('directory','directory');
Route::view('contact','contact');
Route::view('addpost','addpost');
Route::view('details','details');
