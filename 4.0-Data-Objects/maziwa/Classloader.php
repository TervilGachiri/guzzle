<?php

function loader($className){
    //replace \ with /
     $className = str_replace("\\","/",$className);

     //before Database\Database

    // die($className1);// Database/Database.php
     $filePath = $className1.'.php';
     require_once $filePath;
}

//load the class loader
$pl_autoload_register("loader");