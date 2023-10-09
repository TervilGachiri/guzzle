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
     * A function to insert directors
     * getAll()
     * getAll(0)
     * getAll(1)
     */
    public function getAll($active=1){

         $currentRole = $this->role;
         //write a query to select all the directors
         $sql = "SELECT * FROM staff WHERE role ='$currentRole'AND status=1";
         // execute it and //return that result
         return $this->db->connection->query($sql);
         
    }
    /**
     * A function to insert directors
     */
     public function insert($lname,$fname,$phone){

     }
     /**
      * A function that deletes directors
      * [softDelete - you update a field in the database that signifies inactive records]
      * or [hardDelete -- literally delete the database row] -- delete * from staff where id=9
      */
     public function delete($id){

     }

     public function update ($fieldArray){

     }

}

