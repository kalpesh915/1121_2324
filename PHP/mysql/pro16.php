<?php
    /*
        PHP MySQL Limit Data Selections
        Limit Data Selections From a MySQL Database
        MySQL provides a LIMIT clause that is used to specify the number of records to return. The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.
        Mysql also provides a way to handle this: by using OFFSET.
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
            // $sqlquery = "select * from students ";
            // $sqlquery = "select * from students limit 10";
            // $sqlquery = "select * from students limit 10 offset 10";
            $sqlquery = "select * from students limit 10 offset 100";
          
            // generate result
            $result = $connection->query($sqlquery);
            //print_r($result);

            // get one by one rows from result in associtive array format
            echo "<table border='1'>
            <tr>
                <th>Roll No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>";

            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>$row[roll]</td>
                    <td>$row[fname]</td>
                    <td>$row[lname]</td>
                    <td>$row[city]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[gender]</td>
                    <td>$row[created_at]</td>
                    <td>$row[updated_at]</td>
                </tr>";
                //print_r($row);
            }
            echo "</table>";
            }else{
                echo "<tr>
                    <th colspan='9'>No Data Found in Database</th>
                </tr>";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>