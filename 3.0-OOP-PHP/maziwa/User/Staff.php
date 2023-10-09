<?php
namespace  User;

//include our class loader
//require_once '../Classloader.php';


//aliasing 
use \Database\Database as Database;

class Staff{

    protected $id;
    protected $lastname;
    protected $firstname;
    protected $fullname;
    protected $shortBio;
    protected $emailAddress;
    protected $role;
    protected $employmentDate;
    protected $status;
    protected $db;

    public function __construct(){
        //get the database connection
        $db = new Database();

        //initializea class property of Staff to hold the database connection
        $this->db = $db;
    }
}

//@TODO #15:  Advantages of PHP Autoloading
//Reduces Redundancy and Boilerplate Code
//Promotes Scalability
//Improves Development Efficiency
//Simplifies Code Maintenance

//@TODO #14: Why do we need to autoload files in PHP
//Efficiency and Performance
//Saves Development Time
//Promotes Scalabilit
//Simplifies Maintenance
//Encourages Best Practices

//an object named person of type Staff
//a Staff object named person 
//$person = new Staff();