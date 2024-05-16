<?php
    // this file is used to make connection with database server

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Error While Connecting With Database Server ".$connection->connect_error);
    }
?>