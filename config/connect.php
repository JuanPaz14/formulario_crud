<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="calificaciones";
   // Create connection
   $conn = mysqli_connect($host, $user, $password, $database);
   
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>