<?php
    /*
        krsort() 	Sorts an associative array in descending order, according to the key
    */

    $student = ["roll"=> 1, "fname" =>"Ansh", "lname" => "Amrutiya", "city" => "Rajkot"];
    krsort($student);
    print_r($student);
?>