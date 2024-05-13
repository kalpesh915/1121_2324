<?php
    /*
        PHP Create a MySQL Database
        A database consists of one or more tables. You will need special CREATE privileges to create or to delete a MySQL database.
        The CREATE DATABASE statement is used to create a database in MySQL.
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $connection = new mysqli($hostname, $username, $password);
        if($connection->connect_error){
            throw new Exception("Error While Connecting Database Server ".$connection->connect_error);
        }else{
            // query for create new database
            $sqlquery = "create database 1121demo";
            
            if($connection->query($sqlquery) === true){
                echo "<hr> Database Created";
            }else{
                echo "<hr> Error while Creating Database";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
    
?>