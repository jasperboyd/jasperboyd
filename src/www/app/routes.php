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

Route::get('/music', array(
	'uses' => 'HomeController@music',
	'as' => 'home.music'
));

Route::get('/webdev', array(
	'uses' => 'HomeController@webdev',
	'as' => 'home.webdev'
));

Route::resource('users', 'UserController');
Route::resource('projects', 'ProjectController'); 
Route::resource('thoughts', 'ThoughtController');  
Route::resource('albums', 'AlbumController');  
