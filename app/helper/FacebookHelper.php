<?php

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

class FacebookHelper {

    private $helper;
    private $session;

    public function __construct()
    {
        FacebookSession::setDefaultApplication(Config::get('facebook.app_id'), Config::get('facebook.secret'));
        $this->helper =  new FacebookRedirectLoginHelper(url('login/fb/callback'));

    }

    public function getUrlLogin()
    {
        return $this->helper->getLoginUrl(Config::get('facebook.app_scope'));
    }


    public function generateSessionFromRedirect()
    {
        $this->session = null;

        try {
            $session = $helper->getSessionFromRedirect();
        } catch(FacebookRequestException $ex) {
            // When Facebook returns an error
        } catch(\Exception $ex) {
            // When validation fails or other local issues
        }
    }

}