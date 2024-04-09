<?php
    /*
        The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

        sort() - sort arrays in ascending order
        rsort() - sort arrays in descending order
    */ 

    $students = ["pooja", "sanjana", "ansh", "krishil", "brijesh", "kalpesh", "vansh", "meet", "alan"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    sort($students);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    

    rsort($students);

    echo "<hr>Reverse Array is :<hr>";
    print_r($students);    
?>