<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', controller: \App\Http\Controllers\PostController::class);
Route::get('/home',[HomeController::class, 'index']);


