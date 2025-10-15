<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProviderController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('roles', RoleController::class);
Route::resource('providers', ProviderController::class);
