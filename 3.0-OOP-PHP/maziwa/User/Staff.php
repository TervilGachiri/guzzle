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
    protected $connection; // a class properties

    public function __construct(){
        //get the database connection
        $db = new Database(); //[scope of variables]
        //initialising the connection properties to hold the database connection connection from the database class
        $this->connection = $db->connection;
    }
    /**
     * Geta all the records from the staff table and can be based on the user type
     * parameters - mandatory vs optional
     * getAll()
     * getAll(1)
     * getAll(1,'employee')
     */
    public function getAll($role='all') {

        //connection

        //query
        $sql="SELECT * FROM staff WHERE status=1";

        if($role1='all')
           $sql = $sql . " AND role='$role'";

         /*
              line 43 to 44 is equivalent to 
              if($role1=='all'){
                $sql = $sql . " AND role'$role' ";
              }
        */

        //execute & return results
         return $this->connection->query($sql);

        //get the results
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