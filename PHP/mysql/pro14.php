<?php
    /*
       Select and Filter Data From a MySQL Database
       The WHERE clause is used to filter records.
       The WHERE clause is used to extract only those records that fulfill a specified condition
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
            //$sqlquery = "select * from students";
            //$sqlquery = "select * from students where roll > 100";
            //$sqlquery = "select * from students where fname = 'pooja'";
            //$sqlquery = "select * from students where fname <> 'pooja'";
            //$sqlquery = "select * from students where roll > 50 and roll <= 100";
            //$sqlquery = "select * from students where gender = 'male'";
            $sqlquery = "select * from students where gender <> 'male'";

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