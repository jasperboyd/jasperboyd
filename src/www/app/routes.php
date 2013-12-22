<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'uses' => 'HomeController@welcome', 
	'as' => 'home.welcome'

));

Route::get('/webdev', array(
	'uses' => 'HomeController@webdev',
	'as' => 'home.webdev'
));

Route::get('/login', array(
	'uses' => 'SessionController@create',
	'as' => 'session.create'
));

Route::post('login', array(
  'uses' => 'SessionController@store',
  'as' => 'session.store'
));

Route::get('logout', array(
  'uses' => 'SessionController@destroy',
  'as' => 'session.destroy'
));

Route::resource('users', 'UserController');
Route::resource('projects', 'ProjectController'); 
Route::resource('thoughts', 'ThoughtController');  


Route::get('albums/{id}/destroy', array(
	'uses' => 'AlbumController@showDestroy',
	'as' => 'albums.showDestroy'

));

Route::resource('albums', 'AlbumController');  

Route::resource('services', 'ServiceController');
