<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopsController;

Route::get('/admin', function () {
    return view('admin.panel');
});


Route::get('shop',[ShopsController::class,'index']);
Route::post('shop', [ShopsController::class, 'store'])->name('shop');;
Route::get('shop/{id}', [ShopsController::class, 'show']);
Route::put('shop/{id}', [ShopsController::class, 'update']);
Route::delete('shop/{id}', [ShopsController::class, 'destroy']);
Route::get('/sh', function () {
    return view('create_store');
});