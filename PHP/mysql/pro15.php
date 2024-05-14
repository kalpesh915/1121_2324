<?php
    /*
        Select and Order Data From a MySQL Database 
        The ORDER BY clause is used to sort the result-set in ascending or descending order.
        The ORDER BY clause sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.
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
            //$sqlquery = "select * from students order by fname";
            $sqlquery = "select * from students order by fname desc";
          
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