<?php
    /*
        ksort() 	Sorts an associative array in ascending order, according to the key
    */

    $student = ["roll"=> 1, "fname" =>"Ansh", "lname" => "Amrutiya", "city" => "Rajkot"];
    ksort($student);
    print_r($student);
?>