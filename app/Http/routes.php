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

Route::get('/', 'HomeController@index');

Route::group(['prefix'=>'/','namespace'=>'API','middleware'=>'auth'],function(){
    Route::resource('projects','ProjectsController');
    Route::resource('sectors','SectorsController');
    Route::resource('sources','SourcesController');
    Route::resource('units','UnitsController');
    Route::resource('users','UsersController');
});

Route::controllers([
	'/' => 'Auth\AuthController',
]);
