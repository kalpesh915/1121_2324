<?php
    /*
        PHP MySQL Create Table
        The CREATE TABLE statement is used to create a table in MySQL.
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);
        if($connection->connect_error){
            throw new Exception("Error While Connecting Database Server ".$connection->connect_error);
        }else{
            $sqlquery = "create table students (roll int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(128), phone varchar(20), gender varchar(10), created_at timestamp default current_timestamp, updated_at timestamp default current_timestamp ON UPDATE CURRENT_TIMESTAMP)";

            if($connection->query($sqlquery) === true){
                echo "<hr> Table Created";
            }else{
                echo "<hr> Error while creating table";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{

    }
?>