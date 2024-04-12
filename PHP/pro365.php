<?php
    /*
        in_array() 	Checks if a specified value exists in an array 
    */

    $student = ["roll"=> 1, "fname" =>"Ansh", "lname" => "Amrutiya", "city" => "Rajkot"];

    if(in_array("Rajkot", $student)){
        echo "True";
    }else{
        echo "False";
    }
?>