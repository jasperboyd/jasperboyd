<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function welcome()
	{
		return View::make('home.welcome');
	}

	public function music()
	{ 
		return View::make('home.music'); 
	}

	public function webdev()
	{
		$services = Service::all(); 
		return View::make('home.webdev', compact('services')); 
	}

}
