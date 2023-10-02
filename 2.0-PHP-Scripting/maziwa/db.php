<?php
/**
 * Connect to the database
 */

 //define constants for database connection(credentials)
 define('DB_HOST', 'localhost');
 define('DB_PORT', '3306');
 define('DB_USER', 'api_user');//root
 define('DB_PASS', 'api_user');//**
 define('DB_NAME', 'class_db');


 class Database {

    //class properties
    private $host;
    private $port;
    private $user;
    private $password;
    private $db_name;

    public $connection;

    //access modifiers (public[all].protected[within and child classes],private[within])

    //it is called automatically when an object is created
    public function__construct()
     {
         //Initialize variables
         $this->host = DB_HOST;
         $this->port = DB_PORT;
         $this->user = DB_USER;
         $this->password = DB_PASS;
         $this->db_name = DB_NAME;


    try{

         //create the database connection
         $this->connection = new mysqli($this->host,$this->port,$this->user,$this->password,$this->dbname);

         //check whether the connection was established
         if($this->connection->connect_error){
            echo "Unable to connect to database. <b> Please contacxt the administrator,/b> ";
            die();//exit();
         }


    //check for errors
    }catch(Exception $e){
         echo "Something went wrong"; //what the user see's
         //logging (for you as a developer)
         //var_dump($e->get Message());
    }

   
  }
    
}//end of the Database class 


 //creating an object of type database
// $db = new Database();

 //how do we access the database connection
 //var_dump($db->connection);
