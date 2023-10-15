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
        $this ->connection = new Database(); //variable scope (visibility of variables) .function scope/local scope

        //assign the class property called connection to hold the database connection
        $this->connection = $db->connection;
    }
    /**
     * A method that retrieves all the active staff from the database
     * This method can also return a subset of the  staff given the role i.e Employee or Director
     * 
     * $role . signifies the staff roles that we would like to return
     * for example $role=All, $role=Director, $role=Employee
     * 
     * 
     * example of calling the function
     * getAll();
     * getAll('Employee);
     * 
     * @return : A MySQLi resultset
     */
    public function getAll($role='all') {
         
        //connect
        $ourConnection = $this->connection
        //query (Sql statement)
        $sql = "SELECT * FROM staff WHERE status=1"; //this query will give us ALL  staff

        //if the role is specific i.e. Employee or Director etc...then we specify the query
        //specifically we add an additional condition
        if($role != 'All') {
            //SELECT * FROM staff WHERE status = 1 AND role='Employee'      
            $sql = $sql . " AND role='$role'"; //
        }
        if($role != 'All') {
            $sql = "SELECT * FROM staff WHERE status=1"; //this query will give us ALL  staff
        }else{
            $sql = "SELECT * FROM staff WHERE status=1"; //this query will give us ALL  staff 
        }

        //execute it and assign the result to a variable (execute and get the result)
        $results = $ourConnection->query($sql);

        //return the results
        return $results;



    }

    //optional arguments for functions
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