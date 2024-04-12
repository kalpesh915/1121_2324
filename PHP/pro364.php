<?php
    /*
        end() 	Sets the internal pointer of an array to its last 
    */

    $student = ["roll"=> 1, "fname" =>"Ansh", "lname" => "Amrutiya", "city" => "Rajkot"];

    extract($student);

    echo "Welcome $fname $lname to $city your roll no. is $roll";
?>