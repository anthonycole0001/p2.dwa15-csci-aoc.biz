<?php
class admin_controller extends base_controller{
	

    public function __construct() {
        parent::__construct();
        //echo "admin_controller construct called<br><br>";

    } 

	public function login() {
		if ($login == NULL)
        //echo "This is the Admin User Management login";        

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_admin_login');

        # Now set the <title> tag
        $this->template->title = "Admin User Management Login";

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
        $this->template->content->admin_login = $admin_login;

        # Render the view
            echo $this->template;



    }

    public function deleteUser('$users_name', $users_acctid) {
		if ($deleteUser == TRUE)
        //echo "This is the signup page";

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_admin_deleteUser');

        # Now set the <title> tag
        $this->template->title = "Admin User Management Delete User";

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
        $this->template->content->admin_deleteUser = $admin_deleteUser;

        # Render the view
            echo $this->template;


    }

    public function resetpwd() {
        if ($resetpwd == TRUE)
        //echo "This is the reset password page";
    	
    	# Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_admin_resetpwd');

        # Now set the <title> tag
        $this->template->title = "Admin Password Reset";

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
        $this->template->content->admin_resetpwd = $admin_resetpwd;

        # Render the view
            echo $this->template;

    } # End of method
    

} # end of the class