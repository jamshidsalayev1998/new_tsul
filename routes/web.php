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
    Route::get('/general-page/{slug}' , 'SlugController@index')->name('slug.index');

    Route::get('/about-university' , 'IndexController@about_university')->name('simple.about.university');
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


    Route::get('/pages', 'PageController@index')->name('admin.page.index');
    Route::get('/page-create', 'PageController@create')->name('admin.page.create');
    Route::post('/page-store', 'PageController@store')->name('admin.page.store');
    Route::delete('/page-delete', 'PageController@destroy')->name('admin.page.delete');

    Route::get('/about-university' , 'AboutUniversityController@index')->name('admin.about_university.index');
    Route::post('/admin-about-university-update' , 'AboutUniversityController@update')->name('admin.about_university.update');

    Route::get('/admin-slug/{id}' , 'SlugController@index')->name('admin.slug.index');
    Route::post('/admin-slug-store' , 'SlugController@store')->name('admin.slug.store');
});
