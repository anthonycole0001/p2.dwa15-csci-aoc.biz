<?php
class search_controller extends base_controller{
	
    public function __construct() {
        parent::__construct();
        echo "search_controller construct called<br><br>";
    } 

	public function singleS() {
		 if ($singleS == TRUE)
        
        //echo "This is the single variable search page";

    	# Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_search_singleS');

        # Now set the <title> tag
        $this->template->title = "Admin Password Reset";

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
        $this->template->content->search_singleS = $search_singleS;

        # Render the view
            echo $this->template;
    }

    public function multipleS() {
        if (singleS == TRUE)
        //echo "This is the multi variable search page";

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_search_multipleS');

        # Now set the <title> tag
        $this->template->title = "Admin Password Reset";

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
        $this->template->content->search_singleS = $search_singleS;

        # Render the view
            echo $this->template;

		
    } # End of method
    


} # end of the class