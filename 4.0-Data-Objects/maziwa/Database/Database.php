<?php
use \RedBeanPHP\R as R; //import the RedBean class with an Alias

//define constants for oue database connection(credentials)
 define('DB_HOST', 'localhost');   
 define('DB_PORT', '3306');
 define('DB_USER', 'root');//root
 define('DB_PASS', '');//**
 define('DB_NAME', 'class_db');

 

//we are setting up ReadBean  - direct
R::setup( "mysql:host=localhost;dbname=class_db", 
'root', '' ); //for both mysql or mariaDB

/*
//Use our constants
R::setup( "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
DB_USER, DB_PASS); //for both mysql or 
*/



