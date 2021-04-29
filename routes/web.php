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

Auth::routes(['register' => false]);

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
	'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function(){
    Route::get('/', 'IndexController@index')->name('simple.index');
    Route::get('/general-page/{slug}' , 'SlugController@index')->name('slug.index');

    Route::get('/about-university' , 'IndexController@about_university')->name('simple.about.university');
    Route::get('/news' , 'NewwController@index')->name('simple.news');
    Route::get('/news/{id}' , 'NewwController@show')->name('simple.news.show');

    Route::get('/announces' , 'AnnouncesController@index')->name('simple.announces');
    Route::get('/announces/{id}' , 'AnnouncesController@show')->name('simple.announces.show');

    Route::get('/rektorat' , 'RektoratController@index')->name('simple.rektorat.index');
    Route::get('/rektor' , 'RektorController@index')->name('simple.rektor.index');
    Route::get('/rektorat/{id}' , 'RektoratController@show')->name('simple.rektorat.show');

    Route::get('/timetable-lesson' , 'TimeTableController@index')->name('simple.timetable.index');
    Route::get('/timetable-session' , 'TimeTableController@index_session')->name('simple.timetable.index_session');
    Route::get('/all-faculties' , 'FacultyController@index')->name('simple.faculty.index');
    Route::get('/all-faculties/{id}/{name}' , 'FacultyController@show')->name('simple.faculty.show');
    Route::get('/all-centers' , 'CenterController@index')->name('simple.center.index');
    Route::get('/all-centers/{id}/{name}' , 'CenterController@show')->name('simple.center.show');

    Route::get('/all-sections' , 'SectionController@index')->name('simple.section.index');
    Route::get('/all-sections/{id}/{name}' , 'SectionController@show')->name('simple.section.show');

    Route::get('/all-branches' , 'BranchController@index')->name('simple.branches');
    Route::get('/euc-system-card' , 'EumController@index')->name('simple.eum.system.card');

    Route::get('/ustav' , 'UstavController@index')->name('simple.ustav.index');

    Route::get('/ask-question/{id}' , 'QuestionController@index')->name('simple.ask_question.index');
    Route::post('/ask-question-store' , 'QuestionController@store')->name('simple.ask_question.store');
    Route::get('/symbols' , function(){
        return view('simple.symbols');
    });
    Route::get('/all-videos' , function(){
        return view('simple.video_gallery');
    });
    Route::get('/faq' , function(){
        return view('simple.faq');
    });
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
    Route::get('/menu/{id}', 'MenuController@show')->name('admin.menu.show');
    Route::post('/menu-store', 'MenuController@store')->name('admin.menu.store');
    Route::put('/menu-update/{id}', 'MenuController@update')->name('admin.menu.update');

    Route::get('/menu-top', 'MenuTopController@index')->name('admin.menu_top.index');
    Route::get('/menu-top/{id}', 'MenuTopController@show')->name('admin.menu_top.show');
    Route::post('/menu-top-store', 'MenuTopController@store')->name('admin.menu_top.store');
    Route::put('/menu-top-update/{id}', 'MenuTopController@update')->name('admin.menu_top.update');


    Route::get('/pages', 'PageController@index')->name('admin.page.index');
    Route::get('/page-create', 'PageController@create')->name('admin.page.create');
    Route::post('/page-store', 'PageController@store')->name('admin.page.store');
    Route::delete('/page-delete', 'PageController@destroy')->name('admin.page.delete');

    Route::get('/about-university' , 'AboutUniversityController@index')->name('admin.about_university.index');
    Route::post('/admin-about-university-update' , 'AboutUniversityController@update')->name('admin.about_university.update');

    Route::get('/admin-slug/{id}' , 'SlugController@index')->name('admin.slug.index');
    Route::post('/admin-slug-store' , 'SlugController@store')->name('admin.slug.store');
    Route::post('/admin-slug-clear' , 'SlugController@clear')->name('admin.slug.clear');

    Route::get('/admin-slug-top/{id}' , 'SlugTopController@index')->name('admin.slug_top.index');
    Route::post('/admin-slug-top-store' , 'SlugTopController@store')->name('admin.slug_top.store');
    Route::post('/admin-slug-top-clear' , 'SlugTopController@clear')->name('admin.slug_top.clear');


    Route::post('/admin-change-eye-menu' , 'MenuController@change_eye_menu')->name('admin.change.eye.menu');

    Route::get('admin-neww' , 'NewwController@index')->name('admin.neww.index');
    Route::get('admin-neww-create' , 'NewwController@create')->name('admin.neww.create');
    Route::post('admin-neww-store' , 'NewwController@store')->name('admin.neww.store');
    Route::put('admin-neww-update/{id}' , 'NewwController@update')->name('admin.neww.update');
    Route::get('admin-neww-edit/{id}' , 'NewwController@edit')->name('admin.neww.edit');
    Route::get('admin-neww-change-status/{id}' , 'NewwController@change_status')->name('admin.neww.change.status');
    Route::delete('admin-neww-delete' , 'NewwController@destroy')->name('admin.neww.delete');

    Route::get('admin-announce' , 'AnnouncesController@index')->name('admin.announce.index');
    Route::get('admin-announce-create' , 'AnnouncesController@create')->name('admin.announce.create');
    Route::post('admin-announce-store' , 'AnnouncesController@store')->name('admin.announce.store');
    Route::put('admin-announce-update/{id}' , 'AnnouncesController@update')->name('admin.announce.update');
    Route::get('admin-announce-edit/{id}' , 'AnnouncesController@edit')->name('admin.announce.edit');
    Route::delete('admin-announce-delete' , 'AnnouncesController@destroy')->name('admin.announce.delete');

    Route::get('admin-media-index' , 'MediaController@index')->name('admin.media.index');
    Route::post('admin-media-store' , 'MediaController@store')->name('admin.media.store');

    Route::get('/rektorat' , 'RektoratController@index')->name('admin.rektorat.index');
    Route::get('/rektorat-create' , 'RektoratController@create')->name('admin.rektorat.create');
    Route::post('/rektorat-update' , 'RektoratController@update')->name('admin.rektorat.update');
    Route::post('/rektorat-store' , 'RektoratController@store')->name('admin.rektorat.store');
    Route::get('/rektorat-edit/{id}' , 'RektoratController@edit')->name('admin.rektorat.edit');
    Route::get('/rektorat-move-up/{id}' , 'RektoratController@move_up')->name('admin.rektorat.move_up');
    Route::get('/rektorat-move-down/{id}' , 'RektoratController@move_down')->name('admin.rektorat.move_down');

    Route::get('/timetable-lesson-index' , 'TimeTableController@index')->name('admin.lesson.timetable.index');
    Route::post('/timetable-group-store' , 'TimeTableController@group_store')->name('admin.lesson.group.store');
    Route::post('/timetable-group-update' , 'TimeTableController@group_update')->name('admin.lesson.group.update');
    Route::get('/timetable-delete-file/{id}/{type}' , 'TimeTableController@group_delete_file')->name('admin.lesson.group.timetable.file_delete');

    Route::get('/separately-index' , 'SliderController@separately_index')->name('admin.separately.index');
    Route::post('/separately-store' , 'SliderController@separately_store')->name('admin.separately.store');

    Route::resource('admin_young_scientist_new' , 'YoungScientistsNewController');
    Route::get('/admin_young_scientist_new-change-status/{id}' , 'YoungScientistsNewController@change_status')->name('admin_young_scientist_new.change.status');
    Route::resource('admin_scientific_article' , 'ScientificArticleController');

    Route::resource('admin_faculty' , 'FacultyController');
    Route::get('admin_faculty-administration/{id}' , 'FacultyController@administration_index')->name('faculty.administration.index');
    Route::get('admin_faculty-administration-create/{id}' , 'FacultyController@administration_create')->name('faculty.administration.create');
    Route::get('admin_faculty-administration-edit/{id}' , 'FacultyController@administration_edit')->name('faculty.administration.edit');
    Route::put('admin_faculty-administration-update/{id}' , 'FacultyController@administration_update')->name('faculty.administration.update');
    Route::delete('admin_faculty-administration-delete/{id}' , 'FacultyController@administration_delete')->name('faculty.administration.delete');
    Route::post('admin_faculty-administration-store' , 'FacultyController@administration_store')->name('faculty.administration.store');

    Route::resource('admin_section' , 'SectionController');
    Route::get('admin_section-administration/{id}' , 'SectionController@administration_index')->name('section.administration.index');
    Route::get('admin_section-administration-create/{id}' , 'SectionController@administration_create')->name('section.administration.create');
    Route::get('admin_section-administration-edit/{id}' , 'SectionController@administration_edit')->name('section.administration.edit');
    Route::put('admin_section-administration-update/{id}' , 'SectionController@administration_update')->name('section.administration.update');
    Route::delete('admin_section-administration-delete/{id}' , 'SectionController@administration_delete')->name('section.administration.delete');
    Route::post('admin_section-administration-store' , 'SectionController@administration_store')->name('section.administration.store');

    Route::resource('admin_center' , 'CenterController');
    Route::get('admin_center-administration/{id}' , 'CenterController@administration_index')->name('center.administration.index');
    Route::get('admin_center-administration-create/{id}' , 'CenterController@administration_create')->name('center.administration.create');
    Route::get('admin_center-administration-edit/{id}' , 'CenterController@administration_edit')->name('center.administration.edit');
    Route::put('admin_center-administration-update/{id}' , 'CenterController@administration_update')->name('center.administration.update');
    Route::delete('admin_center-administration-delete/{id}' , 'CenterController@administration_delete')->name('center.administration.delete');
    Route::post('admin_center-administration-store' , 'CenterController@administration_store')->name('center.administration.store');

    Route::resource('admin_rector' , 'RektorController');
    Route::resource('admin_ustav' , 'UstavController');
});
