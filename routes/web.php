<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//	Route::get('/', function()
//	{
//		return view('welcome');
//	});
//});

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'namespace' => 'Simple',
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::get('/', 'IndexController@index')->name('simple.index');
});

Route::group(
[
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => [ 'auth' ]
], function(){
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::get('/slider', 'SliderController@index')->name('admin.slider.index');
    Route::post('/slider-store', 'SliderController@store')->name('admin.slider.store');

    Route::get('/system-cards', 'SystemCardController@index')->name('admin.system_card.index');
    Route::delete('/system-card-delete', 'SystemCardController@destroy')->name('system_card.delete');
    Route::post('/system-card-delete', 'SystemCardController@store')->name('system_card.store');

    Route::get('/menu', 'MenuController@index')->name('admin.menu.index');
});
