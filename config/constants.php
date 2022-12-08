<?php

// start session
    session_start();

    // create constantto store non repeating values 
    define('SITEURL','http://localhost:8012/foodordering/');
    define('LOCALHOST' , 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'foodorder_project');


     $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD ) or die(mysqli_error()); //Database Connection

     $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
      //SElecting Database
?>