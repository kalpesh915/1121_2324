<?php
    /*
        PHP Associative Arrays : Associative arrays are arrays that use named keys that you assign to them.
    */ 

    $student = array("roll" => 123, "fname" => "Krishil", "lname" => "Trivedi", "city" => "Rajkot");

    //echo "Student Name is ".$student["fname"];
    //echo "Student Name is {$student["fname"]}";
    echo "Student Name is {$student['fname']}";
?>