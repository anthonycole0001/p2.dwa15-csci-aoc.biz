<?php
class search_controller extends base_controller{
	
    public function __construct() {
        parent::__construct();
        //echo "search_controller construct called<br><br>";

    } 

	public function singleS() {
		 if ($singleS == TRUE)
        
        //echo "This is the single variable search page";

    	# Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_search_singleS');

        # Now set the <title> tag
        $this->template->title = "Search Single Variable";

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
        $this->template->title = "Search Multiple Variables";

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
        $this->template->content->search_singleS = $search_singleS;

        # Render the view
            echo $this->template;

		
    } # End of method
    


} # end of the class