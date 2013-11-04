<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
		
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
		$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
		$this->template->title = "DataGram | Home";
	
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
        $this->template->content->users_login = $users_login;

		# Render the view
			echo $this->template;

	} # End of method
	

	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/aboutus/
	-------------------------------------------------------------------------------------------------*/

	public function aboutus() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
		$this->template->content = View::instance('v_aboutus_aboutus');
			
		# Now set the <title> tag
		$this->template->title = "About Us Product Features";
	
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
        
		# Render the view
			echo $this->template;

	} # End of method


	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/signup/
	-------------------------------------------------------------------------------------------------*/


	public function signup() {
        

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_signup_signup');

        # Now set the <title> tag
        $this->template->title = "User Signup";

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
        //$this->template->content->users_signup = $users_signup;

        # Render the view
            echo $this->template;

	} # End of method
    
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/login/
	-------------------------------------------------------------------------------------------------*/

    public function login() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_login_login');

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

	} # End of method

	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/help/
	-------------------------------------------------------------------------------------------------*/

    public function help() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_help_help');

        # Now set the <title> tag
        $this->template->title = "Help";
              
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
        //$this->template->content->users_login = $index_help;

        # Render the view
            echo $this->template;

	} # End of method


	
} # End of class
