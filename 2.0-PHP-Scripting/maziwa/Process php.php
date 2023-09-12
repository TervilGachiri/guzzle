<?php

/**
 * Handle all database operations
 * 
 * 
 * -Get the data
 * -Validation (if problem,give the user an error message)
 * -Store the data in a database table
 * -Return a success message to the user
 */

 //1.Get the data
 //there is some data
 //it is a POST instead of a GET

 //@TODO #5 : Data and input
 //@TODO #6 : Validation
 //@TODO #7 : Send back messages
 

 //superglobals, predefined/Built-in-variables


 if( isset($_POST['submit']) && $_POST['submit'] == "submit"){
    //VARIABLES 101 $_POST,$_GET,$_SERVER...
   // var_dump($_POST); // variables are case sensitive _POSt  _POST
    //User defined variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $country = $_POST['country'];
    $pcode = $_POST['pcode'];
    $pnumber = $_POST['pnumber'];
    $phone = $pcode.$pnumber;
    $today = date("Y-m-d H:i:s"); //2023.09.11 12:27:37//gives us my sql datetime format for today/now

    //2.Validation

    //3.store the data in a database table
    //3.1 make a database connection
    $db=mysqli_connect('localhost','api_user','api_user','class_db');

    $db=mysqli_connect('localhost','root','','class_db');

    //if(mysqli_connect_error () ){
    //    // String operation - joining of strings or concatenation .(dot opearator)
    //    die("Database connection failed!" .mysqli_connect_error () );
    //    //stop execution here!
    //}

    #sql = "INSERT INTO contact('name', 'email','country','contact_date','phone','message') 
    VALUES('$name','$email','$country','$today','$phone','$message');

    //$string1 = "Nganga";
    //$string1 = " John said ,"I tell you" ';
    //$string1 =Ng'ang'a";
    //$string1 =Ng\'ang\"a";


    //insert data
    mysqli_query($db,$sql);

    //4.Return a success mssage to the user
    echo "Your message has been received";
    echo "<a href='index.php'>Go To Home Page</a>";
 }else{
    //redirect the user back to the home page
    header('Location:index.php'); 

 }