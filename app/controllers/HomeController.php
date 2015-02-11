<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller for Facebook App
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|
	*/

	public function index()
	{
		$user_data = array();
		if(Auth::check())
		{
			$user_data = Auth::user();
		}

		return View::make('home')
			->with('user', $user_data);
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}

}
