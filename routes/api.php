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

use App\Http\Controllers\Api\PublicDataController;

Route::get('info', function () {
    return "info";
});

Route::get('/youth-sport', [PublicDataController::class, 'getYouthSport']);
Route::get('/scientific', [PublicDataController::class, 'getScientific']);
Route::get('/international', [PublicDataController::class, 'getInternational']);
