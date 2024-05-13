<?php
    /*
        Example How to connect with Database server with PDO
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=$hostname;", $username, $password);

    echo "<hr> Database Server Connected";

    $connection = null;

?>