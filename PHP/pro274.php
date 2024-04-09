<?php
    /*
        PHP Update Array Items
        Update Array Item
        To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
    */ 

    $students = ["Brijesh", "Ansh", "Krishil","Sanajan", "Pooja"];

    echo "<hr> Original Array is <hr>";
    print_r($students);

    $students[0] = "BRIJESH";
    $students[1] = "ANSH";

    echo "<hr> Updated Array is <hr>";
    print_r($students);
?>