<?php
    /*
        Associative Arrays
        To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
    */ 

    $student = ["roll"=>1, "fname"=>"brijesh"];

    echo "<hr>Original Array is :<hr>";
    print_r($student);

    $student["lname"] = "Miatra";
    $student["city"] = "Rajkot";

    echo "<hr>Updated Array is :<hr>";
    print_r($student);    
?>