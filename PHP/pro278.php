<?php
    /*
        PHP Add Array Items
        To add items to an existing array, you can use the bracket [] syntax.
    */ 

    $students = ["brijesh", "ansh", "meet", "krishil", "alan", "sanjana", "pooja"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    $students[] = "Sumit";
    $students[] = "Riya";
    $students[] = "Dipak";
    $students[] = "Khushi";

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>