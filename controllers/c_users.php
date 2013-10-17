<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        echo "users_controller construct called<br><br>";
    } 

    public function signup($users_fname, $users_lname, $users_email, $users_acctid, $users_name, $users_pwd) {
        
        if ($users_fname == NULL, $users_lname == NULL, $users_email == NULL, $users_acctid == NULL, $users_pwd == NULL) {
            echo "You are not signed up for the service.  Please signup by providing the required information";
        

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_signup');

        # Now set the <title> tag
        $this->template->title = "User Signup";

        # CSS/JS includes            
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   
            
        # Now pass the content to the view
        $this->template->content->users_signup = $users_signup;


        # Render the view
            echo $this->template;

        }
        else {
            echo " Thank you for signing up for the service, ".$users_fname;
        }

    public function login() {

        if ($login == FALSE){
        echo "The user is not logged-in, please login"

        }
        else {   
            //echo "This is the login page";

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_login');

        # Now set the <title> tag
        $this->template->title = "User Login";
        
        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_login = $users_login;

        # Render the view
            echo $this->template;
    }

    public function logout() {
        if ($logout == TRUE)

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_logout');

        # Now set the <title> tag
        $this->template->title = "Log out";

        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_logout = $users_logout;

        # Render the view
            echo $this->template;
    }


    public function search() {
        if ($search == TRUE)

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_search');

        # Now set the <title> tag
        $this->template->title = "Search for contacts";

        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_search = $users_search;

        # Render the view
            echo $this->template;

    }

     public function updateemail() {
        if ($updateemail == TRUE)

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_updateemail');

        # Now set the <title> tag
        $this->template->title = "Update Email Address";

        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_updateemail = $users_updateemail;

        # Render the view
            echo $this->template;

    }

    public function resetpwd() {
        if ($resetpwd == TRUE)
 
        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_resetpwd');

        # Now set the <title> tag
        $this->template->title = "Password Reset";

        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_resetpwd = $users_resetpwd;

        # Render the view
            echo $this->template;

    }

    public function profile($users_name = NULL) {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_users_profile');

        # Now set the <title> tag
        $this->template->title = "Profile";

        # CSS/JS includes
        $client_files_head = Array(
            '/css/base.css', 
            '/css/layout.css', 
            '/css/skeleton.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1"',
            'meta name="description" content=""',
            'meta name="author" content="DataGram Inc."',
            'script src="http://html5shim.googlecode.com/svn/trunk/html5.js"',
            'script src="/js/profile.js"',
            //'link rel="shortcut icon" href="images/favicon.ico"',
            //'link rel="apple-touch-icon" href="images/apple-touch-icon.png"',
            //'link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"',
            //'link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png"'
            );

        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);   

        # Now pass the content to the view
        $this->template->content->users_name = $users_name;

        # Render the view
            echo $this->template;

    } # End of method
    


} # end of the class