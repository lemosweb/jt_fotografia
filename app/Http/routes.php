<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [ 'as' => 'index', 'uses' => 'IndexController@index']);
Route::post('home/sendmail', ['as' => 'index.email', 'uses' => 'IndexController@sendMail']);


Route::get('email', function(){

    $mail = new \App\PHPMail;

    if($mail->sendMail())

    echo 'Ok';


});


Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function() {

    Route::get('{id}/images', ['as' => 'images.index', 'uses' => 'ImagesController@index']);
    Route::get('images/{id}/create', ['as' => 'images.create', 'uses' => 'ImagesController@create']);
    Route::get('images/create/all', ['as' => 'images.create.all', 'uses' => 'ImagesController@createAll']);
    Route::post('images/{id}/upload', ['as' => 'images.upload', 'uses' => 'ImagesController@upload']);
    Route::get('images/{id}/destroy', ['as' => 'images.destroy', 'uses' => 'ImagesController@destroy']);
    Route::get('images/{id}/setcover', ['as' => 'galleries.setcover', 'uses' => 'ImagesController@setCover']);


    Route::get('galleries', ['as' => 'galleries.index', 'uses' => 'GalleriesController@index']);
    Route::get('galleries/create', ['as' => 'galleries.create', 'uses' => 'GalleriesController@create']);
    Route::post('galleries/store', ['as' => 'galleries.store', 'uses' => 'GalleriesController@store']);
    Route::get('galleries/{id}/edit', ['as' => 'galleries.edit', 'uses' => 'GalleriesController@edit']);
    Route::put('galleries/{id}/update', ['as' => 'galleries.update', 'uses' => 'GalleriesController@update']);
    Route::get('galleries/{id}/destroy', ['as' => 'galleries.destroy', 'uses' => 'GalleriesController@destroy']);


    Route::get('videos', ['as' => 'videos.index', 'uses' => 'VideoController@index']);
    Route::get('videos/create', ['as' => 'videos.create', 'uses' => 'VideoController@create']);
    Route::post('videos/store', ['as' => 'videos.store', 'uses' => 'VideoController@store']);
    Route::get('videos/{id}/edit', ['as' => 'videos.edit', 'uses' => 'VideoController@edit']);
    Route::put('videos/{id}/update', ['as' => 'videos.update', 'uses' => 'VideoController@update']);
    Route::get('videos/{id}/destroy', ['as' => 'videos.destroy', 'uses' => 'VideoController@destroy']);

    Route::get('agenda', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);
    Route::get('agenda/create', ['as' => 'agenda.create', 'uses' => 'AgendaController@create']);
    Route::post('agenda/store', ['as' => 'agenda.store', 'uses' => 'AgendaController@store']);
    Route::get('agenda/{id}/edit', ['as' => 'agenda.edit', 'uses' => 'AgendaController@edit']);
    Route::put('agenda/{id}/update', ['as' => 'agenda.update', 'uses' => 'AgendaController@update']);
    Route::get('agenda/{id}/destroy', ['as' => 'agenda.destroy', 'uses' => 'AgendaController@destroy']);


});


Route::auth();

Route::get('admin', ['as' => 'admin.index', 'uses' => 'HomeController@index']);
