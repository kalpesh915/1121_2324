<?php
    /*
        array_chunk() 	Splits an array into chunks of arrays
    */ 

    $student = array("Sanjana", "Pooja", "Brijesh", "Krishil", "Alan", "Ansh","Meet");
    echo "<hr>Original Array is : <hr>";
    print_r($student);

    echo "<hr>Array Chunks are <hr>";
    print_r(array_chunk($student, 4));
?>