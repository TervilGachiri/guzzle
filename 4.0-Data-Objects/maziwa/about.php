<?php
//Include the composer classloader 
require_once '../vendor.autoload.php';
use \RedBeanPHP\R as R; //import the RedBean class with an Alias

require_once 'Database/Database.php';//setting up readbean 



//@TODO : Find out the differences require, require_once , include, include_once
//Use require_once() to load dependencies (classes, functions, constants). Use require() to load template-like files. Use include_once() to load optional dependencies (classes, functions, constants). Use include() to load optional template-like files

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- A meta viewport element gives the browser
         instructions on how to control the page's dimensions and scaling. -->

  <!--
    The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
  <meta name="viewport" content="width=device-width">
  <!-- Important for SEO : search engines look at this meta tags-->
  <meta name="keywords" content="Dairy,Milk,Cows">
  <meta name="author" content="BBIT 3101">
  <link rel="shortcut icon" href="images/favicon.png">
  <title>Maziwa Limited | Welcome </title>

  <link rel="stylesheet" href="css/style.css">

  <!-- cdnjs Font Awesome !-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7
  

</head>

<body>
  <div id="container">

    <header>
      <!-- Navigation -->
      <nav>
        <ul id='menu'>
          <li id='logo'>
            <span>
              <img id='logo-image' src='images/favicon.png'>
            </span>
            <h1>Maziwa Limited</h1>
          </li>
          <li id="l-logo">
          </li>
          <li class=""> <a href="index.php"> <i class="fas fa-home"></i> Home </a></li>
          <li class="active"> <a href="#"> <i class="fas fa-address-card"></i> About </a></li>
          <li class=""> <a href="contact.php"> <i class="fas fa-phone-square-alt"></i> Contact </a></li>
        </ul>
      </nav>

    </header>

    <main>
       <h2>Director</h2>  <i>RedBean Version</i> 
      <section id="director">


         <?php
         //the ORM!
         /**
          * [
          * ['lname' =>'', 'fname' =>'',...]
          * ['lname' =>'', 'fname' =>'',...]
          * ['lname' =>'', 'fname' =>'',...]
          * ['lname' =>'', 'fname' =>'',...]
          * ]
          */
          
             $results =  R::find( 'staff', ' status=1 AND role="employee" ');
             foreach($results as $result);
              $lname = $row['lname'];
              $fname = $row['fname'];
              $fullName = $fname.$lname;
              $designation = $row['short_bio'];
              $email =$row['email_address'];
              // date('Y') - 2023
              $yos = date('Y') - $row['employment_date']; 
              $linkedIn = $result['LinkedIn'];

          ?>
            <!--Our HTML shorthand echo
            <?php echo $user_image; ?>
            <?=$user_image?>
             -->
            <div class="card">   
              <img src="images/<?=$user_image?>" alt="<?$lname?>" style="width:100%">    
              <h1><?=$fulllName?></h1>  
               <p class="title">Director</p>  
               <p>Since <?=$yos?></p>  
                <a href="mailto:<?=$email?>"><i class="fa fa-envelope"></i></a>   
                <a href="<?=$linkedIn?>"><i class="fa-brands fa-linkedin"></i></a>
</div>


        <?php endforeach; ?>
      </section>

      <section id="employees">
    

        <h2>Our Employees</h2>
        <!..@TODO : Style the about page(table and also the directors)..>
          <table border=1>

            <!.. thead,tbody and tfoot ..>
              <!.. header or the titles ..>
                <tr>
                  <th>id</th>
                  <thLast name>
                    </th>
                    <th>First name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Years of Service</th>
                </tr>

                <?php
                //an ORM - Object Relational Mapper
                  $results =  R::find( 'staff', ' status=1 AND role="employee" ');
                  //5. display the data as a table
                  foreach($results as $position => $row ){
                    //echo $row['lname'];
                    $id = ++$position; #autoincrement
                    $lname = $row['lname'];
                    $fname = $row['fname'];
                    $designation = $row['short_bio'];
                    $email =$row['email_address'];
                    // date('Y') - 2023
                    $yos = date('Y') - $row['employment_date']; 
                  
                ?>

                   <tr>
                    <!.. <?php   //echo $position; ?> ..>
                   <td> <?=$position?> </td>
                   <td> <?=$lname?> </td>
                   <td> <?=$fname?> </td>
                   <td> <?=$designation?> </td>
                   <td> <?=$email?> </td>
                   <td> <?=$yos?> </td>
                   
                   </tr>
                   
              <?php  endforeach; ?>

          </table>

      </section>

    </main>

    <footer>
      <p>Maziwa Limited, Copyright &copy;
        <?php
        echo date('Y');
        //primitive types . simple data types(integers,strings,boolean) 
        ?>
      </p><!-- 2020 -->
    </footer>
  </div>
</body>

</html>

<!-- Image Sources (Credits)
1. https://www.spermex.de/sites/www.spermex.de/uploads/content/1076_700_6_gruppenfotolangenhorst_hell.jpg
2. https://thumbs.dreamstime.com/z/premium-quality-24490059.jpg
3. https://www.huhtamaki.com/globalassets/fiber-campaign-project-fresh/fresh-logo-3.png
4.https://www.cleanpng.com/png-vector-graphics-clip-art-computer-icons-image-illu-6637584/download-png.html
5. https://www.huhtamaki.com/globalassets/fiber-campaign-project-fresh/fresh-logo-3.png
  -->