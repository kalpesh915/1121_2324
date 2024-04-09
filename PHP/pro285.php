<?php
    /*
        Remove Item From an Associative Array To remove items from an associative array, you can use the unset() function. Specify the key of the item you want to delete.
    */ 

    $students = ["roll"=> "1", "fname" => "Sanjana", "lname" => "Sonagra", "city" => "Rajkot"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    unset($students["roll"], $students["city"]);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>