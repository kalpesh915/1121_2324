<?php
    /*
        Remove the Last Item
        The array_pop() function removes the last item of an array.
    */ 

    $students = ["roll"=> "1", "fname" => "Sanjana", "lname" => "Sonagra", "city" => "Rajkot"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    array_pop($students);
    array_pop($students);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>