<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr>Connection Failed Due to ".$connection->connect_error);
    }
?>