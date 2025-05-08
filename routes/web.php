<?php

// use App\Http\Controllers\CalculosController;
// use App\Http\Controllers\KeepinhoController;
// use App\Http\Controllers\KeepinhoAulaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
Route::get('/', function () {
    return redirect()->route('hotels.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hotels', HotelController::class);

