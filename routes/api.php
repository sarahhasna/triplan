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


//Flight
Route::get('/flight', 'App\Http\Controllers\FlightController@all');

//Train
Route::get('/train', 'App\Http\Controllers\TrainController@all');

//Hotel
Route::get('/hotel', 'App\Http\Controllers\HotelController@all');

//Rental
Route::get('/rental', 'App\Http\Controllers\RentalController@all');


Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user/detail', 'App\Http\Controllers\UserController@details');
    Route::post('logout', 'App\Http\Controllers\UserController@logout');
}); 