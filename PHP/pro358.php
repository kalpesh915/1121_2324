<?php
    /*
        array_walk_recursive() 	Applies a user function recursively to every member of an array
    */ 

    function printer($value, $key){
        echo "<hr> Key is $key and value is $value";
    }

    $array1 = ["roll"=>1, "fname" => "krishil", "lname" => "Trivedi"];
    $array2 = [$array1, "city" => "Rajkot", "state" => "Gujarat"];

    array_walk_recursive($array2, "printer");
?>