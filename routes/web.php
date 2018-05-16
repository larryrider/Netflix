<?php

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

Route::get('/logout', function () {
    Session::flush();
    return redirect('/');
});
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/serie/{id}', 'SerieController@index');
    Route::get('/serie/{id}/chapters/{temp}', 'SerieController@chapters');
    Route::get('/serie/{id}/details', 'SerieController@details');
    Route::post('/serie/{id}/details', 'ReviewController@create');
    Route::put('/serie/{id}/details', 'ReviewController@edit');
    Route::delete('/serie/{id}/details', 'ReviewController@delete');
    Route::get('/serie/{id}/similar', 'SerieController@similar');
    Route::get('/series','SerieController@series');
    Route::get('/series/cat/{id}','SerieController@browseCategory');
    Route::get('/series/dir/{id}','SerieController@browseDirector');
    Route::get('/series/act/{id}','SerieController@browseActor');
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/newSerie','SerieController@newSerie');
    Route::post('/admin/newSerie','SerieController@create');
    Route::get('/admin/editSerie','SerieController@editSerie');
    Route::put('/admin/editSerie','SerieController@edit');
    Route::get('/admin/deleteSerie','SerieController@deleteSerie');
    Route::delete('/admin/deleteSerie','SerieController@delete');

    Route::get('/admin/newSeries/cap','ChapterController@index');
    Route::post('/admin/newSerie/cap','ChapterController@create');

    Route::get('/admin/newSeason','SerieController@newSeason');
    Route::put('/admin/newSeason','SerieController@addSeason');
    Route::get('/admin/deleteSeason','SerieController@deleteSeason');
    Route::delete('/admin/deleteSeason','SerieController@deleteLastSeason');

    Route::get('/admin/newDirector','DirectorController@index');
    Route::post('/admin/newDirector','DirectorController@create');
    Route::get('/admin/editDirector','DirectorController@editDirector');
    Route::put('/admin/editDirector','DirectorController@edit');
    Route::get('/admin/deleteDirector','DirectorController@deleteDirector');
    Route::delete('/admin/deleteDirector','DirectorController@delete');

    Route::get('/admin/newActor','ActorController@index');
    Route::post('/admin/newActor','ActorController@create');
    Route::get('/admin/editActor','ActorController@editActor');
    Route::put('/admin/editActor','ActorController@edit');
    Route::get('/admin/deleteActor','ActorController@deleteActor');
    Route::delete('/admin/deleteActor','ActorController@delete');

    Route::get('/admin/newCategory','CategoryController@index');
    Route::post('/admin/newCategory','CategoryController@create');
    Route::get('/admin/editCategory','CategoryController@editCategory');
    Route::put('/admin/editCategory','CategoryController@edit');
    Route::get('/admin/deleteCategory','CategoryController@deleteCategory');
    Route::delete('/admin/deleteCategory','CategoryController@delete');

    Route::get('/admin/editChapter','SerieController@showEditChapter');
    Route::put('/admin/editChapter','SerieController@editChapter');
    
});

Auth::routes();