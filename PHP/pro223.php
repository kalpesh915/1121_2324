<?php
    /* 
        Foreach Byref
        When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:

        Example of Call by reference example

        BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
    */
                
    $students = ["Ansh", "Meet", "Alan", "Krishil", "Brijesh", "Gautam", "Pooja", "Sanjana"];

    echo "<hr> Before Loop Student Names are ";
    print_r($students);

    echo "<hr> Names in Loop";
    foreach($students as &$tmp){
        $tmp = strtoupper($tmp);
        echo " $tmp";
    }

    echo "<hr> After Loop Student Names are ";
    print_r($students);
?>