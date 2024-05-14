<?php   
    /*
        Insert Multiple Records Into MySQL Using MySQLi
        Multiple SQL statements must be executed with the mysqli_multi_query() function.
    */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "1121demo";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while Connecting With Database Server : ".$connection->connect_error);
        }else{
            $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('meet', 'sinojiya', 'Rajkot', 'meet@gmail.com', '9988774411', 'male'), 
            ('ansh', 'amritiya', 'Rajkot', 'ansh@gmail.com', '9448774411', 'male'), 
            ('brijesh', 'miatra', 'Rajkot', 'brijesh@gmail.com', '8888774411', 'male'), ('alan', 'thomas', 'Rajkot', 'alan@gmail.com', '9888774411', 'male'), ('pooja', 'mori', 'Rajkot', 'pooja@gmail.com', '7788774411', 'female'), ('sonagra', 'sanjana', 'Rajkot', 'sanjana@gmail.com', '8858774411', 'female'), ('krishil', 'trivedi', 'Rajkot', 'krishil@gmail.com', '9688774411', 'male')";

            if($connection->multi_query($sqlquery) === true){
                echo "<hr> New Students Created";
            }else{
                echo "<hr> Error while Creating New Students";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>