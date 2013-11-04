<?php

class users_controller extends base_controller {

    /*-------------------------------------------------------------------------------------------------

    -------------------------------------------------------------------------------------------------*/
    public function __construct() {
        parent::__construct();

    } 

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/login/
    -------------------------------------------------------------------------------------------------*/
    public function login() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_login');

        # Now set the <title> tag
        $this->template->title = "User Login";
              
        # CSS/JS includes            
        $client_files_head = Array(
            
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_login = $users_login;

        # Render the view
            echo $this->template;
    }

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/logout/
    -------------------------------------------------------------------------------------------------*/

    public function logout() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_logout');

        # Now set the <title> tag
        $this->template->title = "Log out";

        # CSS/JS includes            
        $client_files_head = Array(
            
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_logout = $users_logout;

        # Render the view
            echo $this->template;
    }

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/search/
    -------------------------------------------------------------------------------------------------*/

    public function search() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_search_search');

        # Now set the <title> tag
        $this->template->title = "Search for contacts";

        # CSS/JS includes            
        $client_files_head = Array(
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_search = $users_search;

        # Render the view
            echo $this->template;

    }

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/search/
    -------------------------------------------------------------------------------------------------*/

     public function updateemail() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_updateemail');

        # Now set the <title> tag
        $this->template->title = "Update Email Address";

        # CSS/JS includes            
        $client_files_head = Array(
            
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_updateemail = $users_updateemail;

        # Render the view
            echo $this->template;

    } # End of method

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/resetpwd/
    -------------------------------------------------------------------------------------------------*/

    public function resetpwd() {
 
        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_resetpwd');

        # Now set the <title> tag
        $this->template->title = "Password Reset";

        # CSS/JS includes            
        $client_files_head = Array(
            
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_resetpwd = $users_resetpwd;

        # Render the view
            echo $this->template;

    } # End of method

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/users/profile/
    -------------------------------------------------------------------------------------------------*/

    public function profile() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_profile');

        # Now set the <title> tag
        $this->template->title = "User Profile";
              
        # CSS/JS includes            
        $client_files_head = Array(
            
            '/css/bootstrap.css',
            '/css/bootstrap-theme.min.css',
            '/css/bootstrap-theme.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1',
            'meta name="description" content="DataGram Micro-Blog"',
            'meta name="author" content="DataGram Inc."',
            );
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        
        $client_files_body = Array(
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/jquery.min.js"',
            'script src="/js/bootstrap.min.js"',
            'script src="/js/jquery.max-lenght.js"',
            'script src="/js/bootstrap.js"',
            );
        $this->template->client_files_body = Utils::load_client_files($client_files_body); 

        # Now pass the content to the view
        //$this->template->content->users_login = $users_login;

        # Render the view
            echo $this->template;
    }
    

} # end of the class