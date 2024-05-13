<?php
    /*
        Get ID of The Last Inserted Record
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
                echo "<hr> New Student Created with Roll No. ".$connection->insert_id;
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