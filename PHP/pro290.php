<?php
    /*
        asort() - sort associative arrays in ascending order, according to the value
        arsort() - sort associative arrays in descending order, according to the value
    */ 

    $students = ["roll"=>1, "fname"=>"krishil", "lname"=>"trivedi", "city"=>"rajkot", "state"=>"gujarat"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    asort($students);
    echo "<hr>Updated Array is :<hr>";
    print_r($students);    

    arsort($students);
    echo "<hr>Reverse Array is :<hr>";
    print_r($students);    
?>