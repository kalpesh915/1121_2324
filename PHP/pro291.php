<?php
    /*
        ksort() - sort associative arrays in ascending order, according to the key
        krsort() - sort associative arrays in descending order, according to the key
    */ 

    $students = ["roll"=>1, "fname"=>"krishil", "lname"=>"trivedi", "city"=>"rajkot", "state"=>"gujarat"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    ksort($students);
    echo "<hr>Updated Array is :<hr>";
    print_r($students);    

    krsort($students);
    echo "<hr>Reverse Array is :<hr>";
    print_r($students);    
?>