<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('roles', RoleController::class);
Route::resource('providers', ProviderController::class);
Route::resource('products', ProductController::class);
