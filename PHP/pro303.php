<?php
    /*
        array_change_key_case() 	Changes all keys in an array to lowercase or uppercase
    */ 

    $student = array("roll" => 1, "fname" => "Sanjana", "lname" => "Sonagra", "city" => "Rajkot");
    echo "<hr>Original Array is : <hr>";
    print_r($student);

    $student = array_change_key_case($student, CASE_UPPER);
    echo "<hr>Updated Array is : <hr>";
    print_r($student);
?>