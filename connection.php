<?php 
   $conect = mysqli_connect("localhost", "root", "", "registration");
   if (!$conect) {
       die("Connection failed: " . mysqli_connect_error());
   }
?>

