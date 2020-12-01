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
Route::post('/proses_flight', 'App\Http\Controllers\FlightController@proses');

//Train
Route::get('/train', 'App\Http\Controllers\TrainController@all');
Route::post('/proses_train', 'App\Http\Controllers\TrainController@proses');

//Hotel
Route::get('/hotel', 'App\Http\Controllers\HotelController@all');
Route::post('/proses_hotel', 'App\Http\Controllers\HotelController@proses');

//Rental
Route::get('/rental', 'App\Http\Controllers\RentalController@all');
Route::post('/proses_rental', 'App\Http\Controllers\RentalController@proses');

//Cities
Route::get('/cities', 'App\Http\Controllers\CitiesController@all');
Route::get('/indexcities', 'App\Http\Controllers\CitiesController@index');


//Packages
Route::get('/packages', 'App\Http\Controllers\PackagesController@all');
Route::post('/packages', 'App\Http\Controllers\PackagesController@create');
Route::get('/choosen', 'App\Http\Controllers\PackagesController@choosen');
Route::get('/index', 'App\Http\Controllers\PackagesController@index'); //show things to do

//Thingstodos
Route::get('/thingstodo', 'App\Http\Controllers\ThingstodoController@all');

//Auth
Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user/detail', 'App\Http\Controllers\UserController@details');
    Route::post('logout', 'App\Http\Controllers\UserController@logout');
}); 