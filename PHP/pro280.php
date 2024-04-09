<?php
    /*
        Add Multiple Array Items
        To add multiple items to an existing array, use the array_push() function.
    */ 

    $students = ["pooja", "sanjana"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    array_push($students, "brijesh", "ansh", "meet", "krishil");

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>