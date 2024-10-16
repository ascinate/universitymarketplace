<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','home');
Route::get('/directory', [PostController::class, 'index'])->name('directory');
Route::view('contact','contact');
Route::view('addpost','addpost');
Route::view('details','details');

Route::post('register', [UserController::class, 'store'])->name('register.store');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout']);
Route::post('addposts', [PostController::class, 'store']);
