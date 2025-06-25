<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;


Route::get('/', [StoreController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.panel');
})->name('admin.panel');



Route::resource('stores', StoreController::class);



