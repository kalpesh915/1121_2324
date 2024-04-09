<?php
    /*
        Using the array_diff Function
        You can also use the array_diff() function to remove items from an associative array.
        This function returns a new array, without the specified items.
    */ 

    $students = ["roll"=> "1", "fname" => "Sanjana", "lname" => "Sonagra", "city" => "Rajkot"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    //$students = array_diff($students, ["Sonagra", "Rajkot"]);
    $students = array_diff($students, ["Rajkot"]);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>