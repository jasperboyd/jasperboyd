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

Route::get('/dash', array(
	'uses' => 'HomeController@dash',
	'as' => 'home.dash'
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

Route::get('projects/{id}/destroy', array(
	'uses' => 'ProjectController@showDestroy',
	'as' => 'projects.showDestroy'
));

Route::resource('projects', 'ProjectController'); 

Route::get('thoughts/{id}/destroy', array(
	'uses' => 'ThoughtController@showDestroy',
	'as' => 'thoughts.showDestroy'
));

Route::resource('thoughts', 'ThoughtController');  


Route::get('albums/{id}/destroy', array(
	'uses' => 'AlbumController@showDestroy',
	'as' => 'albums.showDestroy'

));

Route::resource('albums', 'AlbumController');  

Route::get('services/{id}/destroy', array(
	'uses' => 'ServiceController@showDestroy',
	'as' => 'services.showDestroy'

));

Route::resource('services', 'ServiceController');

Route::get('/service/{serviceid}/orders/create', array(
	'uses' => 'OrderController@create', 
	'as' => 'orders.create'
));

Route::get('/orders/{id}/destroy', array(
	'uses' => 'OrderController@showDestroy', 
	'as' => 'orders.showDestroy'
));

Route::resource('orders', 'OrderController', array('except' => array('create')));
