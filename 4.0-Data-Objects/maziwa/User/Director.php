<?php
namespace  User;

//include the classloader
//require_once '../Classloader.php';

class Director extends Staff {

    public $linkedIn;
    public $userImage;
    public $role;
    

    public function __construct() {

        //initialize the parent class :we are connecting to the DB.
        parent::__construct();

        //initialize our properties
        $this->role = 'director';

   }



   /**
     * A method that gets all directors
     */
    public function getDirectors(){
           return $this->getAll($this->role);
    }

}


