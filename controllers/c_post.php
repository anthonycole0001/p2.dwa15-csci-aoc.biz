<?php
class post_controller extends base_controller{

	public function __construct() {
        parent::__construct();
        echo "post_controller construct called<br><br>";
    } 

	public function new($post_newcontent) {
		if ($new == NULL){
		echo "This is the new post page";
		}

		else{

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_post_new');

        # Now set the <title> tag
        $this->template->title = "Post New Content";
        
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
        $this->template->content->post_new = $post_new;

        # Render the view
            echo $this->template;

    }

    public function edit($post_newedit = NULL, $post_dbrecordid = NULL) {
        if ($edit == NULL, $post_dbrecordid == NULL){
        	echo "This is the edit post page";

        }
        else{
        
        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_post_newedit');

        # Now set the <title> tag
        $this->template->title = "Edit Content";
        
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
        $this->template->content->post_new = $post_newedit;

        # Render the view
            echo $this->template;
    }

    public function follow() {
        if ($follow == NULL)
        echo "This is the follow post page";

    	}
    	else {

    	# Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_post_follow');

        # Now set the <title> tag
        $this->template->title = "Post Follow User";
        
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
        $this->template->content->post_follow = $post_follow;

        # Render the view
            echo $this->template;

    }

    public function delete() {
    	if ($delete == TRUE)

        //echo "This is the delete post page";

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_post_delete');

        # Now set the <title> tag
        $this->template->title = "Delete Content";

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
        $this->template->content->post_delete = $post_delete;

        # Render the view
            echo $this->template;
    
        } # End of method


	} # end of the class
