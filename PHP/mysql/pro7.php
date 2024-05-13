<?php
    /*
        Insert Data Into MySQL Using MySQLi and PDO 
        After a database and a table have been created, we can start adding data in them.Here are some syntax rules to follow:
        The SQL query must be quoted in PHP
        String values inside the SQL query must be quoted
        Numeric values must not be quoted
        The word NULL must not be quoted
    
        The INSERT INTO statement is used to add new records to a MySQL table:

        INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...) 
     */

     $hostname = "localhost";
     $username = "root";
     $password = "";
     $database = "1121demo";

     try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while Connecting with Database Server ".$connection->connect_error);
        }else{
            $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('alan', 'thomas', 'Rajkot', 'alan@gmail.com', '7788996655', 'male')";

            if($connection->query($sqlquery) === true){
                echo "<hr> New Student Created";
            }else{
                echo "<hr> Error while Creating new Studnet";
            }
        }
     }catch(Exception $err){
        echo "<hr> Error is $err";
     }finally{
        $connection->close();
     }
?>