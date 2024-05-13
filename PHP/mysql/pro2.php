<?php
    /*
        Example How to connect with Database server with MySQLi Procedural
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($hostname, $username, $password);

    if(!$connection){
        die("<hr> Failed to Connect with Database Server");
    }else{
        echo "Database Server Connected";
    }
    
    mysqli_close($connection);
?>