<?php


   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'webtek');

 
 $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
 $dbcon = mysqli_select_db($conn,DB_DATABASE);
 
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }
 
 ?>