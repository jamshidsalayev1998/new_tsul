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

Route::get('/youth-sport', 'Api\PublicDataController@getYouthSport');
Route::get('/scientific', 'Api\PublicDataController@getScientific');
Route::get('/international', 'Api\PublicDataController@getInternational');
