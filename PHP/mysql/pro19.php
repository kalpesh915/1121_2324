<?php
    /*
        Delete Data From a MySQL Table Using MySQLi and PDO
        The DELETE statement is used to delete records from a table:
        DELETE FROM table_name WHERE some_column = some_value
        Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records that should be deleted. If you omit the WHERE clause, all records will be deleted!
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting with Database Server ".$connection->connect_error);
        }else{
            //$sqlquery = "delete from students where roll = 1";
            //$sqlquery = "delete from students where roll > 100";
            //$sqlquery = "delete from students where city = 'rajkot'";
            $sqlquery = "delete from students where gender = 'female'";
            $connection->query($sqlquery);

            echo "Total ".$connection->affected_rows." Rows Deleted";
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>