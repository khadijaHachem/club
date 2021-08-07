<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\ClubSportController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cities', CityController::class);
Route::resource('sports', SportController::class);
Route::resource('clubs', ClubController::class);
Route::resource('sportsclubs', ClubSportController::class);



//Route::ressource('cities','App\Http\Controllers\CitieController');