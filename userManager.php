<?php
	require_once('facebook/facebook.php');

	class UserManager
	{
		    // Create our Application instance (replace this with your appId and secret).
    		    private $facebook;

		    public function __construct()
		    {
			$this->facebook  = new Facebook(array(
        	    	    'appId'  => '430288226994015',
  			    'secret' => 'f10506c93391260892287bb49cfd1691',
    			    ));
		    }

		    public function getFacebookUserId()
		    {
			// Get Facebook User ID
    			$user = $this->facebook->getUser();
			return $user;
	            }

		    public function isUserLoggedIn()
		    {
			$user = $this->getFacebookUserId();
			return ($user != 0);
		    }

		    public function getLoginUrl()
		    {
			return $this->facebook->getLoginUrl();
		    }
	}
?>