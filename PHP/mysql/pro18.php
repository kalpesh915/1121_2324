<?php
    /*
        Update Data In a MySQL Table Using MySQLi and PDO
        The UPDATE statement is used to update existing records in a table: 
        UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value

        Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which record or records that should be updated. If you omit the WHERE clause, all records will be updated!
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
            //$sqlquery = "update students set fname = 'POOJA' where roll = 1";
            //$sqlquery = "update students set fname = 'POOJA'";
            //$sqlquery = "update students set fname = 'POOJA', gender = 'female' where roll = 100";
            //$sqlquery = "update students set fname = 'POOJA', gender = 'female' where roll > 50";
            $sqlquery = "update students set fname = 'POOJA', lname = 'mori', city = 'rajkot', email = 'pooja@gmail.com', phone = '874123650', gender = 'female'";
            $connection->query($sqlquery);

            echo "Total ".$connection->affected_rows." Rows Updated";
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>