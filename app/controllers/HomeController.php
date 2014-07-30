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

	/**
	 * Homepage
	 */
	public function showHome()
	{
		if(!Session::get('user.logged_in')) {
			return Redirect::to('login');
		}
		echo "<pre>";
		print_r(Session::all());
		echo "</pre>";
		return View::make('home');
	}
	
	/**
	 * Show Login Page
	 */
	public function showLogin() {
		return View::make('login/login');
	}

	/**
	 * Process the login form
	 * @todo use Auth\ldap once DA server is up
	 */
	public function doLogin() {
		$rules = array(
				'username'    => 'required',
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);		
		
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('login')
			->withErrors($validator)
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form			
		}
		$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
		);
		if (Auth::attempt($userdata)) {
			$user = User::whereUsername($userdata['username'])->first();
			if($user->has_two_factor) {
				Session::put('user', $user->toArray());
				return Redirect::to('authy');
			}
			else {
				Session::put('user', $user->toArray());
				Session::put('user.logged_in', true);
				return Redirect::to('/');
			}
		}			
		return Redirect::to('login');		
	}
	
	/**
	 * 
	 */
	public function showAuthy() {
		// if user logged in already then they don't need to 2 auth
		if(Session::get('user.logged_in')) {
			return Redirect::to('/');
		}
		// if this user has no user session they need to login
		if(!Session::has('user')) {
			return Redirect::to('login');
		}
		// if user has 2 factor enabled
		if(Session::get('user.has_two_factor')) {
			return View::make('login.authy');
		}
	}
	
	/**
	 * Process the Authy Form
	 * @todo revisit this and put real authentication here
	 */
	public function doAuthy() {
		Session::put('user.logged_in', true);
		return Redirect::to('/');
	}
	
	public function doLogout() {
		Session::flush();
		return Redirect::to('login');
	}
}
