<?php
 $server = "localhost";
 $name = "root";
 $pass ="";
 $database = "admin";
 $con = new mysqli($server, $name , $pass, $database);
 if(isset($con)){
//    echo"Database connect Success";
 }
?>