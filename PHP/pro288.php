<?php
    /*
        Remove the First Item
        The array_shift() function removes the first item of an array.
    */ 

    $students = ["roll"=> "1", "fname" => "Sanjana", "lname" => "Sonagra", "city" => "Rajkot"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    array_shift($students);
    array_shift($students);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>