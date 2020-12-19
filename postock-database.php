<?php
 $userHost = "localhost";
 $userUsername = "root";
 $userPassword = "";
 $userDatabase = "postock_db";
 
 $con = new mysqli($userHost, $userUsername, $userPassword, $userDatabase);
 if($con->error)
 {
     echo $con->error;
 }
 else
 {
     return $con;
 }
?>