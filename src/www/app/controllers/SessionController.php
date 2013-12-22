<?php

class SessionController extends BaseController {

	public function create(){
		return View::make('auth.login');
	}

	public function store()
  	{
    	if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
    	{
      		return Redirect::intended('/');
    	}
    	return Redirect::route('session.create')
            ->withInput()
            ->with('login_errors', true);
  }
 
  public function destroy()
  {
    Auth::logout();
 
    return Redirect::action('HomeController@welcome');
  }

}
