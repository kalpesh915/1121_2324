<?php
    /*
        Loop Through an Associative Array : To loop through and print all the values of an associative array, you could use a foreach loop, like this:
    */ 

    $student = array("roll" => 123, "fname" => "Krishil", "lname" => "Trivedi", "city" => "Rajkot");

    foreach($student as $key => $value){
        echo "<hr> $key is $value";
    }
?>