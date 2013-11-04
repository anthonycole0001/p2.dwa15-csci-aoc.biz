<?php
# Classes are defined with the keyword "class"
class Profile {


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
    protected $users_pwd;
    protected $users_acctid;
    protected $users_name;
    protected $users_membershipstartdate;


    /* 
    Constructor
    __construct is a Magic method (optional), called whenever an object is instantiated
    Magic methods are reserved methods built into PHP, and prefixed with two underscores
    */
    public function __construct($filename) {

        # Read the profile file to a binary buffer
        $fp  = fopen($filename, 'rb') or die("Profile '$filename' not found!");
        $buf = '';
        while(!feof($fp))
            $buf .= fgets($fp, 4096);

        /*
        Create profile and asign it to the image property
        $this is a built in variable that points to the current object. 
        It's used to access propertyerties and methods of the current class.
        */
        $this->profile = profilecreatefromstring($buf);

        # Extract profile information storing in the class attributes
        $info           = getprofile($filename);
        $this->users_fname  = $info[0];
        $this->users_lname   = $info[1];
        $this->users_email   = $info[2];
        $this->users_acctid   = $info[3];
        $this->users_name   = $info[4];
        $this->users_pwd   = $info[5];
        $this->users_membershipstartdate   = $info[6];
        $this->mimetype = $info['mime'];
    }


    public function users_fname() {
        


        
    }

    public function users_lname() {
        


        
    }

    
    public function users_email()  {




    }

    public function users_pwd() {




    }


    public function users_acctid() {
        


        
    }

    
    public function users_name()  {




    }

    public function users_pwd() {        




    }

    public function users_membershipstartdate()  {



    

    }

}






} # eoc

?>