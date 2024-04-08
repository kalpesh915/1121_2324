<?php
    /*
        PHP Associative Arrays : Associative arrays are arrays that use named keys that you assign to them.
    */ 

    $student = array("roll" => 123, "fname" => "Krishil", "lname" => "Trivedi", "city" => "Rajkot");

    print_r($student);
    $student["fname"] = "KRISHIL";
    echo "<hr> Updated Array is <hr>";
    print_r($student);
?>