<?php
    session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $database="";
    
    $connection= mysqli_connect($host, $user, $pass, $database) or die(mysqli_error());
    
?>