<?php
    /* 
        PHP foreach Loop
        The foreach loop - Loops through a block of code for each element in an array or each property in an object.

        The foreach Loop on Arrays : The most common use of the foreach loop, is to loop through the items of an array.
    */

    $students = ["Meet", "Ansh", "Alan", "Brijesh", "Krishil", "Gautam", "Pooja", "Sanjana"];

    foreach($students as $tmp){
        echo "<hr> Welcome $tmp";
    }

    /*
        For every loop iteration, the value of the current array element is assigned to the variabe $tmp. The iteration continues until it reaches the last array element.
    */ 
?>