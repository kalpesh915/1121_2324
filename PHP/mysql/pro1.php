<?php
    /*
        Example How to connect with Database server
        Example (MySQLi Object-Oriented)
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        echo die("<hr> Error while connecting with Database Server ".$connection->connect_error);
    }else{
        echo "<hr>Database Server Connected";
    }

    $connection->close();
?>