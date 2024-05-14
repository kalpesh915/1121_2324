<?php
    /*
        PHP MySQL Prepared Statements
        Prepared statements are very useful against SQL injections.
        Prepared Statements and Bound Parameters : A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
        Prepared statements basically work like this:

        Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
        The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
        Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values

        Compared to executing SQL statements directly, prepared statements have three main advantages:

        Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
        Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
        Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.

        
        i - integer
        d - double
        s - string
        b - BLOB

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
            $preparedStatement = $connection->prepare("insert into students (fname, lname, city, email, phone, gender) values (?,?,?,?,?,?)");

            $preparedStatement->bind_param("ssssss", $fname, $lname, $city, $email, $phone, $gender);

            $fname = "Pooja";
            $lname = "Mori";
            $city = "Rajkot";
            $email = "pooja@gmail.com";
            $phone = "778899663322";
            $gender = "female";

            if($preparedStatement->execute() === true){
                echo "New Student Created";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $preparedStatement->close();
        $connection->close();
    }
?>