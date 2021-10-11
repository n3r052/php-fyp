<?php
    $host= "localhost";
    $database = "fyp";
    $user= "root";
    $pass = "";

  // // Create connection
  $connect = new mysqli($host, $user, $pass, $database);
  // // Check connection
   if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
   }
?>