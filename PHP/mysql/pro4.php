<?php
    /*
        Example How to connect with Database server with PDO
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";


    try{
        $connection = new PDO("mysql:host=$hostname;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr> Database Server Connected";    
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection = null;
    }

?>