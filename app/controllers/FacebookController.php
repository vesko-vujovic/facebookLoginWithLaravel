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
		dd(Input::all());

	}



}
