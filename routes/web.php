<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/posts', controller: \App\Http\Controllers\PostController::class);
Route::get(‘/tambah’, [TambahController::class, ‘tambah’ ]);

