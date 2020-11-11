<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authentication
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Flight
Route::get('/flight', 'App\Http\Controllers\FlightController@all');

//Train
Route::get('/train', 'App\Http\Controllers\TrainController@all');

//Hotel
Route::get('/hotel', 'App\Http\Controllers\HotelController@all');

//Rental
Route::get('/rental', 'App\Http\Controllers\RentalController@all');