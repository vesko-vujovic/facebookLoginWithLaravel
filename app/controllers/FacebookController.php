<?php



class FacebookController extends \BaseController {

	public function __construct(FacebookHelper $fb)
	{
		$this->fb    = $fb;

	}
    public function login()
	{
      return Redirect::to($this->fb->getUrlLogin());

	}
	public function callback()
	{
		if(!$this->fb->generateSessionFromRedirect())
		{
			return  Redirect::to('/')
				->with('message', 'Problem with loging with Facebook');
		}

		$user_fb = $this->fb->getGraph();

		if(empty($user_fb))
		{
			return Redirect::to('/')
				->with('message',  'Error loading data from Facebook');
		}

		//check if we have user in database if not create one
		$user = User::where('email', $user_fb->getProperty('email'))->first();

		if(empty($user))
		{
			$user                     =  new User();
			$user->email              =  $user_fb->getProperty('email');
			$user->name               =  $user_fb->getProperty('name');
			$user->fb_id              =  $user_fb->getProperty('id');
			$user->profile_link       =  'https://www.facebook.com/'.$user_fb->getProperty('id');
			$user_fb->access_token_fb     = $this->fb->getToken();
			$user->save();

		}



		      $user_profile = User::find($user->id);

		      Auth::login($user_profile);


              return Redirect::to('/')
				->with('message', 'You have successfully loged in with Facebook');







	}



}
