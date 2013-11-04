<?php
# Classes are defined with the keyword "class"
class Signup {


    /*
    Class properties
    Encapsulation:
    Access modifiers indicate what access levels other classes can have to these properties
    1) Public    - Any other class can access the property
    2) Private   - Only this class can access the property
    3) Protected - This class and any class that inherits it can access this property
    */
    protected $users_fname;
    protected $users_lname;
    protected $users_email;
    protected $users_acctid;
    protected $users_name;
    protected $users_pwd;


    /* 
    Constructor
    __construct is a Magic method (optional), called whenever an object is instantiated
    Magic methods are reserved methods built into PHP, and prefixed with two underscores
    */
    public function __construct($filename) {
    
        # Read the image file to a binary buffer
        $fp  = fopen($filename, 'rb') or die("Signup '$filename' not found!");
        $buf = '';
        while(!feof($fp))
            $buf .= fgets($fp, 4096);

    }

    public function users_fname() {
        


        
    }

    public function users_lname() {
        


        
    }

    
    public function users_email()  {




    }


    public function users_acctid()  {



        
    }


    public function users_name()  {



        
    }


    public function users_pwd() {

        


        }
    }






} # eoc

?>