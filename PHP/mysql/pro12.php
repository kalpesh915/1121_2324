<?php
    /*
        Select Data From a MySQL Database
        The SELECT statement is used to select data from one or more tables:
    */

    /// create required variables for database connection
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    // connection code
    try{    
        $connection = new mysqli($hostname, $username, $password, $database);
        if($connection->connect_error){
            throw new Exception("Error while Connecting Database Server : ".$connection->connect_error);
        }else{
            /// build query for select data
            $sqlquery = "select * from students";

            // generate result
            $result = $connection->query($sqlquery);
            //print_r($result);

            // get one by one rows from result in associtive array format

            while($row = $result->fetch_assoc()){
                echo "<hr>";
                print_r($row);
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>