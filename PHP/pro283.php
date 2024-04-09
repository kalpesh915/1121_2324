<?php
    /*
        Using the unset Function
        You can also use the unset() function to delete existing array items. Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.

    */ 

    $students = ["pooja", "sanjana", "alan", "krishil", "meet", "ansh", "brijesh"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    unset($students[0]);
    unset($students[1]);

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>