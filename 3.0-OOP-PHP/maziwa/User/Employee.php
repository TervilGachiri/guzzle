<?php
namespace  User;
//include for autoloader
//require_once '../Classloader.php';

class Employee extends Staff{

    public $role;
    public $jobtitle;

    public function __construct(){
        //initialize the parent constructor
        parent::__construct();

        //initialize the two variable accordingly
        $this->role ="employee";
        $this->jobtitle = $this->shortBio;
    }
     /**
     * A method that returns all employees
     */
     public function getEmployees(){
         return $this->getAll($this->role); 
     }

}
//create a test object
//$emp = new Employee();